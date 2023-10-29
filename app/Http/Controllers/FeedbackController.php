<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{        
    public function store(Request $request)
    {
        // Validate the input data from the form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'rating' => 'required|integer',
            'message' => 'required|string',
        ]);

        // Create a new Feedback model instance and populate it with the validated data
        $feedback = new Feedback;
        $feedback->name = $validatedData['name'];
        $feedback->email = $validatedData['email'];
        $feedback->rating = $validatedData['rating'];
        $feedback->message = $validatedData['message'];

        // Save the feedback to the database
        $feedback->save();

        // Redirect back to the feedback form with a success message
        return redirect()->route('feedback.form')->with('success', 'Feedback submitted successfully!');
    }


    public function index()
    {
        $feedback = Feedback::latest()->get();
        return view('websiteFeedbackForm');
    }

    public function show()
    {
        $feedback = Feedback::latest()->get();
        return view('guest.feedback', compact('feedback'));
    }

}
