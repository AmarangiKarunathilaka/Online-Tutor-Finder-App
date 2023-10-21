<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tutorRegister;
use App\Models\tutorMedium;
use App\Models\tutorSubject;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class tutorRegisterController extends Controller
{

    public function tutorRegister(){
        return view('tregister');
    }

    public function tutorRegisterInput(Request $request){

        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:tutor_registers,tutorEmail',
            'password'   => 'required|min:8',
            'reEnterPassword'=> 'required|same:password',
            'contact' => 'required|regex:/^0\d{9}$/',
        ];

        $customMessages = [
            'password.min' => 'The password must be at least 8 characters.',
            'reEnterPassword.same'=> 'Password not match',
            'contact' => 'Phone number must be 10 characters',
        ];

        $validator = Validator::make($request->all(), $rules,$customMessages);
        if ($validator->fails()) 
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
      tutorRegister::create([
         'tutorFullName'=> $request -> name,
         'tutorPhoneNumber'=> $request -> contact,
         'qualification'=> $request -> qualification,
         'tutorEmail'=> $request -> email,
         'tutorPassword'=> $request -> password,
         'tutorConfirmPassword'=> $request -> reEnterPassword
        ]);

        $user = DB::select("select * from tutor_registers order by id desc limit 1");
       // $mm = ['users'=> $users];
        //return $users;
        //$mm=['users'->$users];
        //return $mm;
            //return $mm->id;

        if (!empty($request->subject1)) {
            tutorSubject::create([
                'tutorSubject_id' => $user[0]->id,
                'tutorSubject' => $request->subject1
            ]);
        }

        if (!empty($request->subject2)) {
            tutorSubject::create([
                'tutorSubject_id' => $user[0]->id,
                'tutorSubject' => $request->subject2
            ]);
        }

        if (!empty($request->subject3)) {
            tutorSubject::create([
                'tutorSubject_id' => $user[0]->id,
                'tutorSubject' => $request->subject3
            ]);
        }

        if (!empty($request->subject4)) {
            tutorSubject::create([
                'tutorSubject_id' => $user[0]->id,
                'tutorSubject' => $request->subject4
            ]);
        }
        ////

        if (!empty($request->medium1)) {
            tutorMedium::create([
                'tutorMedium_id' => $user[0]->id,
                'tutorMedium' => $request->medium1
            ]);
        }

        if (!empty($request->medium2)) {
            tutorMedium::create([
                'tutorMedium_id' => $user[0]->id,
                'tutorMedium' => $request->medium2
            ]);
        }

        if (!empty($request->medium3)) {
            tutorMedium::create([
                'tutorMedium_id' => $user[0]->id,
                'tutorMedium' => $request->medium3
            ]);
        } 
        

        return redirect('/login');

        // return redirect() -> back();
     }
}
