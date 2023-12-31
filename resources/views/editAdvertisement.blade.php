<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertisement upload form</title>
    
    <link rel="stylesheet" href="{{ asset('css/classMaterial.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/advertisement.css')}}" />
    
    

    <link href="css/bootstrap-icons.css" rel="stylesheet">   

    <link href="css/owl.carousel.min.css" rel="stylesheet"> 

    <link href="css/bootstrap-icons.css" rel="stylesheet"> 

  </head>
  <body>

  @extends('tutorHomeContent')
  @section('content')
  <section class="home">
        <div class="text"></div>
    
       
    <div class="container">
    @if (session('status'))

        <h6 class="alert alert-success">{{ session('status')}}</h6>

    @endif
      <div>
      <h1 class="form-title">Advertisement Update</h1>
      <form action="{{ url('edit',$advertisement->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="fullName">Name</label>
            <input type="text"
                    id="fullName"
                    name="fullName"
                    placeholder="Name to be displayed" value="{{$advertisement->tutorName}}"/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your Email" value="{{$advertisement->email}}"/>
          </div>
          
          
          <div class="user-input-box">
            <label for="title">Class Fee</label>
            <input type="text"
                    id="title"
                    name="payment"
                    placeholder="Enter Your payment for one hour : LKR" value="{{$advertisement->payment}}"/>
          </div>
          
        
          <div class="user-input-box">
            <label for="email">Description</label>
            <input type="text" id="message" name="message" rows="4" placeholder="Your Qualifications..." value="{{$advertisement->description}}"/>
            </div>
          
        </div>
          <div class="user-input-box">
            <label for="material">Upload image:</label>
                <input type="file" name="photo"   accept="image/jpeg, image/png, image/jpg" id="input-file" />
                <img src="{{ asset('uploads/'.$advertisement->photo) }}" width="200px" height="200px" alt="Image">
          </div>
        
        <div class="category-details-box">
          
          </br>
          </br>
          <div class="user-input-box">
            <label for="subject">Select Subject</label>
                <select name="subject" id="subject">
                    <option value="Mathematics" value="{{$advertisement->subject}}">Mathematics</option>
                    <option value="Physics" value="{{$advertisement->subject}}">Physics</option>
                    <option value="Chemistry" value="{{$advertisement->subject}}">Chemistry</option>
                    <option value="Chemistry" value="{{$advertisement->subject}}">Biology</option>
                    
                </select>
          </div>
        </div>
        
        
        <div class="form-submit-btn">
          
          <button type="submit" class="btn" onclick="openPopup()">Update</button>
                <div  class = "popup" id="popup">
                    <img src = "images/tick.png">
                    <h2>Successful</h2>
                    <p>Your advertisment updated</p>
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
        </div>
      </form>
        </div>
        
      
    </div>
                  </br>
    
    

      <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/click-scroll.js"></script>
     <script src="js/jquery.backstretch.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

    @endsection
    </section>
  </body>
</html>