<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassMaterial;
use Illuminate\Support\Facades\Stroage;
/*use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;*/

class ClassMaterialController extends Controller
{
    /*public function upload(Request $request)
    {
        // Validate the request input
        $request->validate([
            'tutorName' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'title' => 'required',
            'lecNote' => 'required',
            'file' => 'required|mimes:pdf,doc,docx',
        ]);

        // Upload the file
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $file->storeAs('public/uploads', $fileName);

          // Return a success message
        return response()->json(['message' => 'Class material uploaded successfully!']);
    }*/


        // Store the material data in the database
    public function upload(Request $request)
     {
        $classMaterial = new ClassMaterial();
        $classMaterial->tutorName = $request->tutorName;
        $classMaterial->email = $request->email;
        $classMaterial->subject = $request->subject;
        $classMaterial->title = $request->title;
        $classMaterial->lecNote = $request->lecNote;
        $classmaterial->file = $request->file;
        $classmaterial->tutor_id = $request->key;

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
    public function classMaterials(){
        return view('upload-class-material');
    }

    public function uploadClassMaterialInput(Request $request)
    {
        
        $keyValue = $request->input('key');

         

        ClassMaterial::create([
        'tutor_id' => $request->key,
        'tutorName' => $request->tutorName,
        'email' => $request->email,
        'subject' => $request->subject,
        'title' => $request->title,
        'lecNote' => $request->lecNote,
        'file' => $request->material,
        
          

    ]);

    return redirect() -> back();
    }

    

    public function classMaterialInput(Request $request)
    {
        $classmaterial= new ClassMaterial;
        $classmaterial->tutorName = $request->tutorName;
        $classmaterial->email = $request->email;
        $classmaterial->subject = $request->subject;
        $classmaterial->title = $request->title;
        $classmaterial->lecNote = $request->lecNote;
        $classmaterial->file = $request->file;
        $classmaterial->tutor_id = $request->key;
        
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

public function download(Request $request,$file)
{
    return response()->download(public_path('filestore/'.$file));
}



public function adminClassMaterialList()
{
    $classmaterial = ClassMaterial::all();
    return view('adminClassMaterialList', compact('classmaterial'));
}


public function materialDisplay()
{
    $classmaterial = ClassMaterial::where('status','=','active')->get();
    return view('classMaterial', compact('classmaterial'));
   
}


public function materialcontent()
{
    $classmaterial = ClassMaterial::where('status','=','active')->get();
    return view('materialContent', compact('classmaterial'));
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


}