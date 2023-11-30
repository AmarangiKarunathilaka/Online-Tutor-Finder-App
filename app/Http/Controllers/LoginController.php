<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{

    public function showLoginForm(){
        return view('login');
    }

    public function login(Request $request) 
    {
        $credentials = [];

        if ($request->user_type == 'admin') {
            $credentials = [
                'email' => $request->email,
                'password' => $request->password
            ];
        } else if ($request->user_type == 'tutor') {
            $credentials = [
                'tutorEmail' => $request->email,
                'password' => $request->password
            ];
        } else {
            $credentials = [
                'studentEmail' => $request->email,
                'password' => $request->password
            ];
        }

        $guard = $request->user_type; 
        if (Auth::guard($guard)->attempt($credentials)) {
            if ($guard == 'admin') {
                return redirect('/adminHome');
            } elseif ($guard == 'tutor') {
                return redirect('/tutorHome');
            } else {
                return redirect('/studentHome');
            }
        }
        return redirect()->back()->with('error', 'Credentials do not match')->with('user_type', $request->user_type);
    }
}