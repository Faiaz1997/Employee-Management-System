<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\users;
use Illuminate\Http\Request;
use Session;
use DB;

class emsController extends Controller
{
    //
    public function login(){
        return view('user.login');
    }
    public function checkLogin(Request $request)
    {
        $userInfo = users::where('email',$request->email)->first();
        if ($userInfo) {
            $existingPass = $userInfo->password;
            $role = $userInfo->role;
            if (password_verify($request->password, $existingPass)) {
                Session::put('id', $userInfo->id);
                Session::put('name', $userInfo->name);
                if($role == 1){
                    return redirect('/');
                }
                else{
                    return redirect('/empdashboard');
                }
              
            } else {
                return back()->with('message', 'Please use valid password');
            }
        } else {
            return back()->with('message', 'Please use valid Email');
        }
    }

    public function logout(){
        Session::forget('id');
        Session::forget('name');
        return redirect('/login')->with('Logout Sucessful');
    }
}
