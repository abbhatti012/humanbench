<?php

namespace App\Http\Controllers;

use App\Models\BadDay;
use App\Models\BestScore;
use App\Models\History;
use Carbon\Carbon;
use App\Models\User;
use App\Models\ReactionTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard(Request $request){
        if(isset($request->date)){
            $date = explode(' to ',$request->date);
            $start_date = $date[0];
            $end_date = $date[1];
        } else {
            $date = Carbon::now();
            $start_date = $date->startOfMonth()->format('Y-m-d');
            $end_date = $date->endOfMonth()->format('Y-m-d');
        }
        $graph_data = $this->getStat($start_date, $end_date);
        if(Auth::check()){
            $reactions = ReactionTest::orderBy('id','desc')->where('user_id',Auth::id())->limit(5)->get();
            $user = User::find(Auth::id());
            $data['best_time'] = ReactionTest::where('user_id',Auth::id())->min('best_score');
        } else {
            $keys=array('HTTP_CLIENT_IP','HTTP_X_FORWARDED_FOR','HTTP_X_FORWARDED','HTTP_FORWARDED_FOR','HTTP_FORWARDED','REMOTE_ADDR');
            foreach($keys as $k) {
                if (!empty($_SERVER[$k]) && filter_var($_SERVER[$k], FILTER_VALIDATE_IP)) {
                    $ip = $_SERVER[$k];
                }
            }
            $host = gethostname();
            $reactions = ReactionTest::orderBy('id','desc')->whereHost($host)->whereIp($ip)->limit(5)->get();
            $user = [];
            $data['best_time'] = ReactionTest::whereHost($host)->whereIp($ip)->min('best_score');
        }
        
        $personal_average_reaction = 0;
        if(count($reactions) != 0){
            for($i = 0; $i < count($reactions); $i++){
                $personal_average_reaction += $reactions[$i]->last_score;
            }
            $data['personal_average_reaction'] = round($personal_average_reaction / count($reactions), 2);
            $data['percentile'] = getPercentile($data['personal_average_reaction']);
        } else {
            $data['personal_average_reaction'] = 0;
            $data['percentile'] = 0;
        }
            
        return view('dashboard.dashboard',compact('user','reactions','data','graph_data'));
    }
    public function getStat($start_date, $end_date){
        $date = [0=>$start_date,1=>$end_date];

        if(Auth::check()){
            $graphOrders = ReactionTest::select('*')->where('user_id',Auth::id())->whereBetween('created_at',$date);
        } else {
            $keys=array('HTTP_CLIENT_IP','HTTP_X_FORWARDED_FOR','HTTP_X_FORWARDED','HTTP_FORWARDED_FOR','HTTP_FORWARDED','REMOTE_ADDR');
            foreach($keys as $k) {
                if (!empty($_SERVER[$k]) && filter_var($_SERVER[$k], FILTER_VALIDATE_IP)) {
                    $ip = $_SERVER[$k];
                }
            }
            $host = gethostname();
            $graphOrders = ReactionTest::select('*')->whereHost($host)->whereIp($ip)->whereBetween('created_at',$date);
        }
        
        $get_date_series = $this->get_date_series($start_date, $end_date);
        $days = count($get_date_series);
        $graph = $this->get_labels($days, $graphOrders->get(), $get_date_series, $start_date, $end_date);
        
        // $ordermcount = [];
        $averageDayScore = [];
        foreach ($graph['orders'] as $key => $order) {
            $sum = 0;
            foreach($order as $value){
                $sum = $sum + $value->last_score;
            }
            // $ordermcount[(int)$key] = count($order);
            $averageDayScore[(int)$key] = round($sum / count($order));
        }
        
        for($i = 0; $i < $graph['count']; $i++){
            if(!empty($averageDayScore[$i])){
                $statAverageTime[$i] = $averageDayScore[$i];
            }else{
                $statAverageTime[$i] = 0;
            }
            if(!empty($averageDayScore[$i])){
                $statPercentage = getPercentile(round($averageDayScore[$i],2));
                // $statPercentile[$i] = getPercentage($statPercentage);
                $statPercentile[$i] = getPercentage($statPercentage);
            }else{
                $statPercentile[$i] = 0;
            }
        }
        $graph_data['statAverageTime'] = $statAverageTime;
        $graph_data['statPercentile'] = $statPercentile;
        $graph_data['statLabel'] = $graph['label'];
        return $graph_data;
    }
    public function get_date_series($start_date, $end_date){
        $dates = array();
        $current = strtotime($start_date);
        $date2 = strtotime($end_date);
        $stepVal = '+1 day';
        while( $current <= $date2 ) {
            $dates[] = date('d-M', $current);
            $current = strtotime($stepVal, $current);
        }
        return $dates;
    }
    public function get_labels($days, $graphOrders, $get_date_series, $start_date, $end_date){
        if($days >= 0 && $days <= 1){
            $data['orders'] = $graphOrders->groupBy(function($date) {
                return Carbon::parse($date->created_at)->format('h');
            });
           
            $data['label'] = ['1PM', '2PM', '3PM', '4PM', '5PM', '6PM', '7PM','8PM' ,'9PM', '10PM', '11PM', '12AM', '13AM', '14AM', '15AM', '16AM', '17AM', '18AM', '19AM', '20AM', '21AM', '22AM', '23AM', '00PM'];
            $data['count'] = 24;
        } else if($days > 1 && $days <= 14){
            $data['orders'] = $graphOrders->groupBy(function($date) {
                return Carbon::parse($date->created_at)->format('d');
            });
           
            $data['label'] = $get_date_series;
            $data['count'] = $days;
        } else if($days > 14 && $days < 30){
            $data['orders'] = $graphOrders->groupBy(function($date) {
                return Carbon::parse($date->created_at)->format('d');
            });
            
            $data['label'] = $get_date_series;
            $data['count'] = $days;
        } else if($days >= 29 && $days <= 31){
            $data['orders'] = $graphOrders->groupBy(function($date) {
                return Carbon::parse($date->created_at)->format('d');
            });
            
            $data['label'] = $get_date_series;
            $data['count'] = $days;
        } else if($days > 31 && $days < 365){
            $data['orders'] = $graphOrders->groupBy(function($date) {
                return Carbon::parse($date->created_at)->format('m');
            });
            
            $data['label'] = ['JAN', 'FEB', 'MARCH', 'APRIL', 'MAY', 'JUN', 'JUL', 'AUG', 'SEPT', 'OCT', 'NOV', 'DEC'];
            $data['count'] = 12;
        } else {
            $data['orders'] = $graphOrders->groupBy(function($date) {
                return Carbon::parse($date->created_at)->format('y');
            });
            $years = range(date('Y', strtotime($start_date)), date('Y', strtotime($end_date)));
            $data['label'] = $years;
            $data['count'] = count($years);
        }
        
        return $data;
    }
    
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
    public function profile(){
        $user = User::find(Auth::id());
        return view('front.profile',compact('user'));
    }
    public function save_profile(Request $request){
        $user = User::find(Auth::id());
        if($request->avatar){
            $profileImage = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path('assets/img'), $profileImage);
            $user->avatar = 'assets/img/'.$profileImage;
        }
        $user->name = $request->name;
        $user->age = $request->age;
        $user->gender = $request->gender;
        $user->save();
        return back()->with('message', ['text'=>'Profile has been updated successfully!','type'=>'success']);
    }
    public function updatePassword(Request $request){
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with('message', ['text'=>"Old Password Doesn't match",'type'=>'danger']);
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with('message', ['text'=>'Password changed successfully!','type'=>'success']);
    }
    public function save_reaction_score(Request $request){
        $score = $request->score;
        $scores = $request->scores;
        if(Auth::check()){
            $ip = '';
            $host = '';
            $user_id = Auth::id();
            $score_array = ReactionTest::where('user_id',$user_id)->where('created_at',date('Y-m-d'))->get('last_score')->toArray();
        } else {
            $user_id = 0;
            $keys=array('HTTP_CLIENT_IP','HTTP_X_FORWARDED_FOR','HTTP_X_FORWARDED','HTTP_FORWARDED_FOR','HTTP_FORWARDED','REMOTE_ADDR');
            foreach($keys as $k) {
                if (!empty($_SERVER[$k]) && filter_var($_SERVER[$k], FILTER_VALIDATE_IP)) {
                    $ip = $_SERVER[$k];
                }
            }
            $host = gethostname();
            $score_array = ReactionTest::where('host',$host)->where('ip',$ip)->where('created_at',date('Y-m-d'))->get('last_score')->toArray();
        }
        $best_score = min($scores);
        
        $reaction = new ReactionTest();
        $reaction->last_score = $score;
        $reaction->score1 = $scores[0];
        $reaction->score2 = $scores[1];
        $reaction->score3 = $scores[2];
        $reaction->score4 = $scores[3];
        $reaction->score5 = $scores[4];
        $reaction->avg_score = round(($scores[0] + $scores[1] + $scores[2] + $scores[3] + $scores[4])/5, 1);
        $reaction->ip = $ip;
        $reaction->host = $host;
        $reaction->best_score = $best_score;
        $reaction->user_id = $user_id;

        $percentile = getPercentile($score);
        $reaction->percentile = $percentile;
        $reaction->save();
        $sorted_array = [];
        if($score_array && count($score_array) > 4){
            for($i = 0; $i < 5; $i++){
                array_push($sorted_array, $score_array[$i]['last_score']);
            }
            array_push($sorted_array, $reaction->score5);
            sort($sorted_array);
            $data['index'] = array_search($reaction->score5, $sorted_array) + 1;
        } else {
            array_push($sorted_array, $reaction->score5);
            sort($sorted_array);
            $data['index'] = array_search($reaction->score5, $sorted_array) + 1;
        }
        if(count($score_array) >= 5){
            $data['current_percentile'] = round($data['index']/count($score_array)*100,1);
        } else {
            $data['current_percentile'] = 0;
        }
        $best_score_so_far = $this->save_best_score($best_score);
        // $best_percentile_so_far = getPercentage(getPercentile($best_score_so_far));

        $this->save_bad_day($reaction->avg_score);

        if($ip != ''){
            $current_avg = BadDay::where('host',$host)->where('ip',$ip)->where('created_at',date('Y-m-d'))->first();
        } else {
            $current_avg = BadDay::where('user_id',$user_id)->where('created_at',date('Y-m-d'))->first();
        }
        $previous_score = $this->get_previous_avg_score($current_avg->score, $ip, $host);
        
        $data['previous_avg'] = getPercentile($previous_score);
        $data['current_avg'] = getPercentile($current_avg->score);

        // $previous_percentage = getPercentage($data['previous_avg']);
        // $current_percentage = getPercentage($data['current_avg']);
        
        // if (str_contains($data['previous_avg'], 'Btm') && str_contains($data['current_avg'], 'Btm')) {
        //     if($previous_percentage > $current_percentage){
        //         $data['better_score'] = $previous_percentage - $current_percentage;
        //         $data['is_better'] = 0;
        //     } else {
        //         $data['better_score'] = $current_percentage - $previous_percentage;
        //         $data['is_better'] = 1;
        //     }
        // } elseif(str_contains($data['previous_avg'], 'Top' && str_contains($data['current_avg'], 'Top'))) {
        //     if($previous_percentage > $current_percentage){
        //         $data['better_score'] = $previous_percentage - $current_percentage;
        //         $data['is_better'] = 0;
        //     } else {
        //         $data['better_score'] = $current_percentage - $previous_percentage;
        //         $data['is_better'] = 1;
        //     }
        // }
        if($previous_score != ''){
            if($previous_score > $current_avg->score){
                $score = $previous_score - $current_avg->score;
                $data['better_score'] = round(($score/$previous_score)*100,1);
                $data['is_better'] = 1;
                $away = $current_avg->score - $best_score_so_far;
                $data['away'] = round(($away/$current_avg->score)*100,1);
            } else {
                $score = $current_avg->score - $previous_score;
                $data['better_score'] = round(($score/$current_avg->score)*100,1);
                $data['is_better'] = 0;
           }
        }
        if($previous_score != ''){
            return response()->json(['status' => 'ok', 'data' => $data]);
        } else {
            return response()->json(['status' => '', 'data' => $data]);
        }
    }
    public function get_previous_avg_score($current_score, $ip, $host){
        $date = date('Y-m-d');
        if($ip != ''){
            $previous_score = BadDay::where(array('host' => $host, 'ip' => $ip))->where('created_at','!=',$date)->orderBy('id','desc')->first();
        } else {
            $previous_score = BadDay::where(array('user_id' => Auth::id()))->where('created_at','!=',$date)->orderBy('id','desc')->first();
        }
        if($previous_score){
            return $previous_score->score;
            // if((int)$previous_score->score < $current_score){
            //     return getPercentile($previous_score->score);
            // } else {
            //     return '';
            // }
        } else {
            return '';
        }
    }
    public function save_best_score($best_score){
        if(Auth::check()){
            $history = BestScore::firstOrNew(array('user_id' => Auth::id()));
            $history->user_id = Auth::id();
        } else {
            $keys=array('HTTP_CLIENT_IP','HTTP_X_FORWARDED_FOR','HTTP_X_FORWARDED','HTTP_FORWARDED_FOR','HTTP_FORWARDED','REMOTE_ADDR');
            foreach($keys as $k) {
                if (!empty($_SERVER[$k]) && filter_var($_SERVER[$k], FILTER_VALIDATE_IP)) {
                    $ip = $_SERVER[$k];
                }
            }
            $host = gethostname();
            $history = BestScore::firstOrNew(array('ip' => $ip, 'host' => $host));
            $history->host = $host;
            $history->ip = $ip;
        }
        if($history->best_score == ''){
            $history->best_score = $best_score;
        } else {
            if($history->best_score > $best_score){
                $history->best_score = $best_score;
            }
        }
        $history->save();
        return $history->best_score;
    }
    public function save_bad_day($bad_score){
        if(Auth::check()){
            $history = BadDay::firstOrNew(array('user_id' => Auth::id(), 'created_at' => date('Y-m-d')));
            $history->user_id = Auth::id();
        } else {
            $keys=array('HTTP_CLIENT_IP','HTTP_X_FORWARDED_FOR','HTTP_X_FORWARDED','HTTP_FORWARDED_FOR','HTTP_FORWARDED','REMOTE_ADDR');
            foreach($keys as $k) {
                if (!empty($_SERVER[$k]) && filter_var($_SERVER[$k], FILTER_VALIDATE_IP)) {
                    $ip = $_SERVER[$k];
                }
            }
            $host = gethostname();
            $history = BadDay::firstOrNew(array('ip' => $ip, 'host' => $host, 'created_at' => date('Y-m-d')));
            $history->host = $host;
            $history->ip = $ip;
        }
        if($history->score == ''){
            $history->score = $bad_score;
        } else {
            $history->score = round(($history->score + $bad_score)/2, 1);
        }
        $history->save();
        return true;
    }
    public function reaction_time(){
        $date = Carbon::now();
        $start_date = $date->startOfMonth()->format('Y-m-d');
        $end_date = $date->endOfMonth()->format('Y-m-d');
        $graph_data = $this->getStat($start_date, $end_date);

        if(Auth::check()){
            $reactions = ReactionTest::orderBy('id','desc')->where('user_id',Auth::id())->get();
            $user = User::find(Auth::id());
        } else {
            $keys=array('HTTP_CLIENT_IP','HTTP_X_FORWARDED_FOR','HTTP_X_FORWARDED','HTTP_FORWARDED_FOR','HTTP_FORWARDED','REMOTE_ADDR');
            foreach($keys as $k) {
                if (!empty($_SERVER[$k]) && filter_var($_SERVER[$k], FILTER_VALIDATE_IP)) {
                    $ip = $_SERVER[$k];
                }
            }
            $host = gethostname();
            $reactions = ReactionTest::orderBy('id','desc')->whereHost($host)->whereIp($ip)->get();
            $user = [];
        }
        return view('front.reaction-time',compact('reactions','graph_data','user'));
    }
}