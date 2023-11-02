<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
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
    function editTutorProfile(Request $req){
        $UserProfile=new UserProfile;
        $UserProfile->id=$req->id;
        $UserProfile->username=$req->name;
        $UserProfile->contact=$req->contact;
        $UserProfile->qualification=$req->qualification;
        $UserProfile->subject=$req->subject;
        $UserProfile->medium=$req->medium;
        $UserProfile->image=$req->image;
        $UserProfile->save();
        
    

    }

}
