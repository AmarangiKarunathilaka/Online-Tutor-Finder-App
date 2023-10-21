<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student and Tutor Chat</title>
    <link rel="stylesheet" href="css/chat.css">
	
</head>
<body>
@extends('tutorHomeContent')
@section('content')
<section class="home">
        <div class="text"></div>
    
    <div class="chat-container">
        <div class="chat-box">
            <div class="message tutor">
                <p>Tutor : Hello! How can I help you today?</p>
            </div>
            
            <!-- Add more messages here -->
        </div>
        <div class="input-box">
            <textarea placeholder="Type your message..."></textarea>
            <button>Send</button>
        </div>
    </div>
    </section>
    @endsection
</body>
</html>
