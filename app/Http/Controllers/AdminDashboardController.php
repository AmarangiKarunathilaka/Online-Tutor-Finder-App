<?php

namespace App\Http\Controllers;
use App\Models\ClassRequest;
use App\Models\studentRegister;
use App\Models\tutorRegister;
use App\Models\Advertisement;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function adminDashboardDisplay()
    {
        $studentCount = studentRegister::count();
        $tutorCount = tutorRegister::count();
        //$classCount = ClassRequest::count();
        $students = studentRegister::where('status','=','accepted')->get();
        $tutors = tutorRegister::where('status','=','accepted')->get();
        $advertisements = Advertisement::where('status','=','accepted')->get();

        return view('adminDashboard', compact('studentCount', 'tutorCount', 'students','tutors', 'advertisements'));
    }

    public function adminDashboard()
    {
        $tutorCount = $this->getTutorCount()
                ->where('status','=','accepted')
                ->get();;
        $studentCount = $this->getStudentCount()
                ->where('status','=','accepted')
                ->get();;;

        return view('adminDashboard', compact('tutorCount', 'studentCount'));
    }

}
