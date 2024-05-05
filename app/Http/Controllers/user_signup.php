<?php


namespace App\Http\Controllers;

use App\Models\adminModel;
use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Hash;

class user_signup extends Controller
{
    public function signup(Request $request){
        $user = new users;

            if ($request->isMethod('post')) {
            $user->name = $request->input('name');
            $user->phone = $request->input('phone');
            $user->cnic = $request->input('cnic');
            $user->address = $request->input('address');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
        
            $user->save();

            return view('main');
            }
    }



    

    public function checkSessionLogin(Request $request) {
        if ($request->session()->has('admin')) {
            
            return view('adminAnalytics');}

        else {
            return view('adminLogin');
            
        }
    }
    public function checkSessionSignup(Request $request) {
        if ($request->session()->has('admin')) {
            
            $email = $request->session()->get('email');
            dd($email);
            return view('main');}

        else {
            return view('signup');
            
        }
    }
    
    public function logout(Request $request) {
        $request->session()->forget('email');
        
        return view('login');
    }
    
}
