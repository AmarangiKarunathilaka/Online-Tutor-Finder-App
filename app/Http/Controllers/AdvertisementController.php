<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;


class AdvertisementController extends Controller
{
    // app/Http/Controllers/AdvertisementController.php
    public function advertisements(){
        return view('advertisementUpload');
    }

public function index()
{
    // Retrieve all advertisements
    $advertisements = Advertisement::all();
    return compact('advertisements');
}

/*public function create()
{
    return view('advertisements.create');
}*/

public function uploadAdvertisementInput(Request $request)
{
    // Validate and store a new advertisement
    
    // You can use $request->input('field_name') to get the input values
    Advertisement::create([
        'tutorName'=> $request -> fullname,
        'email'=> $request -> email,
        'payment'=> $request -> payment,
        'imageUpload'=> $request -> image,
        'description'=> $request -> message,
        'subject'=> $request -> subject,
        
       ]);
    
    //Advertisement::create($request->all());

    return redirect() -> back();
    //return redirect()->route('advertisements.index');
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


    //search function -ishara
    public function search(Request $request)
{
    $query = $request->input('query');

    $advertisements = Advertisement::where('subject', 'LIKE', '%' . $query . '%')->get();

    return view('advertisements.index', compact('advertisements'));
}


}
