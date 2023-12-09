<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Advertisement;
use App\Models\ClassRequest;
use App\Models\studentRegister;
use App\Models\tutorRegister;


class CombinedDisplayController extends Controller
{
    public function combinedDisplay()
    {
        $advertisements = Advertisement::where('status','=','accepted')->get();
        $feedback = Feedback::where('status','=','accepted')->get();
    
        return view('index', compact('advertisements', 'feedback'));
    }

    public function adminDashboardCountDisplay()
    {
        $studentCount = studentRegister::count();
        $tutorCount = tutorRegister::count();
        //$classCount = ClassRequest::count();

        return view('adminDashboard', compact('studentCount', 'tutorCount'));
    }
    
}
