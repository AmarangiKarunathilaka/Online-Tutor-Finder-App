<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\WebsiteFeedback;
use App\Models\TutorFeedback;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\LoginController;

class FeedbackController extends Controller
{  
    public function feedback(){
        return view('websiteFeedbackForm');
    }

    public function wfeedback(){
        return view('websiteFeedback');
    }
    public function tfeedback(){
        return view('tutorFeedback');
    }

    // tutor to website
    public function uploadFeedbackInput(Request $request){

        $userId = Session::get('user_id');

        $feedback = new Feedback();
        $feedback -> tutor_id = $userId;
        $feedback -> name = $request -> name;
        $feedback -> email = $request -> email;
        $feedback ->rating = $request -> rating;
        $feedback ->  message= $request -> message;
        
        $feedback->save();

        return redirect() -> back();
    }

    public function adminFeedbackList()
    {
                
        // Fetch feedback data from the database
        $feedback = Feedback::all();
        $wfeedback = WebsiteFeedback::all();
        $tfeedback = TutorFeedback::all();

        // Return the admin feedback list view
        return view('adminFeedbackList', compact('feedback'));
        return view('adminFeedbackList', compact('wfeedback'));
        return view('adminFeedbackList', compact('tfeedback'));
    }

    public function feedbackDisplay()
    {
    
        $feedback = Feedback::where('status','=','accepted')->get();

        return view('index', compact('feedback'));
        

    }

    public function acceptFeedback($id)
    {
        $data = Feedback::find($id);
        $data->status = 'accepted';
        $data->save();

        return redirect() -> back();        
    }

    public function rejectFeedback($id)
    {
        $data = Feedback::find($id);
        $data->status = 'rejected';
        $data->save();

        return redirect() -> back();
    }

    // student to website
    public function uploadwFeedbackInput(Request $request){

        $userId = Session::get('user_id');

        $wfeedback = new WebsiteFeedback();
        $wfeedback -> student_id = $userId;
        $wfeedback -> name = $request -> name;
        $wfeedback -> email = $request -> email;
        $wfeedback ->rating = $request -> rating;
        $wfeedback ->  message= $request -> message;
        
        $wfeedback->save();
        
        return redirect() -> back();
    }

    

    public function wfeedbackDisplay()
    {
    
        $wfeedback = WebsiteFeedback::where('status','=','accepted')->get();

        return view('index', compact('wfeedback'));
        

    }

    public function acceptwFeedback($id)
    {
        $data = WebsiteFeedback::find($id);
        $data->status = 'accepted';
        $data->save();

        return redirect() -> back();
    }

    public function rejectwFeedback($id)
    {
        $data = WebsiteFeedback::find($id);
        $data->status = 'rejected';
        $data->save();

        return redirect() -> back();
    }

    // student to tutor
    public function uploadtFeedbackInput(Request $request){

        $userId = Session::get('user_id');

        $tfeedback = new TutorFeedback();
        $tfeedback -> student_id = $userId;
        $tfeedback -> tutor = $request -> tutor;
        $tfeedback -> name = $request -> name;
        $tfeedback -> email = $request -> email;
        $tfeedback ->rating = $request -> rating;
        $tfeedback ->  message= $request -> message;
        
        $tfeedback->save();

        return redirect() -> back();
    }

    
    // this is on StudentDashboardController
    // public function tfeedbackDisplay()
    // {
    
    //     $tfeedback = TutorFeedback::where('status','=','accepted')->get();

    //     return view('studentDashboard', compact('tfeedback'));
        

    // }

    public function accepttFeedback($id)
    {
        $data = TutorFeedback::find($id);
        $data->status = 'accepted';
        $data->save();

        return redirect() -> back();
    }

    public function rejecttFeedback($id)
    {
        $data = TutorFeedback::find($id);
        $data->status = 'rejected';
        $data->save();

        return redirect() -> back();
    }

    public function combinedAdminDisplay()
    {
        $feedback = Feedback::all();
        $wfeedback = WebsiteFeedback::all();
        $tfeedback = TutorFeedback::all();

        return view('adminFeedbackList', compact('feedback', 'wfeedback', 'tfeedback'));
    }    
   
}
