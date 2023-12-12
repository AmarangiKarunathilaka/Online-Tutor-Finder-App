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

            <input type="hidden" name="key" value="1">
<hr class="mt-0 mb-4">
<div class="row">
<div class="col-xl-4">

<div class="card mb-4 mb-xl-0">
    <div class="card-header">Profile Picture</div>
        <div class="card-body text-center">
            <div class="hero">
                
            @foreach ($profile as $profile)
                          
                          <img  src="/profileImage/{{ $profile ->image }}" width='150' height='150' class="img-account-profile rounded-circle mb-2" alt/>
                                 
                          @endforeach
                   

                    <div class="col-xl-6">
                    <lable for="input-file"><b>Upload image:</b></div>
                    <input type="file" name="image" accept="image/jpeg, image/png, image/jpg" id="input-file"></lable>
                    <div class="back" style= " margin-top:40px; margin-bottom:40px;"><a href="#"> <b>Update</b></a></div>
            
            </div>
            <script>
                let profilePic = document.getElementById("profile-pic");
                let inputFile = document.getElementById("input-file");

                inputFile.onechange = function(){
                    profilePic.src=URL.createObjectURL(inputFile.files[0])
                }
            </script>
        </div>
    </div>
</div>



<div class="col-xl-8">
<div class="card mb-4">
<h2 style= " margin-top:20px;">When can you take classes?</h2>
<h6>You can select multiple options</h6>

<body>

<table>
    <thead>
        <tr>
            <th></th>
            @foreach ($days as $day)
                        <th>{{ $day }}</th>
                    @endforeach
             <!--<th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>-->
        </tr>
    </thead>
    <tbody>

    @foreach ($timeSlots as $timeSlot)
                    <tr>
                        <td>{{ $timeSlot }}</td>
                        @foreach ($days as $day)
                            <td class="timetable-cell" data-day="{{ $day }}" data-time-slot="{{ $timeSlot }}"></td>
                        @endforeach
                    </tr>
                @endforeach
        <!--<tr>
            <td>8:00 AM - 10:00 AM</td>
            <td class="slot" data-day="monday" data-time="slot1"></td>
            <td class="slot" data-day="tuesday" data-time="slot1"></td>
            <td class="slot" data-day="wednesday" data-time="slot1"></td>
            <td class="slot" data-day="thursday" data-time="slot1"></td>
            <td class="slot" data-day="friday" data-time="slot1"></td>
            <td class="slot" data-day="Saturday" data-time="slot1"></td>
            <td class="slot" data-day="Sunday" data-time="slot1"></td>
        </tr>
        <tr>
            <td>10:00 AM - 12:00 PM</td>
            <td class="slot" data-day="monday" data-time="slot2"></td>
            <td class="slot" data-day="tuesday" data-time="slot2"></td>
            <td class="slot" data-day="wednesday" data-time="slot2"></td>
            <td class="slot" data-day="thursday" data-time="slot2"></td>
            <td class="slot" data-day="friday" data-time="slot2"></td>
            <td class="slot" data-day="saturday" data-time="slot2"></td>
            <td class="slot" data-day="sunday" data-time="slot2"></td>
        </tr>
        <tr>
            <td>02:00 PM - 04:00 PM</td>
            <td class="slot" data-day="monday" data-time="slot3"></td>
            <td class="slot" data-day="tuesday" data-time="slot3"></td>
            <td class="slot" data-day="wednesday" data-time="slot3"></td>
            <td class="slot" data-day="thursday" data-time="slot3"></td>
            <td class="slot" data-day="friday" data-time="slot3"></td>
            <td class="slot" data-day="saturday" data-time="slot3"></td>
            <td class="slot" data-day="sunday" data-time="slot3"></td>
        </tr>
        <tr>
            <td>04:00 PM - 06:00 PM</td>
            <td class="slot" data-day="monday" data-time="slot4"></td>
            <td class="slot" data-day="tuesday" data-time="slot4"></td>
            <td class="slot" data-day="wednesday" data-time="slot4"></td>
            <td class="slot" data-day="thursday" data-time="slot4"></td>
            <td class="slot" data-day="friday" data-time="slot4"></td>
            <td class="slot" data-day="saturday" data-time="slot4"></td>
            <td class="slot" data-day="sunday" data-time="slot4"></td>
        </tr>-->
    </tbody>
</table>
<div class="back" style= "margin-left:40%; margin-top:40px; margin-bottom:40px;"><a href="#"> <b>Update</b></a></div>
            
</div>
    </div>
            
            
<!--<script>
    document.addEventListener("DOMContentLoaded", function() {
        var slots = document.querySelectorAll('.slot');

        slots.forEach(function(slot) {
            slot.addEventListener('click', function() {
                this.classList.toggle('selected');
            });
        });
    });
</script>-->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <!-- Include this in your HTML template to generate the CSRF token -->


<script>
    $(document).ready(function () {
        $('.timetable-cell').click(function () {
            var day = $(this).data('day');
            var timeSlot = $(this).data('time_slot');
            var csrfToken = $('input[name=csrfmiddlewaretoken]').val();
           
            $.ajax({
                url: '/update-timetable',
                method: 'POST',
                data: { day: day, timeSlot: timeSlot, csrfmiddlewaretoken: csrfToken },
                success: function (response) {
                    if (response.success) {
                        alert('Cell updated successfully!');
                    } else {
                        alert('Failed to update cell.');
                    }
                },
                error: function () {
                    alert('Error updating cell.');
                }
            });
        });
    });
</script>






<div class="container">
<h1 class="form-title">Profile Details</h1>
      <!--<form action="{{ url('/classMaterialInput') }}" method="post"  enctype="multipart/form-data">
            @csrf-->
     
            
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

        </form>
    </div>
    </div>
</div>

            </section>
    @endsection

</body>
</html>