<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\studentRegister;
use App\Models\tutorRegister;
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
                'password' => $request->password,
            ];
        } else {
            $credentials = [
                'studentEmail' => $request->email,
                'password' => $request->password,
            ];
        }

        $guard = $request->user_type; 
        if (Auth::guard($guard)->attempt($credentials)) {
            $user = Auth::guard($guard)->user();

            // Check the 'status' column value
            $status = $user->status; // Assuming 'status' is the column name, update it accordingly


            //if ($guard == 'admin') {
              //  return redirect('/adminDashboard');
            //} elseif ($guard == 'tutor') {
                
              //  return redirect('/tutorDashboard');
            //} else {
              //  return redirect('/studentDashboard');
            //}

            // Check if the user is accepted or rejected
           
                // Access and print the user's ID
                $userId = $user->id;
                
                // Store user ID in the session
                Session::put('user_id', $userId);

                $student = studentRegister::where('status', '=', 'accepted')->get();
                $tutor = tutorRegister::where('status', '=', 'accepted')->get();
                if ( ($guard == 'student') && $student){
                    return redirect('/studentDashboard');
                } elseif (($guard == 'tutor') && $tutor) {
                    return redirect('/tutorDashboard');
                } else {
                    return redirect('/adminDashboard');
                }
           
                
            

        }
        
        return redirect()->back()->with('error', 'Credentials do not match')->with('user_type', $request->user_type);
    
        
    
        //return redirect()->back()->with('error', 'Credentials do not match')->with('user_type', $request->user_type);
        
        /*$guard = $request->user_type; 
        if (Auth::guard($guard)->attempt($credentials)) {
            $user = Auth::guard($guard)->user();

            // Check the 'status' column value
            $status = $user->status; // Assuming 'status' is the column name, update it accordingly

            // Check if the user is accepted or rejected
            if ($status == 'accept') {
                // Access and print the user's ID
                $userId = $user->id;

                // Store user ID in the session
                Session::put('user_id', $userId);

                if ($guard == 'admin') {
                    return redirect('/adminHome');
                } elseif ($guard == 'tutor') {
                    return redirect('/tutorDashboard');
                } else {
                    return redirect('/studentHome');
                }
            } elseif ($status == 'reject') {
                Auth::guard($guard)->logout();
                return redirect()->back()->with('error', 'User is rejected.')->with('user_type', $request->user_type);
            }
        }
        
        return redirect()->back()->with('error', 'Credentials do not match')->with('user_type', $request->user_type);*/
    }

    public function logout()
    {
        if(session()->has ('user_id'))
        {
            session()->pull('user_id');
            return redirect('/login');
        }
    }
}
