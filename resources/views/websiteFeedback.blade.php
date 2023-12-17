<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="css/feedback1.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
          
        
        button,.fa{
            color: #383838;
            box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);
            cursor: pointer;
        }
        .fa{
            font-size: 20px;
            padding: 10px 18px;
        }
        #back,.fa-mail-forward{
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        
        
        .fa-mail-reply{
            background: linear-gradient(#ffeb3b,#ff5722);
        }
        
    </style>
</head>
<body>
@extends('studentHomeContent')
@section('content')
<section class="home">
        <div class="text"></div>
    
    
    <div class="container">
    <a href="/studentDashboard">
      <i class="fa fa-mail-reply" aria-hidden="true"></i></a>
        <h1 class="form-title">Website Feedback form</h1>
        <p><span class="highlighted">We value your feedback! Please fill out the form below:</span></p>
        <form id="website-feedback-form" action="{{url('/wfeedbackInput')}}" method="POST">
            @csrf

            <input type="hidden" name="key" value="1">
            <div class="form-group">
                
                <input type="text" id="name" name="name" placeholder="Name"required>
            </div>
            <div class="form-group">
                
                <input type="email" id="email" name="email" placeholder="Email">
            </div>
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
            
    </div>

    </div>
    
    </section>
    @endsection
</body>
</html>
