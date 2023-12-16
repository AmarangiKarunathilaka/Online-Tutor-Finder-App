<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Session;
use App\Models\studentRegister;
use App\Models\tutorRegister;

class ChatController extends Controller
{

    public function chatStudent(Request $request)
    {
        $userId = Session::get('user_id');
       
        $username = studentRegister::where('student_registers.id','=',$userId)
                                 ->select('student_registers.studentFullName')
                                ->first();
                            
        return view('chatPusher', compact('username'));
    }

    public function chatTutor(Request $request)
    {
        $userId = Session::get('user_id');
       
        $username = tutorRegister::where('tutor_registers.id','=',$userId)
                                 ->select('tutor_registers.tutorFullName')
                                ->first();

                                
        return view('chatPusherTutor', compact('username'));
    }

}
