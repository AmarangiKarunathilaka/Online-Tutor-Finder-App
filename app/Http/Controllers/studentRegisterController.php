<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentRegister;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class studentRegisterController extends Controller
{
    public function studentRegister(){
        return view('sRegister');
    }

    public function adminStudentList(){
        $students = studentRegister::all(); 
        return view('adminStudentList', compact('students'));
    }

    public function studentRegisterInput(Request $request)
    {
        $rules = [
            'name' => 'required',
            'studentEmail' => 'required|email|unique:student_registers,studentEmail',
            'password'   => 'required|min:8',
            'studentReEnterPassword'=> 'required|same:password',
            'studentContact' => 'required|regex:/^0\d{9}$/',
        ];

        $customMessages = [
            'password.min' => 'The password must be at least 8 characters.',
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
            'password'=> Hash::make($request -> password),
            // 'studentConfirmPassword'=> $request -> studentReEnterPassword
           ]);

        

        // Create a new record in the database
        //$register = Register::create($request->all());
 
        // Redirect after successfully creating the record
        //return redirect(route('tregister'));
        $user_type = 'student';
        return view('login', compact('user_type'));
    }
}
