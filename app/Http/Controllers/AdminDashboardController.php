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
        $advertisements = Advertisement::where('status','=','accepted')->get();

        return view('adminDashboard', compact('studentCount', 'tutorCount','advertisements'));
    }
}
