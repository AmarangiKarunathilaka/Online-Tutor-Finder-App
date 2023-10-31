<?php
  
namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;  
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class ImageUploadController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUpload()
    {
        return view('advertisementUpload');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUploadPost(Request $request)
    {
        $request->validate([
            'imageUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$request->file('imageUpload')->extension();  

        $fileName = $request->file('imageUpload')->store('images', 's3');
     
        $path = Storage::disk('s3')->put('images', $request->file('imageUpload'));
         
        //$path = Storage::disk('s3')->url($fileName);

        Advertisement::create([
            'imageUpload'=> $request -> image,
            
        ]);
  
        /* Store $imageName name in DATABASE from HERE */
    
        return back()
            ->with('success','You have successfully upload image.')
            ->with('imageUpload', $path); 
    }
}