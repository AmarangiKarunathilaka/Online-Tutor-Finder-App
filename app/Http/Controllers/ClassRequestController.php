<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRequest;
use App\Models\Timetable;
use App\Models\tutorRegister;
use App\Models\tutorSubject;
use App\Models\tutorMedium;
use App\Models\Tutordetail;
use App\Models\Advertisement;
use App\Models\studentRegister;
use App\Http\controllers\Controller;
use Illuminate\Support\Facades\Session;

//Ramal 2023.12.14
use Barryvdh\DomPDF\Facade\Pdf;



class ClassRequestController extends Controller
{

    public function showrequestdetail($id){

        

        $userId = Session::get('user_id');
        $studentName = studentRegister::where('student_registers.id','=', $userId)
                        ->select('student_registers.studentFullName')
                        ->first();
        //dd($studentName);
        $advertisement = Advertisement::find($id);

       
        // $days =  Timetable::join('advertisements', 'timetables.tutor_id', '=', 'advertisements.id')
        //                 ->select('timetables.*','advertisements.tutor_id')
        //                 ->where('timetables.tutor_id', '=', 'advertisements.tutor_id')
        //                 ->distinct()->pluck('day');
        // dd($days);
        // $timeSlots =  Timetable::join('advertisements', 'timetables.tutor_id', '=', 'advertisements.tutor_id')
        //                 ->select('timetables.*')
        //                 ->where('timetables.tutor_id', '=', 'advertisements.tutor_id')
        //                 ->distinct()->pluck('time');

    //     $days = Timetable::join('advertisements', 'timetables.tutor_id', '=', 'advertisements.tutor_id')
    // ->select('timetables.*', 'advertisements.tutor_id')
    // ->whereColumn('timetables.tutor_id','=', 'advertisements.tutor_id') // More explicit comparison
    // ->distinct()
    // ->pluck('day');
    $time = Timetable::find($id);
   
    $days = Timetable::join('advertisements', 'timetables.tutor_id', '=', 'advertisements.tutor_id')
    ->select('timetables.*', 'advertisements.tutor_id')
    ->whereColumn('timetables.tutor_id','=', 'advertisements.tutor_id') // More explicit comparison
    ->distinct()
    ->pluck('day');



$timeSlots = Timetable::join('advertisements', 'timetables.tutor_id', '=', 'advertisements.tutor_id')
    ->select('timetables.*')
    ->whereColumn('timetables.tutor_id', 'advertisements.tutor_id') // More explicit comparison
    ->distinct()
    ->pluck('time');




        return view('classRequest' , compact('studentName','advertisement','days','timeSlots')); 
    }

    public function classRequestInput(Request $request) {
        $keyValue = $request->input('key');

       
           
      
        $userId = Session::get('user_id');
        $classRequest = new ClassRequest();
        $classRequest->student_id = $userId;
        $classRequest->tutor_id= $request -> key;
        $classRequest->studentName = $request -> input('studentName');
        $classRequest->tutorFullName = $request -> input('tutorName');
        $classRequest->subject = $request->input('subject');
        $classRequest->medium = $request -> input('medium'); 
        $classRequest->day = $request->day;
        $classRequest->time = $request -> time;

        $classRequest->save();
        return redirect()->back();
    }

  /*  public function classRequests(){

        $userId = Session::get('user_id');                    
        $detail = Advertisement::find($id);
                            ->get();

        $userId = Session::get('user_id');
        $phone= Tutordetail::where('tutordetails.tutor_id','=', $userId)
                        ->select('tutordetails.tutorPhoneNumber')
                        ->get();

        $userId = Session::get('user_id');
        $qualification= Tutordetail::where('tutordetails.tutor_id','=', $userId)
                        ->select('tutordetails.qualification')
                        ->get();

        $userId = Session::get('user_id');
        $tutorFullName= Advertisement::where('advertisements.tutor_id','=', $userId)
                                ->select('advertisements.tutorName')
                                ->get();

        $userId = Session::get('user_id');
        $subject= Advertisement::where('advertisements.tutor_id','=', $userId)
                                ->select('advertisements.subject')
                                ->get();

        $userId = Session::get('user_id');
        $medium= Advertisement::where('advertisements.tutor_id','=', $userId)
                                ->select('advertisements.medium')
                                ->get();

        $userId = Session::get('user_id');
        $timeSlots = Timetable::where('timetables.tutor_id','=', $userId)
                            ->distinct()->pluck('time');
                    
        $userId = Session::get('user_id');                        
        $days = Timetable::where('timetables.tutor_id','=', $userId)
                            ->distinct()->pluck('day');

                        
                    
        return view('classRequest', compact('timeSlots', 'days','tutorFullName','subject','medium','detail','phone','qualification'));
        
    }*/

   /* public function classsRequestInput(Request $request){
        
        $userId = Session::get('user_id');
        $class= new ClassRequest();
        $class->student_id = $userId;
        $class->studentName = $request -> input('studentName');
        $class->tutorName = $request -> input('tutorName');
        $class->subject = $request->input('subject');
        $class->medium = $request -> input('medium'); 
        $class->day = $request->day;
        $class->time = $request -> time;
       
        
           

        $class->save();
        return redirect()->back();

      
        }
*/
       

        public function adminClassRequestList()
    {
        $requests = ClassRequest::where('status','=','accepted')->get();
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

        return redirect()->route('tutorDashboard')->with('success', 'Request accepted successfully!');
    }

    public function rejectRequest($id)
    {
        $data = ClassRequest::find($id);
        $data->status = 'rejected';
        $data->save();

        return redirect()->route('tutorDashboard')->with('success', 'Request rejected successfully!');
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
