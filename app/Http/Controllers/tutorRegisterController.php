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
      
     /* $register = new tutorRegister();
      $medium = new tutorMedium();
      $subject = new tutorSubject();

      $register-> tutorFullName = $request-> name;
      $register-> tutorPhoneNumber = $request-> contact;
      $register-> qualification = $request-> qualification;
      $register-> tutorEmail = $request-> email;
      $register-> tutorPassword = $request-> password;
      $register-> tutorConfirmPassword = $request-> reEnterPassword;
      $register-> save();

      $medium-> tutorMedium_id = $request-> medium ;
      $medium-> tutorMedium = $request-> medium1;
      $medium-> tutorMedium = $request-> medium2;
      $medium-> tutorMedium = $request-> medium3;
      $medium-> save();

      $request->session()-> flash('success','Data inserted successfully!');
      return redirect('tregister');*/

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
            tutorSubject::create([
                'tutorSubject_id'=> $user[0]->id,
                'tutorSubject'=> $request -> subject1,
                'tutorSubject'=> $request -> subject2,
                'tutorSubject'=> $request -> subject3,
                'tutorSubject'=> $request -> subject4,
                //'id'=> $request -> fid
            ]);

            tutorMedium::create([
                'tutorMedium_id'=> $user[0]->id,
                'tutorMedium'=> $request -> medium1,
                'tutorMedium'=> $request -> medium2,
                'tutorMedium'=> $request -> medium3,
                //'id'=> $request -> fid
            ]);


      /*  $user = DB::table('tutor_registers')->first();

        if ($user) {
            // Assuming that subject1, subject2, etc. are in an array
            $subjects = [
                $request->subject1,
                $request->subject2,
                $request->subject3,
                $request->subject4,
            ];

            foreach ($subjects as $subject) {
                tutor_subject::create([
                    'tutorSubject_id' => $user->id,
                    'tutorSubject' => $subject,
                ]);
            }

            // Similarly for mediums
            $mediums = [
                $request->medium1,
                $request->medium2,
                $request->medium3,
            ];

            foreach ($mediums as $medium) {
                tutor_medium::create([
                    'tutorMedium_id' => $user->id,
                    'tutorMedium' => $medium,
                ]);
            }
        }*/

         return redirect() -> back();
     }
}
