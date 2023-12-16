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
use App\Models\login;
use Illuminate\Support\Facades\Session;



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
        $wfeedback = WebsiteFeedback::where('status','=','accepted')->get();
        $tfeedback = TutorFeedback::where('status','=','accepted')->get();
    
        return view('index', compact('advertisementMaths', 'advertisementPhysics', 'advertisementChemistry', 'advertisementBiology', 'feedback', 'wfeedback', 'tfeedback'));
    }

        


    
    
    public function tutorDashboard()

    {   
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
                        ->where('day','=','sunday')
                        ->where('time','=','slot1')
                        ->get();

        $userId = Session::get('user_id');
        $time2 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','sunday')
                        ->where('time','=','slot2')
                        ->get();

        $userId = Session::get('user_id');
        $time3 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','sunday')
                        ->where('time','=','slot3')
                        ->get();

        $userId = Session::get('user_id');
        $time4 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','sunday')
                        ->where('time','=','slot4')
                        ->get();

        $userId = Session::get('user_id');
        $time5 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','monday')
                        ->where('time','=','slot1')
                        ->get();

        $userId = Session::get('user_id');
        $time6 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','monday')
                        ->where('time','=','slot2')
                        ->get();

        $userId = Session::get('user_id');
        $time7 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','monday')
                        ->where('time','=','slot3')
                        ->get();

        $userId = Session::get('user_id');
        $time8 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','monday')
                        ->where('time','=','slot4')
                        ->get();

        $userId = Session::get('user_id');
        $time9 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','tueseday')
                        ->where('time','=','slot1')
                        ->get();

        $userId = Session::get('user_id');
        $time10 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','tueseday')
                        ->where('time','=','slot2')
                        ->get();

        $userId = Session::get('user_id');
        $time11 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','tueseday')
                        ->where('time','=','slot3')
                        ->get();

        $userId = Session::get('user_id');
        $time12 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','tueseday')
                        ->where('time','=','slot4')
                        ->get();

        $userId = Session::get('user_id');
        $time13 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','wednesday')
                        ->where('time','=','slot1')
                        ->get();

        $userId = Session::get('user_id');
        $time14 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','wednesday')
                        ->where('time','=','slot2')
                        ->get();

        $userId = Session::get('user_id');
        $time15 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','wednesday')
                        ->where('time','=','slot3')
                        ->get();

        $userId = Session::get('user_id');
        $time16 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','wednesday')
                        ->where('time','=','slot4')
                        ->get();

        $userId = Session::get('user_id');
        $time17 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','thursday')
                        ->where('time','=','slot1')
                        ->get();

        $userId = Session::get('user_id');
        $time18 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','thursday')
                        ->where('time','=','slot2')
                        ->get();

        $userId = Session::get('user_id');
        $time19 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','thursday')
                        ->where('time','=','slot3')
                        ->get();

        $userId = Session::get('user_id');
        $time20 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','thursday')
                        ->where('time','=','slot4')
                        ->get();

        $userId = Session::get('user_id');
        $time21 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','friday')
                        ->where('time','=','slot1')
                        ->get();

        $userId = Session::get('user_id');
        $time22 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','friday')
                        ->where('time','=','slot2')
                        ->get();

        $userId = Session::get('user_id');
        $time23 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','friday')
                        ->where('time','=','slot3')
                        ->get();

        $userId = Session::get('user_id');                
        $time24 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','friday')
                        ->where('time','=','slot4')
                        ->get();

        $userId = Session::get('user_id');
        $time25 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','saturday')
                        ->where('time','=','slot1')
                        ->get();

        $userId = Session::get('user_id');
        $time26 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','saturday')
                        ->where('time','=','slot2')
                        ->get();

        $userId = Session::get('user_id');
        $time27 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','saturday')
                        ->where('time','=','slot3')
                        ->get();

        $userId = Session::get('user_id');                
        $time28 = Timetable::join('tutor_registers', 'timetables.tutor_id', '=', 'tutor_registers.id')
                        ->join('tutor_subjects', 'timetables.tutor_id', '=', 'tutor_subjects.id')
                        ->select('timetables.*', 'tutor_registers.tutorFullName','tutor_subjects.tutorSubject')
                        ->where('timetables.tutor_id','=', $userId)
                        ->where('day','=','saturday')
                        ->where('time','=','slot4')
                        ->get();

        $tfeedback = TutorFeedback::where('status','=','accepted')->get();
        
        
        return view('tutorDashboard', compact('detail','profile','time1','time2','time3','time4','time5','time6','time7','time8','time9'
                                            ,'time10','time11','time12','time13','time14','time15','time16','time17','time18','time19','time20'
                                            ,'time21','time22','time23','time24','time25','time26','time27','time28', 'tfeedback'));
    }

}
    

