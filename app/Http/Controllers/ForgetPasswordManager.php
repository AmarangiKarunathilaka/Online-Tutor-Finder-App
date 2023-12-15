<?php

namespace App\Http\Controllers;

use App\Models\PasswordReset;
use App\Models\studentRegister;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
//use Illuminate\Support\Facades\Str;
use Illuminate\Support\Carbon;


class ForgetPasswordManager extends Controller
{
    function forgetPassword(){
        return view("forget-password");
    }

    function forgetPasswordPost(Request $request){
        $request->validate([
            'studentEmail'=> "email|exists:student_registers",
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'studentEmail'=> $request->studentEmail,
            'token'=> $token,
            'created_at'=> Carbon::now()
        ]);

        mail::send("forgetPasswordMail", ['token' => $token], function ($message) use ($request){
            $message->to($request->studentEmail);
            $message->subject("Reset password");
        });

        return redirect()->to(route("forget.password"))->with("success", "We have send an email to reset password.");
        //return redirect()->to(route("forget.password", ['token' => $token]))->with("success", "We have sent an email to reset your password.");

    
    }

    /*function resetPassword(Request $request, $token){
        return view("newPassword", ['token'=>$token]); //compact('token'));
    }*/
    
    function resetPassword($token){
        return view("newPassword", compact('token'));
    }

    function resetPasswordPost(Request $request){
        $request->validate([
            //"studentEmail" => "required|email|exists:student_registers",
            "password" => "required|string|min:8|confirmed",
            "password_confirmation"=>"required" // 'confirmed' will check if password_confirmation matches
        ]);

        //$token = $request->query('token');

        /*$updatePassword = PasswordReset::where("email", $request->email)
                                        ->where("token", $request->token)
                                        ->first();*/

        $updatePassword = DB::table('password_resets')
        ->where([
            "studentEmail"=>$request->studentEmail,
            "token"=>$request->token
        ])->first();



        //$request->query('param');
        //dd($updatePassword);
        //$token = Str::random(64);
        //$token = $request->token;
        //$token = $user->password_resets;

        /*if (!$updatePassword) {
            return redirect()->to(route("reset.password", ["token" => $token]))->with("error", "Invalid ");    
        }*/
        /*if (!$updatePassword) {
            return redirect()->to(route("reset.password", ["token" => $request->token]))->with("error", "Invalid");
        }*/
        if (!$updatePassword) {
            return redirect()->to(route("reset.password"))->with("error", "Invalid");
        }
        
        /*if (!$updatePassword) {
            return redirect("reset.password")->with("error", "Invalid");
        }*/
    
        studentRegister::where("studentEmail", $request->studentEmail)
                        ->update(["password" => Hash::make($request->password)]);

        DB::table("password_resets")->where(["studentEmail" => $request->studentEmail])->delete();
    
        //DB::table(table:"password_resets")->where(["email" => $request->email])->delete();

        //return redirect()->to(route("login"))->with("success", "Password reset success");
        
    

        return view('login')->with("success", "Password reset success");

    
    }


}
