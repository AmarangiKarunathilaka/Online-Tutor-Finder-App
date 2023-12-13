<?php

namespace App\Http\Controllers;
use App\Models\Timetable;
use App\Models\TutorProfile;
use App\Models\Tutordetail;
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
        $profile = TutorProfile::all();
        return view('editTutorProfile', compact('profile','time','detail'));
      
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
        $detail->tutorFullName=$request->tutorFullName;
        $detail->tutorPhoneNumber=$request->tutorPhoneNumber;
        $detail->qualification=$request->qualification;
        $detail->tutorEmail=$request->tutorEmail;
        $detail->subject=$request->subject;
        $detail->medium=$request->medium;
        $detail->tutor_id = $userId;


        $detail->save();
        return redirect()->back();


    }

    public function tutorDashboard()
    {   $profile = TutorProfile::all();
        $detail = Tutordetail::all();
        return view('tutorDashboard', compact('detail','profile'));
    }

}
