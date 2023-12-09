<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>edit Tutor Profile</title>
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

<hr class="mt-0 mb-4">
<div class="row">
<div class="col-xl-4">

<div class="card mb-4 mb-xl-0">
    <div class="card-header">Profile Picture</div>
        <div class="card-body text-center">
            <div class="hero">
                
                    
                    <img class="img-account-profile rounded-circle mb-2" src="images/f.png" alt>

                    <div class="col-xl-6">
                    <lable for="input-file"><b>Upload image:</b></div>
                    <input type="file" accept="image/jpeg, image/png, image/jpg" id="input-file">
                    <div class="back" ><a href="/adminClassMaterialList"> <b>Upload</b></a></div></lable>
            
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
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
        </tr>
    </thead>
    <tbody>
        <tr>
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
        </tr>
    </tbody>
</table>
<div class="back" style= "margin-left:40%; margin-top:40px; margin-bottom:40px;"><a href="/adminClassMaterialList"> <b>Update</b></a></div>
            
</div>
    </div>
    </form>
            
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var slots = document.querySelectorAll('.slot');

        slots.forEach(function(slot) {
            slot.addEventListener('click', function() {
                this.classList.toggle('selected');
            });
        });
    });
</script>





<div class="container">
<h1 class="form-title">Profile Details</h1>
      <form action="{{ url('/classMaterialInput') }}" method="post"  enctype="multipart/form-data">
            @csrf
     
            
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="tutorName">Name</label>
            <input type="text"
                    id="tutorName"
                    name="tutorName"
                    placeholder="Enter Full Name"/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Enter Email"/>
          </div>

          <div class="user-input-box">
            <label for="num">Contact No.</label>
            <input type="text"
                    id="num"
                    name="num"
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