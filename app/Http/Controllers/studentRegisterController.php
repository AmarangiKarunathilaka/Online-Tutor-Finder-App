<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentRegister;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
//Ramal
use Barryvdh\DomPDF\Facade\Pdf;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class studentRegisterController extends Controller
{
    public function studentRegister(){
        return view('sRegister');
    }


    public function studentRegisterInput(Request $request)
    {
        $rules = [
            'name' => 'required',
            'studentEmail' => 'required|email|unique:student_registers,studentEmail',
            'password'   => 'required|min:8',
            'studentReEnterPassword'=> 'required|same:password',
            'studentContact' => 'required|regex:/^0\d{9}$/',
        ];

        $customMessages = [
            'password.min' => 'The password must be at least 8 characters.',
            'studentReEnterPassword.same'=> 'Password not match',
            'studentContact' => 'Phone number must be 10 characters',
        ];

        $validator = Validator::make($request->all(), $rules,$customMessages);

        if ($validator->fails()) 
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        studentRegister::create([
            'studentFullName'=> $request -> name,
            'birthday'=> $request -> dateOfBirth,
            'address'=> $request -> address,
            'studentPhoneNumber'=> $request -> studentContact,
            'studentEmail'=> $request -> studentEmail,
            'password'=> Hash::make($request -> password),
            // 'studentConfirmPassword'=> $request -> studentReEnterPassword
           ]);

        

        // Create a new record in the database
        //$register = Register::create($request->all());
 
        // Redirect after successfully creating the record
        //return redirect(route('tregister'));
        $user_type = 'student';
        return view('login', compact('user_type'));
    }

    //Amare 2023.12.13
    public function generate_pdf_student()
    {
        $students = studentRegister::all(); 
        $pdf = Pdf::loadView('downloads/studentList',array('students' => $students));
        return $pdf->download('downloads/studentList.pdf');
    }

    public function adminStudentList(){
        $students = studentRegister::all(); 
        return view('adminStudentList', compact('students'));
    }

    public function accept_student($id)
    {
        
        $data = studentRegister::find($id);
        $data->status = 'accepted';
        $data->save();


        return redirect()->back();
    }

    public function reject_student($id)
    {
        $data = studentRegister::find($id);
        $data->status = 'rejected';
        $data->save();

       

        return redirect()->route('adminStudentList')->with('success', 'Student rejected successfully!');
    }
  /*  public function handleActionView()
    {
        return view('adminStudentList');
    }

    public function handleAction($id, $action)
{
    $data = studentRegister::find($id);

    if ($action === 'accept') {
        $data->status = 'accepted';
        $data->save();

        // Insert into another table (e.g., accepted_students)
        DB::table('accepted_students')->insert([
            'id' => $data->id,
            'studentFullName' => $data->studentFullName,
            'birthday' => $data->birthday,
            'address' => $data->address,
            'studentPhoneNumber' => $data->studentPhoneNumber,
            'studentEmail' => $data->studentEmail,
            'status' => 'accepted',
        ]);

        $this->sendEmail($data->studentEmail, 'accepted');
    } elseif ($action === 'remove') {
        $data->status = 'rejected';
        $data->save();
        $this->sendEmail($data->studentEmail, 'rejected');
    }

    return redirect()->route('adminStudentList')->with('success', 'Student ' . ucfirst($action) . 'ed successfully!');
}*/

//public function addStudent(Request $request,)

    public function sendEmailButton()
    {
        return view('adminStudentList'); // Replace 'your-blade-view' with the actual name of your blade file
    }

    public function sendEmail(Request $request, $email)
    {
        //$emails = studentRegister::pluck('studentEmail')->toArray();

        //foreach ($emails as $email) {

            $details = [
                'message' => $request->button == 'accept' ? 'You are accepted. Thank you' : 'We are extremely sorry. You are not accepted.',
                'loginLink' => $request->button == 'accept' ? 'http://127.0.0.1:8000/login' : null,
            ];

        Mail::to($email)->send(new SendEmail($details));
    
    return redirect()->back();
        //return redirect()->route('send.email.button')->with('message', 'Email sent successfully!');

    }

}