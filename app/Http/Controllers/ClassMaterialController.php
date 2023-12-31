<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassMaterial;
use App\Models\ClassRequest;
use App\Models\tutorMedium;
use App\Models\tutorRegister;
use App\Models\tutorSubject;
use Illuminate\Support\Facades\Stroage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;




class ClassMaterialController extends Controller
{
    
    public function classMaterials()
    {
        
        $userId = Session::get('user_id');
        $tutorName = tutorRegister::where('tutor_registers.id','=',$userId)
                                 ->select('tutor_registers.tutorFullName')
                                ->get();

        $userId = Session::get('user_id');
        $email = tutorRegister::where('tutor_registers.id','=',$userId)
                                ->get();

        $userId = Session::get('user_id');
        $subjects = tutorSubject::where('tutor_subjects.tutorSubject_id','=',$userId)
                                ->distinct()->pluck('tutorSubject');

                                
        return view('upload-class-material',compact('tutorName','email','subjects'));;
    }

    

    public function classMaterialInput(Request $request)
    {
        $userId = Session::get('user_id');
        $classmaterial= new ClassMaterial;
        $classmaterial->tutorName = $request->input('tutorName');
        $classmaterial->email = $request->input('email');
        $classmaterial->subject = $request->subject;
        $classmaterial->title = $request->title;
        $classmaterial->lecNote = $request->lecNote;
        $classmaterial->file = $request->file;
        $classmaterial->tutor_id = $userId;
        
        $file=$request->file;

        if($file)
        {
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('filestore',$filename);

            $classmaterial->file=$filename;
        }
        $classmaterial->save();
        return redirect()->back();
    }



    public function adminClassMaterialList()
    {
        $classmaterial = ClassMaterial::all();
        return view('adminClassMaterialList', compact('classmaterial'));
    }




    public function accept_material($id)
    {
        $data = ClassMaterial::find($id);
        $data->status = 'active';
        $data->save();

        return redirect()->route('adminClassMaterialList')->with('success', 'Class Material accepted successfully!');
    }



    public function reject_material($id)
    {
        $data = ClassMaterial::find($id);
        $data->status = 'rejected';
        $data->save();

        return redirect()->route('adminClassMaterialList')->with('success', 'Class Material rejected successfully!');
    }

    

    public function maths()
    {

        $note = ClassMaterial::where('status','=','active')
        ->where('subject','=','mathematics')
        ->where('lecNote','=','ClassNote')
        ->get();

        $userId = Session::get('user_id');
    
        $requests = ClassRequest::where('class_requests.student_id','=', $userId)
                                ->where('status','=','accepted')
                                ->get();
                                  
                                $combinedResults = $requests->merge($note);
                              
        $ass = ClassMaterial::where('status','=','active')
                            ->where('subject','=','mathematics')
                            ->where('lecNote','=','Assignment')
                            ->get();

        $combinedass = $requests->intersect($ass);
        
        $ref = ClassMaterial::where('status','=','active')
                            ->where('subject','=','mathematics')
                            ->where('lecNote','=','Reference')
                            ->get();
        

        return view('materialContent.maths', compact('note','ass','ref','combinedResults','combinedass'));
    }

    public function chemistry()
    {
        $note = ClassMaterial::where('status','=','active')
                            ->where('subject','=','chemistry')
                            ->where('lecNote','=','ClassNote')
                            ->get();

        $ass = ClassMaterial::where('status','=','active')
                            ->where('subject','=','chemistry')
                            ->where('lecNote','=','Assignment')
                            ->get();

        $ref = ClassMaterial::where('status','=','active')
                            ->where('subject','=','chemistry')
                            ->where('lecNote','=','Reference')
                            ->get();


        return view('materialContent.chemistry', compact('note','ass','ref'));
    }


    public function physics()
    {
        $note = ClassMaterial::where('status','=','active')
                            ->where('subject','=','physics')
                            ->where('lecNote','=','ClassNote')
                            ->get();

        $ass = ClassMaterial::where('status','=','active')
                            ->where('subject','=','physics')
                            ->where('lecNote','=','Assignment')
                            ->get();

        $ref = ClassMaterial::where('status','=','active')
                            ->where('subject','=','physics')
                            ->where('lecNote','=','Reference')
                            ->get();


        return view('materialContent.physics', compact('note','ass','ref'));
    }

    public function biology()
    {
       
        $note = ClassMaterial::where('status','=','active')
                            ->where('subject','=','biology')
                            ->where('lecNote','=','ClassNote')
                            ->get();

        $ass = ClassMaterial::where('status','=','active')
                            ->where('subject','=','biology')
                            ->where('lecNote','=','Assignment')
                            ->get();

        $ref = ClassMaterial::where('status','=','active')
                            ->where('subject','=','biology')
                            ->where('lecNote','=','Reference')
                            ->get();


        return view('materialContent.biology', compact('note','ass','ref'));
    }





    public function download(Request $request,$file)
    {
         return response()->download(public_path('filestore/'.$file));
    }


    public function view($id)
    {
        $classmaterial=ClassMaterial::find($id);
        return view('adminView', compact('classmaterial'));
    }


    //no need pdf report



}