<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tutorRegister;
use App\Models\tutorMedium;
use App\Models\tutorSubject;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Mail\WelcomeEmail1;



class tutorRegisterController extends Controller
{

    public function tutorRegister(){
        return view('tregister');
    }

    
    public function tutorRegisterInput(Request $request){

        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:tutor_registers,tutorEmail',
            'password'   => 'required|min:8',
            'reEnterPassword'=> 'required|same:password',
            'contact' => 'required|regex:/^0\d{9}$/',
        ];

        $customMessages = [
            'password.min' => 'The password must be at least 8 characters.',
            'reEnterPassword.same'=> 'Password not match',
            'contact' => 'Phone number must be 10 characters',
        ];

        $validator = Validator::make($request->all(), $rules,$customMessages);
        if ($validator->fails()) 
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
      tutorRegister::create([
         'tutorFullName'=> $request -> name,
         'tutorPhoneNumber'=> $request -> contact,
         'qualification'=> $request -> qualification,
         'tutorEmail'=> $request -> email,
         'password'=> Hash::make($request -> password),
        //  'tutorConfirmPassword'=> $request -> reEnterPassword
        ]);

        $user = DB::select("select * from tutor_registers order by id desc limit 1");
       // $mm = ['users'=> $users];
        //return $users;
        //$mm=['users'->$users];
        //return $mm;
            //return $mm->id;

        if (!empty($request->subject1)) {
            tutorSubject::create([
                'tutorSubject_id' => $user[0]->id,
                'tutorSubject' => $request->subject1
            ]);
        }

        if (!empty($request->subject2)) {
            tutorSubject::create([
                'tutorSubject_id' => $user[0]->id,
                'tutorSubject' => $request->subject2
            ]);
        }

        if (!empty($request->subject3)) {
            tutorSubject::create([
                'tutorSubject_id' => $user[0]->id,
                'tutorSubject' => $request->subject3
            ]);
        }

        if (!empty($request->subject4)) {
            tutorSubject::create([
                'tutorSubject_id' => $user[0]->id,
                'tutorSubject' => $request->subject4
            ]);
        }
        ////

        if (!empty($request->medium1)) {
            tutorMedium::create([
                'tutorMedium_id' => $user[0]->id,
                'tutorMedium' => $request->medium1
            ]);
        }

        if (!empty($request->medium2)) {
            tutorMedium::create([
                'tutorMedium_id' => $user[0]->id,
                'tutorMedium' => $request->medium2
            ]);
        }

        if (!empty($request->medium3)) {
            tutorMedium::create([
                'tutorMedium_id' => $user[0]->id,
                'tutorMedium' => $request->medium3
            ]);
        } 
        
     
     $user1 = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password
    ];
    
    if (isset($user1['email'])) {
        Mail::to($user1['email'])->send(new WelcomeEmail1($user1));
    } else {
        // Handle the case where the email is not set
    }
    
    $user_type = 'tutor';
    return view('tregister', compact('user_type'));

    // return redirect() -> back();
    }

     //Ramal 2023.12.13
     public function generate_pdf_tutor()
    {
        $tutor = tutorRegister::all(); 
        $pdf = Pdf::loadView('downloads/tutorList',array('tutor' => $tutor));
        return $pdf->download('downloads/tutorList.pdf');
    }
     
    // public function adminTutorList()
    // {
    //     $data = tutorRegister::join('tutor_mediums', 'tutor_mediums.tutorMedium_id', '=', 'tutor_registers.id')
    //                         ->join('tutor_subjects', 'tutor_subjects.tutorSubject_id', '=', 'tutor_registers.id')
    //                         ->get(['tutor_registers.id',
    //                                 'tutor_registers.tutorFullName',
    //                                 'tutor_registers.tutorPhoneNumber',
    //                                 'tutor_registers.qualification',
    //                                 'tutor_registers.tutorEmail',
    //                                 'tutor_registers.status',
    //                                 'tutor_mediums.tutorMedium', 'tutor_subjects.tutorSubject']);


    //     return view('adminTutorList', compact('data'));

    // }
    
     // List all 
     public function adminTutorList()
     {
         
         $data = tutorRegister::all();
 
         // Return the advertisement  list view
         return view('adminTutorList', compact('data'));
     }
 
    public function accept_tutor($id)
    {
        
        $data = tutorRegister::find($id);
        $data->status = 'accepted';
        $data->save();

        

        return redirect()->back();
    }

    public function reject_tutor($id)
    {
        $data = tutorRegister::find($id);
        $data->status = 'rejected';
        $data->save();

        

        return redirect()->back();
    }


     public function sendEmailButton()
    {
        return view('adminTutorList'); // Replace 'your-blade-view' with the actual name of your blade file
    }

    public function sendEmail(Request $request, $email)
    {
        //$emails = studentRegister::pluck('studentEmail')->toArray();

        //foreach ($emails as $email) {

            $details = [
                'message' => $request->button == 'accept' ? 'You are accepted.' : 'We are extremely sorry. You are not accepted.',
                'loginLink' => $request->button == 'accept' ? 'http://127.0.0.1:8000/login' : null,
            ];

        Mail::to($email)->send(new SendEmail($details));
    //}
    return redirect()->back();
        //return redirect()->route('send.email.button')->with('message', 'Email sent successfully!');

    }

}
