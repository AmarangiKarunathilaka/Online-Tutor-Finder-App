<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tutorRegister;
use App\Models\tutorMedium;
use App\Models\tutorSubject;
use Illuminate\Support\Facades\DB;

class tutorRegisterController extends Controller
{

    public function tutorRegister(){
        return view('tregister');
    }

    public function tutorRegisterInput(Request $request){
        tutorRegister::create([
         'tutorFullName'=> $request -> name,
         'tutorPhoneNumber'=> $request -> contact,
         'qualification'=> $request -> qualification,
         'tutorEmail'=> $request -> email,
         'tutorPassword'=> $request -> password,
         'tutorConfirmPassword'=> $request -> reEnterPassword
        ]);

        /*$users = DB::select("select * from tutorRegisters limit 1");
       // $mm = ['users'=> $users];
        return $users;
        //$mm=['users'->$users];
        //return $mm;
        foreach ($users as $mm) {
            //return $mm->id;
            tutorSubject::create([
                'tutorSubject_id'=> $mm -> id,
                'tutorSubject'=> $request -> subject1,
                'tutorSubject'=> $request -> subject2,
                'tutorSubject'=> $request -> subject3,
                'tutorSubject'=> $request -> subject4,
                //'id'=> $request -> fid
            ]);

            tutorMedium::create([
                'tutorMedium_id'=> $mm -> id,
                'tutorMedium'=> $request -> medium1,
                'tutorMedium'=> $request -> medium2,
                'tutorMedium'=> $request -> medium3,
                //'id'=> $request -> fid
            ]);

        }*/



         return redirect() -> back();
     }
}
