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
   
    

    <section class="home" style="margin-left:6%;margin-top:10%;">
    <div class="col-sm-8 bg-white rounded-right" style="margin-top:20px; font-size:25px; margin-top:-120px;">
                                <h3 class="mt-4 text-center " style="margin-left:2%; color: #f0db31;">Information</h3>
                                <hr class="badge-primary mt-2 w-30">
                                <div class="row">

                                <div class="col" style="margin-left:5%; margin-top:20px;color: #fff;margin-bottom:5%;">
                                        <p class="font-weight-bold">Name</p>@foreach ($detail as $detail)
                                        <h6 class="text-muted">{{$detail->tutorFullName}}</h6>
                                    
                                    <div class="colum" style="margin-left:500px;margin-top:-60px; color: #fff;">
                                        <p class="font-weight-bold">Subject</p>
                                        <h6 class="text-muted">{{$detail->subject}}</h6>
                                    </div>
                                    </div>
                                    </div>
                                <div class="row" style=" margin-top:-30px;">
                                    <div class="col" style="margin-left:5%;color: #fff;">
                                        <p class="font-weight-bold">Email</p>
                                        <h6 class="text-muted">{{$detail->tutorEmail}}</h6>
                                   
                                    <div class="col-sm-8" style="margin-left:500px;color: #fff;margin-top:-60px">
                                        <p class="font-weight-bold">Phone</p>
                                        <h6 class="text-muted">{{$detail->tutorPhoneNumber}}</h6>
                                    </div>
                                </div> 
                               
                                </div>
                                <div class="row" style=" margin-top:40px;">
                                    <div class="col-sm-8"style="margin-left:5%;color: #fff;">
                                    <p class="font-weight-bold">Qualification</p>
                                        <h6 class="text-muted" >{{$detail->qualification}}</h6>
                                    </div>
                                    @endforeach
                                </div>
                                <hr class="bg-primary">
                                
                            </div>
                    </div>
            </div>
            

        </div>
</session>
       
        <section class="home">
    <div class="container" style="margin-top:450px;  margin-left:6%; max-width: 850px;">
      <h1 class="form-title" style=" margin-bottom:20px;">Class Request</h1>
                
                    <form id="" action="{{ url('/classRequestInput') }}" method="post">
                        @csrf 
                        
                        
        <div class="main-user-info">
          <div class="user-input-box"  style=" margin-bottom:20px;">
            <label for="tutorFullName"> Tutor Name: </label>
            @foreach($tutorFullName as $tutorFullName)   
          <input type="text"
                    id="tutorFullName"
                    name="tutorFullName"
                    placeholder="" value="{{ $tutorFullName->tutorFullName }}" />
                    
                    @endforeach
                   
          </div>
         
          <div class="user-input-box"    style=" margin-bottom:20px; ">
            <label for="tutorSubject">Subject:</label>
            @foreach($subject as $subject) 
            <input type="text"
                    id="tutorSubject"
                    name="tutorSubject"
                    placeholder=""value="{{ $subject->tutorSubject }}"/>
              @endforeach
          </div>

          <div class="user-input-box"    style=" margin-bottom:20px; justify-content: end;">
            <label for="medium">Medium :</label>
            @foreach($medium as $medium) 
           <input type="text"
                    id="medium"
                    name="medium"
                    placeholder=""value="{{ $medium->tutorMedium }}"/>
            @endforeach
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
