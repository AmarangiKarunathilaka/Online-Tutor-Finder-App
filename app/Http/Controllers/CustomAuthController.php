<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\login;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('/login');
    }
    public function login(Request $request)
    {
       /* $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->with('message', 'Signed in!');
        }
   
        return redirect('/login')->with('message', 'Login details are not valid!');*/
    
    login::create([
        'email'=> $request -> email,
        'password'=> $request -> password,
        
       ]);
    }
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
        return redirect('/login');
    }
     
    public function signOut() {
        Session::flush();
        Auth::logout();
   
        return redirect('/login');
    }
}
