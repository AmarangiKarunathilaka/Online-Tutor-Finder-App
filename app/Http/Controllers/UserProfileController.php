<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index()
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
}

}
