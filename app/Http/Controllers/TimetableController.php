<?php

namespace App\Http\Controllers;
use App\Models\Timetable;
use App\Models\TutorProfile;
use Illuminate\Http\Request;
use App\Models\login;
use Illuminate\Support\Facades\Session;

class TimetableController extends Controller
{
   /* public function index()
    {
        $timeSlots = ['8:00 AM', '9:00 AM', '10:00 AM']; // Add more time slots as needed
        $days = ['Monday', 'Tuesday', 'Wednesday']; // Add more days as needed

        $profile = TutorProfile::all();
        return view('editTutorProfile', compact('timeSlots', 'days','profile'));
    }

    public function update(Request $request)
    {
        $day = $request->input('day');
        $timeSlot = $request->input('time_slot');

        try {
            Timetable::create([
                'day' => $day,
                'time_slot' => $timeSlot,
            ]);

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            \Log::error($e);
    
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }*/
    public function editTutorProfile()
    {
        return view('editTutorProfile');
    }

    public function timeInput(Request $request)
    {
        $userId = Session::get('user_id');
        $timeslot= new Timetable;
        $timeslot->day = $request->day;
        $timeslot->time = $request->time;
        $timeslot->tutor_id = $userId;

        $timeslot->save();
        return redirect()->back();
    }

    
    public function create()
    {
        
        $userId = Session::get('user_id');
        $timeSlots = Timetable::where('timetables.tutor_id','=', $userId)
                                ->distinct()->pluck('time');

        $userId = Session::get('user_id');                        
        $days = Timetable::where('timetables.tutor_id','=', $userId)
                        ->distinct()->pluck('day');

        return view('classRequest', compact('timeSlots', 'days'));
    }


}
