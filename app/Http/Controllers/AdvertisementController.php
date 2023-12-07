<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class AdvertisementController extends Controller
{
    // app/Http/Controllers/AdvertisementController.php
    public function advertisements(){
        return view('advertisementUpload');
    }

public function store(Request $request)
{

    //dd($request->all());
    //$request->validate([
       // 'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the allowed file types and size
   // ]);

    // Validate and store a new advertisement
    
    $keyValue = $request->input('key');


    $requestData = $request -> all();
    $fileName = time().$request->file('photo')->getClientOriginalName();
    $path = $request->file('photo')->storeAs('images', $fileName, 'public');
    $requestData["photo"] = '/storage/'.$path;
    Advertisement::create([
        'tutor_id'=> $request -> key,
        'tutorName'=> $request -> fullName,
        'email'=> $request -> email,
        'payment'=> $request -> payment,
        //'image_path' => str_replace('public/', '', $imagePath), // Remove 'public/' from the path
        'photo'=> $path,
        'description'=> $request -> message,
        'subject'=> $request -> subject,

        
       ]);
    
    //Advertisement::create($request->all());

    return redirect() -> back();
    //return redirect()->route('advertisements.index');
}

//postman api testing
/*public function create()
{
    return view('advertisements.create');
}*/


// List all advertisements
public function adminAdvertisementList()
{
     // Fetch advertisement data from the database
    $advertisements = Advertisement::all();

    // Return the advertisement  list view
    return view('adminAdvertisementList', compact('advertisements'));
}

public function advertisementDisplay()
{
    
    $advertisement = Advertisement::where('status','=','accepted')->get();
    return view('index', compact('advertisement'));
    dd('advertisement');
}


public function accept_advertisement($id)
    {
        
        $data = Advertisement::find($id);
        $data->status = 'accepted';
        $data->save();

        return redirect()->route('adminAdvertisementList')->with('success', 'Advertisement accepted successfully!');
    }

public function reject_advertisement($id)
    {
        $data = Advertisement::find($id);
        $data->status = 'rejected';
        $data->save();

        return redirect()->route('adminAdvertisementList')->with('success', 'Advertisement rejected successfully!');
    }


//public function index(){
    // Retrieve all advertisements
    //$advertisements = Advertisement::all();
    //$advertisements = DB::table('advertisements')->get();
    //return view('index')->with('advertisements', $advertisements);
    //return compact('advertisements');
//}

public function edit($id)
{
    $advertisement = Advertisement::find($id);
    return view('advertisements.edit', compact('advertisement'));
}

public function update(Request $request, $id)
{
    // Validate and update the advertisement
    $advertisement = Advertisement::find($id);
    $advertisement->update($request->all());

    return redirect()->route('advertisements.index');
}

public function destroy($id)
{
    // Delete the advertisement
    Advertisement::destroy($id);

    return redirect()->route('advertisements.index');
}
}
