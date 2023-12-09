<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Advertisement;

class CombinedDisplayController extends Controller
{
    public function combinedDisplay()
    {
        $advertisements = Advertisement::where('status','=','accepted')->get();
        $feedback = Feedback::where('status','=','accepted')->get();
    
        return view('index', compact('advertisements', 'feedback'));
    }
    
}
