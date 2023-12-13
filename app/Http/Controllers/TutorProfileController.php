<?php

namespace App\Http\Controllers;
use App\Models\Timetable;
use App\Models\TutorProfile;
use Illuminate\Http\Request;

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

        $profile = TutorProfile::all();
        return view('editTutorProfile', compact('profile'));
      
    }



public function TutorprofileInput(Request $request)
    {
        $keyValue = $request->input('key');


        
        $profile=new TutorProfile;
        $profile->tutor_id= $request -> key;
        $profile->id=$request->id;
        $profile->tutorFullName=$request->tutorFullName;
        $profile->tutorPhoneNumber=$request->tutorPhoneNumber;
        $profile->qualification=$request->qualification;
        $profile->tutorEmail=$request->tutorEmail;
        $profile->subject=$request->subject;
        $profile->medium=$request->medium;
        $profile->image=$request->image;
        

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

    public function tutorDashboard()
    {
        $profile = TutorProfile::all();
        return view('tutorDashboard', compact('profile'));
    }

}
