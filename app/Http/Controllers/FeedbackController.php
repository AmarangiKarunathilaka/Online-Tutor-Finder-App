<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    /*function websiteFeedbackForm(Request $req){
        $feedback = new Feedback;
        $feedback->name=$req->name;
        $feedback->email=$req->email;
        $feedback->rating=$req->rating;
        $feedback->message=$req->message;
        $feedback->save();
    }*/

    public function feedback(){
        return view('websiteFeedbackForm');
    }

    public function uploadFeedbackInput(Request $request){

        $keyValue = $request->input('key');

        Feedback::create([
            'student_id'=> $request -> key,
            'name'=> $request -> name,
            'email'=> $request -> email,
            'rating'=> $request -> rating,
            'message'=> $request -> message,
        ]);

        return redirect() -> back();
}
}
