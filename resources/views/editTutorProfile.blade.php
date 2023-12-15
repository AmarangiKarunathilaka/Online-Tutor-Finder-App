<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>edit Tutor Profile</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

    	<link rel="stylesheet" href="css/editTutorProfile.css" />
</head>
<body>

@extends('tutorHomeContent')
@section('content')
<section class="home">
        <div class="text">Edit Profile</div>
<div class="container-xl  mt-4">

<form action="{{ url('/TutorprofileInput') }}" method="post"  enctype="multipart/form-data">
            @csrf

           
<hr class="mt-0 mb-4">
<div class="row">
<div class="col-xl-4">

<div class="card mb-4 mb-xl-0">
    <div class="card-header">Profile Picture</div>
        <div class="card-body text-center">
            <div class="hero">
                
            @if(isset($profile) && count($profile)>0)     
                                     
            @foreach ($profile as $profile)
                          
                          <img src="/profileImage/{{ $profile ->image }}" width='150' height='150' class="img-account-profile rounded-circle mb-2" alt/>
                                 
                          @endforeach
              
                          @else
                                  <h4 style="color:#000;  font-weight: bold;"> Please Submit Your Profile Details</h4>
                                @endif

                    <div class="col-xl-6">
                    <lable for="input-file"><b>Upload image:</b></div>
                    <input type="file" name="image" accept="image/jpeg, image/png, image/jpg" id="input-file">
                    <input type="submit" style= "margin-top:20px; margin-bottom:20px; background-color: #bacf01; padding:8px;width:200px;font-size:23px;font-weight:600 ; border-radius: 4px; border:none;"> 
            
            </div>

            <script>
                let profilePic = document.getElementById("profile-pic");
                let inputFile = document.getElementById("input-file");

                inputFile.onechange = function(){
                    profilePic.src=URL.createObjectURL(inputFile.files[0])
                }
            </script>
        </div></form> 
    </div>
</div> 
<div class="col-xl-8">
<div class="card mb-3">

            </div>


            <div class="container">
            <h1 class="form-title">When can you take classes?</h1>
    <form method="post" action="{{ url('/timeInput') }}" enctype="multipart/form-data">
        @csrf
        <div class="main-user-info">
        <div class="user-input-box">
            <label for="day">Select Day</label>
                <select name="day" id="day">
                    <option value="sunday">Sunday</option>
                    <option value="monday ">Monday</option>
                    <option value="tueseday">Tuesday</option>
                    <option value="wednesday">Wednesday</option>
                    <option value="thursday ">Thursday</option>
                    <option value="friday">Friday</option>
                    <option value="saturday">Saturday</option>
                    
                    
                </select>
          </div>

          <div class="user-input-box">
            <label for="time">Select Time-Slot</label>
                <select name="time" id="time">
                    <option value="slot1">8:00 AM - 10:00 AM</option>
                    <option value="slot2 ">10:00 AM - 12:00 PM</option>
                    <option value="slot3">02:00 PM - 04:00 PM</option>
                    <option value="slot4">04:00 PM - 06:00 PM</option>
                   
                </select>
          </div>


            <button style=" width:180px;" type="submit" class="btn"><b>Add Class<b></button>
            </div>
            </form>
            </div>
            </div>
            </div>
   
     <form action="{{ url('/detailInput') }}" method="post"  enctype="multipart/form-data">
            @csrf

            <div class="container">
            <h1 class="form-title">Profile Details</h1>
            
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="tutorName">Name</label>
            <input type="text"
                    id="tutorName"
                    name="tutorFullName"
                    placeholder="Enter Full Name"/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="tutorEmail"
                    placeholder="Enter Email"/>
          </div>

          <div class="user-input-box">
            <label for="num">Contact No.</label>
            <input type="text"
                    id="num"
                    name="tutorPhoneNumber"
                    placeholder="+94"/>
          </div>
          
         


          <div class="user-input-box">
            <label for="title">Qualifications</label>  </div>
            
            <textarea type="text" class="form-control" placeholder="Qualifications" name="qualification" rows="5" cols="10" required></textarea>
                      
                        
            <div class="user-input-box">
            <label for="subject">Select Subject</label>
                <select name="subject" id="subject">
                    <option value="Mathematics">Mathematics</option>
                    <option value="Biology ">Biology</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Physics">Physics</option>
                    
                </select>
          </div>
          

          <div class="user-input-box">
            <label for="subject">Select Medium</label>
                <select name="medium" id="medium">
                    <option value="sinhala">Sinhala</option>
                    <option value="english">English</option>
                    <option value="tamil">Tamil</option>
                    
                </select>
          </div>
       
        </div>

        <button type="submit" class="btn"><b>Upload<b></button>
        </div>

       
    </div>
    </div>
</div>
</div>
</div>
</form>
	
            </section>
    @endsection

</body>
</html>