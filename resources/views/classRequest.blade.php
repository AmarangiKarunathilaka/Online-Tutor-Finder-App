<!DOCTYPE html>
<html lang="en">
<head>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('css/editTutorProfile.css') }}">
    
    <title>Class Request Form</title>
</head>
<body>

    
   
    @extends('studentHomeContent')
    @section('content')
   
    <section class="home">
   
    <div class="container" style="margin-top:6%;  margin-left:6%; max-width: 850px;">
      <h1 class="form-title" style=" margin-bottom:20px;">Class Request</h1>
                
                    <form id="" action="{{ url('/classRequestInput') }}" method="post">
                        @csrf 
                        
           @foreach($tutorFullName as $tutorFullName)                 
        <div class="main-user-info">
          <div class="user-input-box"  style=" margin-bottom:20px;">
            <label for="tutorName"> Tutor Name: </label>
           
            <input type="text"
                    id="tutorName"
                    name="tutorFullName"
                    placeholder="" value="{{ $tutorFullName->tutorFullName }}"/>
                    
                    @endforeach
                   
          </div>

          <div class="user-input-box"    style=" margin-bottom:20px; ">
            <label for="subject">Subject:</label>
            <input type="subject"
                    id="subject"
                    name="subject"
                    placeholder="subject"/>
          </div>

          <div class="user-input-box"    style=" margin-bottom:20px; justify-content: end;">
            <label for="medium">Medium :</label>
            <input type="medium"
                    id="medium"
                    name="medium"
                    placeholder="medium"/>
          </div>
                
         
          <div class="user-input-box"    style=" margin-bottom:20px;">
            <label for="day">Select Day:</label>
                <select name="day" id="day">
                    <option value="discription">Day</option>
                    @foreach($days as $day)
                <option value="{{ $day }}">{{ $day }}</option>
            @endforeach
                    
                    
                </select>
          </div>

          <div class="user-input-box"    style=" margin-left:200px; margin-bottom:20px;">
            <label for="time">Select Time:</label>
                <select name="time" id="time">
                <option value="discription">Time Slot</option>
                @foreach($timeSlots as $timeSlot)
                <option value="{{ $timeSlot }}">{{ $timeSlot }}</option>
            @endforeach
            
                    
                </select>
          </div>
                
                           
                        
          <div class="form-submit-btn" >
          <button type="submit" class="btn"  style="width:200px; margin-left:130%; margin-top:15%;"><b>Send Request</b></button>
         </div>
      
        </form>
    </div>
    @endsection
    </section>
  </body>
</html>
