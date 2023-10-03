<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{        
    public function store(Request $request)
    {
        // Validation rules for the feedback form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Feedback::create($validatedData);

        return redirect()->route('feedback.show')->with('success', 'Feedback submitted successfully!');
    }

    public function index()
    {
        $feedback = Feedback::latest()->get();
        return view('admin.feedback.index', compact('feedback'));
    }

    public function show()
    {
        $feedback = Feedback::latest()->get();
        return view('guest.feedback', compact('feedback'));
    }

}
