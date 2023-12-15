<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRequest;
use App\Models\Timetable;
use App\Models\tutorRegister;
use App\Http\controllers\Controller;
use Illuminate\Support\Facades\Session;

//Ramal 2023.12.14
use Barryvdh\DomPDF\Facade\Pdf;



class ClassRequestController extends Controller
{

    public function classRequests(){
        $userId = Session::get('user_id');
        $tutorFullName= tutorRegister::where('tutor_registers.id','=', $userId)
                                ->select('tutor_registers.tutorFullName')
                                ->get();

        $userId = Session::get('user_id');
        $timeSlots = Timetable::where('timetables.tutor_id','=', $userId)
                            ->distinct()->pluck('time');
                    
        $userId = Session::get('user_id');                        
        $days = Timetable::where('timetables.tutor_id','=', $userId)
                            ->distinct()->pluck('day');
                    
        return view('classRequest', compact('timeSlots', 'days','tutorFullName'));
        
    }

    public function classRequestInput(Request $request){
        
        $userId = Session::get('user_id');
        $class= new ClassRequest();
        $class->tutor_id = $userId; 
        $class->tutorFullName=$request->input('tutorFullName'); 
        $class->subject=$request->subject;
        $class->medium=$request->medium; 
        $class->day = $request->day;
        $class->time = $request->time;
        
           

        $class->save();
        return redirect()->back();

      
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



      //My 2023.12.14
      public function generate_pdf_request()
      {
          $request = ClassRequest::all(); 
          $pdf = Pdf::loadView('downloads/requestList',array('requests' => $request));
          return $pdf->download('downloads/requestList.pdf');
      }
  
    

}
