<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentRegister;
use Illuminate\Support\Facades\Validator;

class studentRegisterController extends Controller
{
    public function studentRegister(){
        return view('sRegister');
    }

    public function studentRegisterInput(Request $request)
    {
        studentRegister::create([
            'studentFullName'=> $request -> name,
            'birthday'=> $request -> dateOfBirth,
            'address'=> $request -> address,
            'studentPhoneNumber'=> $request -> studentContact,
            'studentEmail'=> $request -> studentEmail,
            'studentPassword'=> $request -> studentPassword,
            'studentConfirmPassword'=> $request -> studentReEnterPassword
           ]);

        $rules = [
            'studentFullName' => 'required',
            'studentEmail' => 'required|email|unique:student_registers',
            'studentPassword'   => 'required|min:8',
            'studentConfirmPassword'=> 'required|same:studentPassword',
        ];

        $customMessages = [
            'studentPassword.min' => 'The password must be at least 8 characters.',
            'studentConfirmPassword.same'=> 'Password not match',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) 
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new record in the database
        //$register = Register::create($request->all());
 
        // Redirect after successfully creating the record
        //return redirect(route('tregister'));
        return redirect() -> back();
    }
}
