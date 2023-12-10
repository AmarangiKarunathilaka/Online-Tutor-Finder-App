<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Session;
use Auth;

class AdvertisementController extends Controller
{
   
    public function advertisements()
    {
        return view('advertisementUpload');
    }

    public function advertisementUploadInput(Request $request)
    {
        
        $userId = Session::get('user_id');
        $advertisement= new Advertisement();
        $advertisement->tutor_id = $userId;
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



    // List all advertisements
    public function adminAdvertisementList()
    {
        // Fetch advertisement data from the database
        $advertisements = Advertisement::all();

        // Return the advertisement  list view
        return view('adminAdvertisementList', compact('advertisements'));
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

    public function advertisementDisplay()
    {
        $advertisements = 'Value 1';
        $advertisements = Advertisement::where('status','=','accepted')->get();
        return view('studentDashboard', compact('advertisements'));
        
    }
    

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
