<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;

class StudentDashboardController extends Controller
{
    public function advertisementDisplay()
    {
    
        $advertisements = Advertisement::where('status','=','accepted')->get();
        return view('studentDashboard', compact('advertisements'));
        
    }
}
