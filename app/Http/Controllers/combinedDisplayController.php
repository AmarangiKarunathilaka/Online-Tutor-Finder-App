<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\WebsiteFeedback;
use App\Models\TutorFeedback;
use App\Models\Advertisement;
use App\Models\Timetable;
use App\Models\TutorProfile;
use App\Models\Tutordetail;
use App\Models\ClassRequest;
use App\Models\login;
use Illuminate\Support\Facades\Session;


class combinedDisplayController extends Controller
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

        $wfeedback = WebsiteFeedback::where('status','=','accepted')->get();
        $tfeedback = TutorFeedback::where('status','=','accepted')->get();

    
        return view('index', compact('advertisementMaths', 'advertisementPhysics', 'advertisementChemistry', 'advertisementBiology', 'feedback', 'wfeedback', 'tfeedback'));
    }

        


    
    
    public function tutorDashboard()

    {            
        $userId = Session::get('user_id');
        $requests = ClassRequest::where('class_requests.tutor_id','=', $userId)
                                ->get();


        $userId = Session::get('user_id');
        $profile = TutorProfile::where('tutor_profiles.tutor_id','=', $userId)
                            ->get();

       
        $userId = Session::get('user_id');                    
        $detail = Tutordetail::where('tutordetails.tutor_id','=', $userId)
                            ->get();

        $userId = Session::get('user_id');
        $time1 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Sunday')
                        ->where('time','=','8:00 AM - 10:00 AM')
                        ->get();

        $userId = Session::get('user_id');
        $time2 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Sunday')
                        ->where('time','=','10:00 AM - 12:00 PM')
                        ->get();

        $userId = Session::get('user_id');
        $time3 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Sunday')
                        ->where('time','=','02:00 PM - 04:00 PM')
                        ->get();

        $userId = Session::get('user_id');
        $time4 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Sunday')
                        ->where('time','=','04:00 PM - 06:00 PM')
                        ->get();

        $userId = Session::get('user_id');
        $time5 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Monday')
                        ->where('time','=','8:00 AM - 10:00 AM')
                        ->get();

        $userId = Session::get('user_id');
        $time6 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Monday')
                        ->where('time','=','10:00 AM - 12:00 PM')
                        ->get();

        $userId = Session::get('user_id');
        $time7 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Monday')
                        ->where('time','=','02:00 PM - 04:00 PM')
                        ->get();

        $userId = Session::get('user_id');
        $time8 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Monday')
                        ->where('time','=','04:00 PM - 06:00 PM')
                        ->get();

        $userId = Session::get('user_id');
        $time9 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Tuesday')
                        ->where('time','=','8:00 AM - 10:00 AM')
                        ->get();

        $userId = Session::get('user_id');
        $time10 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Tuesday')
                        ->where('time','=','10:00 AM - 12:00 PM')
                        ->get();

        $userId = Session::get('user_id');
        $time11 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Tuesday')
                        ->where('time','=','02:00 PM - 04:00 PM')
                        ->get();

        $userId = Session::get('user_id');
        $time12 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Tuesday')
                        ->where('time','=','04:00 PM - 06:00 PM')
                        ->get();

        $userId = Session::get('user_id');
        $time13 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Wednesday')
                        ->where('time','=','8:00 AM - 10:00 AM')
                        ->get();

        $userId = Session::get('user_id');
        $time14 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Wednesday')
                        ->where('time','=','10:00 AM - 12:00 PM')
                        ->get();

        $userId = Session::get('user_id');
        $time15 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Wednesday')
                        ->where('time','=','02:00 PM - 04:00 PM')
                        ->get();

        $userId = Session::get('user_id');
        $time16 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Wednesday')
                        ->where('time','=','04:00 PM - 06:00 PM')
                        ->get();

        $userId = Session::get('user_id');
        $time17 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Thursday')
                        ->where('time','=','8:00 AM - 10:00 AM')
                        ->get();

        $userId = Session::get('user_id');
        $time18 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Thursday')
                        ->where('time','=','10:00 AM - 12:00 PM')
                        ->get();

        $userId = Session::get('user_id');
        $time19 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Thursday')
                        ->where('time','=','02:00 PM - 04:00 PM')
                        ->get();

        $userId = Session::get('user_id');
        $time20 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Thursday')
                        ->where('time','=','04:00 PM - 06:00 PM')
                        ->get();

        $userId = Session::get('user_id');
        $time21 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Friday')
                        ->where('time','=','8:00 AM - 10:00 AM')
                        ->get();

        $userId = Session::get('user_id');
        $time22 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Friday')
                        ->where('time','=','10:00 AM - 12:00 PM')
                        ->get();

        $userId = Session::get('user_id');
        $time23 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Friday')
                        ->where('time','=','02:00 PM - 04:00 PM')
                        ->get();

        $userId = Session::get('user_id');                
        $time24 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Friday')
                        ->where('time','=','04:00 PM - 06:00 PM')
                        ->get();

        $userId = Session::get('user_id');
        $time25 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Saturday')
                        ->where('time','=','8:00 AM - 10:00 AM')
                        ->get();

        $userId = Session::get('user_id');
        $time26 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Saturday')
                        ->where('time','=','10:00 AM - 12:00 PM')
                        ->get();

        $userId = Session::get('user_id');
        $time27 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Saturday')
                        ->where('time','=','02:00 PM - 04:00 PM')
                        ->get();

        $userId = Session::get('user_id');                
        $time28 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','Saturday')
                        ->where('time','=','04:00 PM - 06:00 PM')
                        ->get();

        $tfeedback = TutorFeedback::where('status','=','accepted')->get();
        
        
        return view('tutorDashboard', compact('requests','detail','profile','time1','time2','time3','time4','time5','time6','time7','time8','time9'
                                            ,'time10','time11','time12','time13','time14','time15','time16','time17','time18','time19','time20'
                                            ,'time21','time22','time23','time24','time25','time26','time27','time28', 'tfeedback'));
    }





