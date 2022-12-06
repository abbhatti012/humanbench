<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
        $this->middleware('auth');
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
    public function dashboard(){
        if(Auth::check()){
            $user = User::find(Auth::id());
        }
        return view('dashboard.dashboard',compact('user'));
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
}
