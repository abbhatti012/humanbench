<?php

namespace App\Http\Controllers;

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
            $data['best_time'] = ReactionTest::where('user_id',Auth::id())->min('last_score');
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
            $data['best_time'] = ReactionTest::whereHost($host)->whereIp($ip)->min('last_score');
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
        } else {
            $user_id = 0;
            $keys=array('HTTP_CLIENT_IP','HTTP_X_FORWARDED_FOR','HTTP_X_FORWARDED','HTTP_FORWARDED_FOR','HTTP_FORWARDED','REMOTE_ADDR');
            foreach($keys as $k) {
                if (!empty($_SERVER[$k]) && filter_var($_SERVER[$k], FILTER_VALIDATE_IP)) {
                    $ip = $_SERVER[$k];
                }
            }
            $host = gethostname();
        }
        $reaction = new ReactionTest();
        $reaction->last_score = $score;
        $reaction->score1 = $scores[1];
        $reaction->score2 = $scores[2];
        $reaction->score3 = $scores[3];
        $reaction->score4 = $scores[4];
        $reaction->score5 = $scores[5];
        $reaction->ip = $ip;
        $reaction->host = $host;
        $reaction->user_id = $user_id;

        $percentile = getPercentile($score);
        $reaction->percentile = $percentile;
        $reaction->save();
        return response()->json(true);
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