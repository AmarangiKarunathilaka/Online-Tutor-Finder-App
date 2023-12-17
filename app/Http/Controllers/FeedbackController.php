<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\WebsiteFeedback;
use App\Models\TutorFeedback;
use App\Models\tutorRegister;
use App\Models\studentRegister;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\LoginController;

//Ramal 2023.12.14
use Barryvdh\DomPDF\Facade\Pdf;



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
        $feedback -> name = $request -> input('name');
        $feedback -> email = $request -> input('email');
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

    // auto fill data (bingun)
    public function autoFill1(){

        $userId = Session::get('user_id');
        $tutorName = tutorRegister::where('tutor_registers.id','=',$userId)
                                 ->select('tutor_registers.tutorFullName')
                                ->get();

        $userId = Session::get('user_id');
        $email = tutorRegister::where('tutor_registers.id','=',$userId)
                               
                                ->get();                       
                               
        return view('websiteFeedbackForm', compact('tutorName','email'));
    }

    // student to website
    public function uploadwFeedbackInput(Request $request){

        $userId = Session::get('user_id');

        $wfeedback = new WebsiteFeedback();
        $wfeedback -> student_id = $userId;
        $wfeedback -> name = $request -> input('name');
        $wfeedback -> email = $request -> input('email');
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

    

    // auto fill data (bingun)
    public function autoFill2(){

        $userId = Session::get('user_id');
        $studentName = studentRegister::where('student_registers.id','=',$userId)
                                 ->select('student_registers.studentFullName')
                                ->get();

        $userId = Session::get('user_id');
        $email = studentRegister::where('student_registers.id','=',$userId)
                                ->get();                       

                                return view('websiteFeedback', compact('studentName','email'));
    }

    // student to tutor
    public function uploadtFeedbackInput(Request $request){

        $userId = Session::get('user_id');

        $tfeedback = new TutorFeedback();
        $tfeedback -> student_id = $userId;
        $tfeedback -> tutor = $request -> tutor;
        $tfeedback -> name = $request -> input('name');
        $tfeedback -> email = $request -> input('email');
        $tfeedback ->rating = $request -> rating;
        $tfeedback ->  message= $request -> message;
        
        $tfeedback->save();

        return redirect() -> back();
    }

    // show tutors name in feedback form (chirantha)
    public function getAcceptedTutorNames()
    {
        // Retrieve only the 'name' of accepted tutors from the database
        $acceptedTutors = tutorRegister::where('status', '=', 'accepted')->pluck('tutorFullName');

        // bingun (auto fill)
        $userId = Session::get('user_id');
        $studentName = studentRegister::where('student_registers.id','=',$userId)
                                 ->select('student_registers.studentFullName')
                                ->get();

        $userId = Session::get('user_id');
        $email = studentRegister::where('student_registers.id','=',$userId)
                               
                                ->get(); 

        // Pass the accepted tutor names to the view
        return view('TutorFeedback', [
            'tutorNames' => $acceptedTutors,
            'studentName' => $studentName,
            'email' => $email,
        ]);

    }

    

    // this is on StudentDashboardController
    // public function tfeedbackDisplay()
    // {
    
    //     $tfeedback = TutorFeedback::where('status','=','accepted')->get();

    //     return view('studentDashboard', compact('tfeedback'));
        

    // }

    //My 2023.12.14
    public function generate_pdf_feedback()
    {
        $feedback = Feedback::all(); 
        $pdf = Pdf::loadView('downloads/feedbackList',array('feedback' => $feedback));
        return $pdf->download('downloads/feedbackList.pdf');
    }


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