//admin time table display

public function admintimetable()
{   


    $time1 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','sunday')
                    ->where('time','=','8:00 AM - 10:00 AM')
                    ->get();

    $time2 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','sunday')
                    ->where('time','=','10:00 AM - 12:00 PM')
                    ->get();

    $time3 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','sunday')
                    ->where('time','=','02:00 PM - 04:00 PM')
                    ->get();

    $time4 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','sunday')
                    ->where('time','=','04:00 PM - 06:00 PM')
                    ->get();

    $time5 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','monday')
                    ->where('time','=','8:00 AM - 10:00 AM')
                    ->get();

    $time6 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','monday')
                    ->where('time','=','10:00 AM - 12:00 PM')
                    ->get();

    $time7 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','monday')
                    ->where('time','=','02:00 PM - 04:00 PM')
                    ->get();

    $time8 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','monday')
                    ->where('time','=','04:00 PM - 06:00 PM')
                    ->get();
    
    $time9 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','tueseday')
                    ->where('time','=','8:00 AM - 10:00 AM')
                    ->get();

    $time10 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','tueseday')
                    ->where('time','=','10:00 AM - 12:00 PM')
                    ->get();

    $time11 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','tueseday')
                    ->where('time','=','02:00 PM - 04:00 PM')
                    ->get();

    $time12 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','tueseday')
                    ->where('time','=','04:00 PM - 06:00 PM')
                    ->get();

    $time13 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','wednesday')
                    ->where('time','=','8:00 AM - 10:00 AM')
                    ->get();

    $time14 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','wednesday')
                    ->where('time','=','10:00 AM - 12:00 PM')
                    ->get();

    $time15 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','wednesday')
                    ->where('time','=','02:00 PM - 04:00 PM')
                    ->get();

    $time16 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','wednesday')
                    ->where('time','=','04:00 PM - 06:00 PM')
                    ->get();

    $time17 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','thursday')
                    ->where('time','=','8:00 AM - 10:00 AM')
                    ->get();

    $time18 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','thursday')
                    ->where('time','=','10:00 AM - 12:00 PM')
                    ->get();

    $time19 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','thursday')
                    ->where('time','=','02:00 PM - 04:00 PM')
                    ->get();

    $time20 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','thursday')
                    ->where('time','=','04:00 PM - 06:00 PM')
                    ->get();

    $time21 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','friday')
                    ->where('time','=','8:00 AM - 10:00 AM')
                    ->get();

    $time22 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','friday')
                    ->where('time','=','10:00 AM - 12:00 PM')
                    ->get();

    $time23 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','friday')
                    ->where('time','=','02:00 PM - 04:00 PM')
                    ->get();

    $time24 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','friday')
                    ->where('time','=','04:00 PM - 06:00 PM')
                    ->get();
    
    $time25 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','saturday')
                    ->where('time','=','8:00 AM - 10:00 AM')
                    ->get();

    $time26 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','saturday')
                    ->where('time','=','10:00 AM - 12:00 PM')
                    ->get();

    $time27 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','saturday')
                    ->where('time','=','02:00 PM - 04:00 PM')
                    ->get();

    $time28 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                    ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                    ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                    ->where('day','=','saturday')
                    ->where('time','=','04:00 PM - 06:00 PM')
                    ->get();
    
    
    return view('admintimetable', compact('time1','time2','time3','time4','time5','time6','time7','time8','time9'
                                        ,'time10','time11','time12','time13','time14','time15','time16','time17','time18','time19','time20'
                                        ,'time21','time22','time23','time24','time25','time26','time27','time28'));
}


    

}