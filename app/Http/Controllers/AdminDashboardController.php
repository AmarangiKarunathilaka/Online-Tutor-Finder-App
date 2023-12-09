<?php

namespace App\Http\Controllers;
use App\Models\ClassRequest;
use App\Models\studentRegister;
use App\Models\tutorRegister;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function adminDashboardCountDisplay()
    {
        $studentCount = studentRegister::count();
        $tutorCount = tutorRegister::count();
        //$classCount = ClassRequest::count();

        return view('adminDashboard', compact('studentCount', 'tutorCount'));
    }
}
