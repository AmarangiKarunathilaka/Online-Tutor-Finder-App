<?php

namespace App\Http\Controllers;
use App\Models\Timetable;
use App\Models\TutorProfile;
use App\Models\Tutordetail;
use App\Models\tutorMedium;
use App\Models\tutorRegister;
use App\Models\tutorSubject;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;


class TutorProfileController extends Controller
{
   /* public function index()
{
    $userProfiles = UserProfile::all();
    return view('user-profiles.index', compact('userProfiles'));
}

public function create()
{
    return view('user-profiles.create');
}

public function store(Request $request)
{
    // Validate and save the data
}

public function show($id)
{
    $userProfile = UserProfile::findOrFail($id);
    return view('user-profiles.show', compact('userProfile'));
}

public function edit($id)
{
    $userProfile = UserProfile::findOrFail($id);
    return view('user-profiles.edit', compact('userProfile'));
}

public function update(Request $request, $id)
{
    // Validate and update the data
}

public function destroy($id)
{
    // Delete the user profile
}*/
public function editTutorProfile()
    {
        $detail=Tutordetail::all();
        $time=Timetable::all();
        
        $userId = Session::get('user_id');
        $profile = TutorProfile::where('tutor_profiles.tutor_id','=', $userId)
                            ->get();

        $userId = Session::get('user_id');
        $tutorName = tutorRegister::where('tutor_registers.id','=',$userId)
                                    ->select('tutor_registers.tutorFullName')
                                    ->get();
                    
        $userId = Session::get('user_id');
        $email = tutorRegister::where('tutor_registers.id','=',$userId)
                                ->get();

        $userId = Session::get('user_id');
        $phon = tutorRegister::where('tutor_registers.id','=',$userId)
                                ->get();

        $userId = Session::get('user_id');
        $subjects = tutorSubject::where('tutor_subjects.tutorSubject_id','=',$userId)
                                ->distinct()->pluck('tutorSubject');

        $userId = Session::get('user_id');
        $medium = tutorMedium::where('tutor_mediums.tutorMedium_id','=',$userId)
                                ->distinct()->pluck('tutorMedium');
                        

        return view('editTutorProfile', compact('profile','time','detail','tutorName','email','phon','subjects','medium'));
      
    }



public function TutorprofileInput(Request $request)
    {
        $userId = Session::get('user_id');
        $profile=new TutorProfile;
        $profile->image=$request->image;
        $profile->tutor_id = $userId;

        $image=$request->image;
       
        if($image)
        {
            $photoname=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('profileImage',$photoname);

            $profile->image=$photoname;
        }
        $profile->save();
        return redirect()->back();
      
    }

    public function detailInput(Request $request)
    {
        $userId = Session::get('user_id');
        $detail= new Tutordetail;
        $detail->tutorFullName=$request->input('tutorFullName');
        $detail->tutorPhoneNumber=$request->input('tutorPhoneNumber');
        $detail->qualification=$request->qualification;
        $detail->tutorEmail=$request->input('tutorEmail');
        $detail->subject=$request->subject;
        $detail->medium=$request->medium;
        $detail->tutor_id = $userId;


        $detail->save();
        return redirect()->back();


    }


    public function destroy($id)
    {
        // Delete the advertisement
        
        TutorProfile::destroy($id);

        return redirect()->back();
    }

}
