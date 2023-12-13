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

    public function myAdvertisements()
    {
        
        $advertisements = Advertisement::where('status','=','accepted')
        ->where('tutor_id','=',Session::get('user_id'))
        ->get();
        return view('advertismentUpload', compact('advertisements'));
        
    }

    public function showData($id)
    {
        // update the advertisement
        $data = Advertisement::find($id);
        return view('editAdvertisement', ['advertisements'=>$data]);
      
    }

    public function updateAdvertisement(Request $request, $id)
    {
        // update the advertisement
        $advertisement = Advertisement::find($id);
        $photo=$request->photo;

        if($photo)
        {
            $photoname=time().'.'.$photo->getClientOriginalExtension();
            $request->photo->move('uploads',$photoname);

            $advertisement->photo=$photoname;
        }
        $advertisement->update($request->all());

        return redirect()->back();
    }

    public function destroy($id)
    {
        // Delete the advertisement
        Advertisement::destroy($id);

        return redirect()->back();
    }
}
