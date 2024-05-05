<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_signup;
use App\Models\searchModel;
use App\Models\testt;
use Illuminate\Support\Facades\Response;
use Laravel\Dusk\Browser;



class usersignup extends Controller
{
    public function fetchnews() { 
        $news = testt::all();
        // $students = DB::select("select * from users"); 
        return view('blog', ['news' => $news]); 
        } 
    public function signup(Request $request) { 

        $user = new user_signup;
        $user->name = $request->input('name');
        $user->phone = $request->input('phone'); 
        $user->cnic = $request->input('cnic'); 
        $user->address = $request->input('address'); 
        $user->email = $request->input('email'); 
        $user->password = $request->input('password'); 
        // $user->user_Cnic = $request->input('password'); 
        // $pic = $request->file('pic'); 
        // $picName = $pic->getClientOriginalName(); 
        // $picType = $pic->getClientOriginalExtension(); 
        // $picSize = $pic->getSize(); 
        // $pic->move('uploads',$picName); 
        // $user->user_Pic = 'uploads/'.$picName; 
        $user->save();

        return view('main');
    }

    

    public function logout(Request $request){
        $request->session()->forget('email');
        $request->session()->forget('name');
        return view('main');
    }


}