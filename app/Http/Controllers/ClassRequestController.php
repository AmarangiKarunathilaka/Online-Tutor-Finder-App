<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRequest;
use App\Http\controllers\Controller;
use Illuminate\Support\Facades\Session;

class ClassRequestController extends Controller
{

    public function classRequests(){
        return view('classRequest');
    }

    public function uploadClassRequestInput(Request $request){
        
        $userId = Session::get('user_id');
        ClassRequest::create([
            
            'tutor_id'=> $request -> tutorId,
            'tutor_name'=> $request -> tutorname,
            'student_id'=> $userId, 
            'student_name'=> $request -> studentname,
            'date'=> $request -> date,
            'time'=> $request -> time, 
            'subject'=> $request -> subject, 
            'medium'=> $request -> medium,
           

        
        ]);

        return redirect() -> back();
        }

        public function adminClassRequestList()
    {
                
        // Fetch requests data from the database
        $requests = ClassRequest::all();

        // Return the admin requests list view
        return view('adminClassRequestList', compact('requests'));
    }

    public function requestsDisplay()
    {
        $requests = ClassRequest::where('status','=','accepted')->get();
        return view('index', compact('requests'));
        //dd('requests');
    }

    public function acceptRequest($id)
    {
        $data = ClassRequest::find($id);
        $data->status = 'accepted';
        $data->save();

        return redirect()->route('adminClassRequestList')->with('success', 'Request accepted successfully!');
    }

    public function rejectRequest($id)
    {
        $data = ClassRequest::find($id);
        $data->status = 'rejected';
        $data->save();

        return redirect()->route('adminClassRequestList')->with('success', 'Request rejected successfully!');
    }

    // student dashbord view

    public function studentRequestView()
    {
                
        // Fetch requests data from the database
        $requests = ClassRequest::all();

        // Return the admin requests list view
        return view('studentRequestView', compact('requests'));
    }

    public function requestsview()
    {
        $requests = ClassRequest::where('status','=','accepted')->get();
        return view('index', compact('requests'));
        //dd('requests');
    }

    public function acceptsRequest($id)
    {
        $data = ClassRequest::find($id);
        $data->status = 'accepted';
        $data->save();

        return redirect()->route('studentRequestView')->with('success', 'Request accepted successfully!');
    }

    public function rejectsRequest($id)
    {
        $data = ClassRequest::find($id);
        $data->status = 'rejected';
        $data->save();

        return redirect()->route('studentRequestView')->with('success', 'Request rejected successfully!');
    }












    
}
