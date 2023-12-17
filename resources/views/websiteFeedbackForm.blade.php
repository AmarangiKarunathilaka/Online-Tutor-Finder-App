<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="css/feedback1.css" />
</head>
<body>
@extends('tutorHomeContent')
@section('content')
<section class="home">
        <div class="text"></div>
    
    
    <div class="container">
        
        <h1 class="form-title">Website Feedback form</h1>
        <p><span class="highlighted">We value your feedback! Please fill out the form below:</span></p>
        <form id="website-feedback-form" action="{{url('/feedbackInput')}}" method="POST" enctype="multipart/form-data">
            @csrf            
            
            @foreach ($tutorName as $tutorName)
            <div class="form-group">
                
                <input type="text" id="name" name="name" placeholder="Name" value="{{$tutorName->tutorFullName}}" disabled/>
            </div>
            @endforeach

            @foreach ($email as $email)
            <div class="form-group">
                
                <input type="email" id="email" name="email" placeholder="Email" value="{{$email->tutorEmail}}" disabled/>
            </div>
            @endforeach

            <div class="form-group">
                <label for="rating">Rating:</label>
                <select id="rating" name="rating" required>
                    <option value="5">5 - Excellent</option>
                    <option value="4">4 - Very Good</option>
                    <option value="3">3 - Good</option>
                    <option value="2">2 - Fair</option>
                    <option value="1">1 - Poor</option>
                </select>
            </div>

            <div class="form-group">
                
                <textarea id="message" name="message" rows="4" placeholder="Type your Feedback" ></textarea>
            </div>
            
    
            <button type="submit" class="btn" onclick="openPopup()">submit</button>
                <div  class = "popup" id="popup">
                    <img src = "images/tick.png">
                    <h2>Thank You!</h2>
                    <p>Your details has been successfully submitted. Thanks!</p>
                    <button type = "button" onclick="closePopup()">OK</button>
                </div>
                    
                <script>
                    let popup= document.getElementById("popup");

                    function openPopup(){
                    popup.classList.add("open-popup"); 
                    }

                    function closePopup(){
                    popup.classList.remove("open-popup"); 
                    }
                </script>
        </form>
            <!--@if(isset($success) && $success)
                <div class="success-message">Thank you! Your feedback has been submitted successfully.</div>
            @endif-->
    </div>

    </div>
    
    </section>
    @endsection
</body>
</html>
