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
        $rules = [
            'name' => 'required',
            'studentEmail' => 'required|email|unique:student_registers,studentEmail',
            'studentPassword'   => 'required|min:8',
            'studentReEnterPassword'=> 'required|same:studentPassword',
            'studentContact' => 'required|regex:/^0\d{9}$/',
        ];

        $customMessages = [
            'studentPassword.min' => 'The password must be at least 8 characters.',
            'studentReEnterPassword.same'=> 'Password not match',
            'studentContact' => 'Phone number must be 10 characters',
        ];

        $validator = Validator::make($request->all(), $rules,$customMessages);

        if ($validator->fails()) 
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        studentRegister::create([
            'studentFullName'=> $request -> name,
            'birthday'=> $request -> dateOfBirth,
            'address'=> $request -> address,
            'studentPhoneNumber'=> $request -> studentContact,
            'studentEmail'=> $request -> studentEmail,
            'studentPassword'=> $request -> studentPassword,
            'studentConfirmPassword'=> $request -> studentReEnterPassword
           ]);

        

        // Create a new record in the database
        //$register = Register::create($request->all());
 
        // Redirect after successfully creating the record
        //return redirect(route('tregister'));
        return redirect() -> back();
    }
}
