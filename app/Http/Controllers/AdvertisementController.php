<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\LoginController;
use App\Models\tutorMedium;
use App\Models\tutorRegister;
use App\Models\tutorSubject;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Auth;
//Ramal 2023.12.14
use Barryvdh\DomPDF\Facade\Pdf;

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
        $advertisement->tutorName = $request -> input('fullName');
        $advertisement->email = $request->input('email');
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

        $userId = Session::get('user_id');
        $tutorName = tutorRegister::where('tutor_registers.id','=',$userId)
                                 ->select('tutor_registers.tutorFullName')
                                ->get();

        //dd($tutorName);

        $userId = Session::get('user_id');
        $email = tutorRegister::where('tutor_registers.id','=',$userId)
                                ->get();

        $userId = Session::get('user_id');
        $subjects = tutorSubject::where('tutor_subjects.tutorSubject_id','=',$userId)
                                ->distinct()->pluck('tutorSubject');
         
        $userId = Session::get('user_id');
        $medium = tutorMedium::where('tutor_mediums.tutorMedium_id','=',$userId)
                                                        ->distinct()->pluck('tutorMedium');
                        
        
        return view('advertismentUpload', compact('advertisements','tutorName','email','subjects','medium'));
        
    }

    public function showData($id){

        $advertisement = Advertisement::find($id);
        return view('editAdvertisement' , compact('advertisement')); 
    }

    //update the adevertisement 
    public function updateAdvertisement(Request $request, $id) {

        $advertisement = Advertisement::find($id);

        $advertisement->tutorName = $request -> input('fullName');
        $advertisement->email = $request->input('email');
        $advertisement->payment = $request -> input('payment');
        $advertisement->subject = $request->input('subject');
        $advertisement->description = $request -> input('message'); 
       
        if($request -> hasFile('photo')){
            $destination = 'uploads/'.$advertisement->photo;
            if(File::exists($destination)) {
                File::delete($destination);

            }
            $photo = $request->file('photo');
            $extention = $photo->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $photo->move('uploads/',$filename);
            $advertisement->photo = $filename;
        }

        $advertisement->update();
        return redirect()->back()-with('status','advertisement updated successfully');


    }


    public function destroy($id)
    {
        // Delete the advertisement
        Advertisement::destroy($id);

        return redirect()->back();
    }

    //search advertisement
    public function searchTutors(Request $request){

        $subject = $request->input('subject');
        $searchtutors = Advertisement::where('subject', 'like', "%$subject%")->get()->groupBy('subject');

    return view('search', compact('searchtutors'));
    }


    //My 2023.12.14
    public function generate_pdf_advertisement()
    {
        $advertisements = Advertisement::all(); 
        $pdf = Pdf::loadView('downloads/advertisementList',array('advertisements' => $advertisements));
        return $pdf->download('downloads/advertisementList.pdf');
    }




}
