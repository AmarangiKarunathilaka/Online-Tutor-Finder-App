<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRequest;
use App\Http\controllers\Controller;

class ClassRequestController extends Controller
{

    public function classRequests(){
        return view('classRequest');
    }

    public function uploadClassRequestInput(Request $request){
        $keyvalue = $request ->input('key');

        ClassRequest::create([
            'student_id'=> $request -> key,
            'tutor_id'=> $request -> tutorId,
            'tutor_name'=> $request -> tutorname, 
            'student_name'=> $request -> studentname,
            'keydate'=> $request -> date,
            'time'=> $request -> time, 
            'subject'=> $request -> subject, 
            'medium'=> $request -> medium, 

        ]);

        return redirect() -> back();
        }











    
}
