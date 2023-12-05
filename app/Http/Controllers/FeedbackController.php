<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    /*function websiteFeedbackForm(Request $req){
        $feedback = new Feedback;
        $feedback->name=$req->name;
        $feedback->email=$req->email;
        $feedback->rating=$req->rating;
        $feedback->message=$req->message;
        $feedback->save();
    }*/

    public function feedback(){
        return view('websiteFeedbackForm');
    }

    public function uploadFeedbackInput(Request $request){

        $keyValue = $request->input('key');

        Feedback::create([
            'student_id'=> $request -> key,
            'name'=> $request -> name,
            'email'=> $request -> email,
            'rating'=> $request -> rating,
            'message'=> $request -> message,
        ]);

        return redirect() -> back();
    }

    public function adminFeedbackList()
    {
        // dd('Controller method is being called.');
        
        // Fetch feedback data from the database
        $feedback = Feedback::all();

        // Return the admin feedback list view
        return view('adminFeedbackList', compact('feedback'));
    }

    public function index()
    {
        $feedback = Feedback::where('status', 'accepted')->get();
        return view('index', compact('feedback'));
    }

    public function acceptFeedback($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->status = 'accepted';
        $feedback->save();

        return redirect()->route('adminFeedbackList')->with('success', 'Feedback accepted successfully!');
    }

    public function rejectFeedback($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->status = 'rejected';
        $feedback->save();

        return redirect()->route('adminFeedbackList')->with('success', 'Feedback rejected successfully!');
    }



   
}
