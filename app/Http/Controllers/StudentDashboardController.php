<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\TutorFeedback;

class StudentDashboardController extends Controller
{
    public function advertisementDisplay()
    {
    
        $advertisementMaths = Advertisement::where('status', '=', 'accepted')
        ->where('subject', '=', 'Mathematics')
        ->get();

        $advertisementPhysics = Advertisement::where('status', '=', 'accepted')
        ->where('subject', '=', 'Physics')
        ->get();

        $advertisementChemistry = Advertisement::where('status', '=', 'accepted')
        ->where('subject', '=', 'Chemistry')
        ->get();

        $advertisementBiology = Advertisement::where('status', '=', 'accepted')
        ->where('subject', '=', 'Biology')
        ->get();

        $tfeedback = TutorFeedback::where('status','=','accepted')->get();
        
        return view('studentDashboard', compact('advertisementMaths', 'advertisementPhysics', 'advertisementChemistry', 'advertisementBiology', 'tfeedback'));
        
    }
}
