<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Advertisement;



class CombinedDisplayController extends Controller
{
    public function combinedDisplay()
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
        
        $feedback = Feedback::where('status','=','accepted')->get();
    
        return view('index', compact('advertisementMaths', 'advertisementPhysics', 'advertisementChemistry', 'advertisementBiology', 'feedback'));
    }

    
    
}
