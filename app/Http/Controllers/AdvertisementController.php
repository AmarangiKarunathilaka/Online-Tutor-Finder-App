<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class AdvertisementController extends Controller
{
   
    public function advertisements()
    {
        return view('advertisementUpload');
    }

public function advertisementUploadInput(Request $request)
{
    $keyValue = $request->input('key');

    $advertisement= new Advertisement();
    $advertisement->tutor_id = $request->key;
    $advertisement->tutorName = $request -> fullName;
    $advertisement->email = $request->email;
    $advertisement->payment = $request -> payment;
    $advertisement->subject = $request->subject;
    $advertisement->photo = $request->photo;
    $advertisement->description = $request -> message;


    $photo=$request->photo;

    if($photo)
    {
        $photoname=time().'.'.$photo->getClientOriginalExtension();
        $request->photo->move('uploads',$photoname);

        $advertisement->photo=$photoname;
    }
    $advertisement->save();
    return redirect()->back();
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
