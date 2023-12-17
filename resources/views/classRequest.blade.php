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
    <div class="container" style=" margin-left:6%; max-width: 850px;">
      <h1 class="form-title" style=" margin-bottom:20px;">Class Request</h1>
                
                    <form id="" action="{{ url('/classRequestInput') }}" method="post" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="key" value="{{ $advertisement->tutor_id }}">         
                        
        <div class="main-user-info">
        <div class="user-input-box"  style=" margin-bottom:20px;">
            <label for="tutorFullName"> Student Name: </label>
           
          <input type="text"
                    id="tutorFullName"
                    name="studentName"
                    placeholder="" value="{{$studentName->studentFullName}}" />
                     
                   
                   
          </div>
          <div class="user-input-box"  style=" margin-bottom:20px;">
            <label for="tutorFullName"> Tutor Name: </label>
             
          <input type="text"
                    id="tutorName"
                    name="tutorName"
                    placeholder="" value="{{$advertisement->tutorName}}" />
                    
                   
                   
          </div>
         
          <div class="user-input-box"    style=" margin-bottom:20px; ">
            <label for="tutorSubject">Subject:</label>
            
            <input type="text"
                    id="tutorSubject"
                    name="subject"
                    placeholder=""value="{{ $advertisement->subject }}"/>
              
          </div>

          <div class="user-input-box"    style=" margin-bottom:20px; justify-content: end;">
            <label for="medium">Medium :</label>
           
           <input type="text"
                    id="medium"
                    name="medium"
                    placeholder=""value="{{ $advertisement->medium }}"/>
            
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

          <div class="user-input-box"    style=" margin-left:20px; margin-bottom:20px;">
            <label for="time">Select Time:</label>
                <select name="time" id="time">
                <option value="discription">Time Slot</option>
                @foreach($timeSlots as $timeSlot)
                <option value="{{ $timeSlot }}">{{ $timeSlot }}</option>
                @endforeach
            
                    
                </select>
          </div>
                
                           
                        
          <div class="form-submit-btn" >
          <button type="submit" class="btn"  style="width:200px; margin-top:15%;margin-left:250px;"><b>Send Request</b></button>
         </div>
      
        </form>
    </div>
    @endsection
    </section>
  </body>
</html>
