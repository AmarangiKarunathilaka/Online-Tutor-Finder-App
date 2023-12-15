
<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
  <html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Web UI Design | By Code Info</title>
    <link rel="stylesheet" href="css/tutorDashboard.css">
    <!-- Font Awesome Cdn Link -->
   
    <!-- Font Awesome -->
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"/>
    <!-- MDB -->
  
  
</head>
 
  <body class="be-light">

 
  
  @extends('tutorHomeContent')
@section('content')


<section class="home">
    <header class="header">
      <div class="header_logo">
        <a href="#" style="color:#000;  font-weight: bold; font-size:22px;">Dashboard</a>
      </div>
  
      
  
      
    </header>
  
    <!-- Mian Body Section -->
    
    <div class="main_body">
        <div class="container">
            
     
        <div class="row d-flex justify-content-center">
                <div class="col-md-11 mt-5 pt-5">
                    <div class="row z-depth-3">
                        <div class="col-sm-4 bg-info rounded-left bg-white">
                            <div class="card-block text-center bg-white" style=" margin-buttom:10px;">
                                
                                <div class="profile-card" style="margin-left:10%; width:150%; margin-top:-40px; ">
                                    <div class="image" style=" height: 150px;">
                                    @if(isset($profile) && count($profile)>0)            
                             @foreach ($profile as $profile)
                          
                              <img  src="/profileImage/{{ $profile ->image }}" style="width:170; height:170; border-radius:50%;margin-left:-6%;margin-top:-2%;" alt/>
                                     
                              @endforeach  
                                    </div>
                                    <div class="data">
                                        
                                           
                                        @else
                                  <h1 style="color:#000;  font-weight: bold; margin-top:20px;"> Please Edit Your Profile</h1>
                                @endif
                                    </div>
                                    
                                    <div class="buttons" style="margin-left:1%;">
                                        <a href="/editTutorProfile" class="btn" >Edit</a>
                                        <input type="checkbox" id="check">
                                       

                                   
                                      </div>
                                
                                
                                        
                                       
                                    </div>
                                
                               
                                
                            </div>
                        </div>
                            <div class="col-sm-8 bg-white rounded-right" style="margin-left:40%; font-size:25px; margin-top:-120px;">
                                <h3 class="mt-4 text-center " style="margin-left:40%;">Information</h3>
                                <hr class="badge-primary mt-2 w-30">
                                <div class="row">

                                <div class="col-sm-8" style="margin-left:20%;">
                                        <p class="font-weight-bold">Name</p>@foreach ($detail as $detail)
                                        <h6 class="text-muted">{{$detail->tutorFullName}}</h6>
                                    </div>
                                    <div class="col-sm-6" style="margin-left:95%;">
                                        <p class="font-weight-bold">Subject</p>
                                        <h6 class="text-muted">{{$detail->subject}}</h6>
                                    </div>
                                    </div>
                                <div class="row">
                                    <div class="col-sm-8" style="margin-left:20%;">
                                        <p class="font-weight-bold">Email</p>
                                        <h6 class="text-muted">{{$detail->tutorEmail}}</h6>
                                    </div>
                                    <div class="col-sm-6" style="margin-left:45%;">
                                        <p class="font-weight-bold">Phone</p>
                                        <h6 class="text-muted">{{$detail->tutorPhoneNumber}}</h6>
                                    </div>
                                </div> 
                               
                                <hr class="bg-primary">
                                <div class="row">
                                    <div class="col-sm-8"style="margin-left:20%;">
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

       
          <section class="attendance">
            <div class="attendance-list">
              <h1 style="color:#000;  font-weight: bold; font-size:30px;">class Request List</h1>
              <table class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>subject</th>
                    <th>Date</th>
                    <th>Join Time</th>
                    <th>Logout Time</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>Sam David</td>
                    <td>Design</td>
                    <td>03-24-22</td>
                    <td>8:00AM</td>
                    <td>3:00PM</td>
                    <td><button>View</button></td>
                  </tr>
                  <tr class="active">
                    <td>02</td>
                    <td>Balbina Kherr</td>
                    <td>Coding</td>
                    <td>03-24-22</td>
                    <td>9:00AM</td>
                    <td>4:00PM</td>
                    <td><button>View</button></td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>Badan John</td>
                    <td>testing</td>
                    <td>03-24-22</td>
                    <td>8:00AM</td>
                    <td>3:00PM</td>
                    <td><button>View</button></td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>Sara David</td>
                    <td>Design</td>
                    <td>03-24-22</td>
                    <td>8:00AM</td>
                    <td>3:00PM</td>
                    <td><button>View</button></td>
                  </tr>
                   <tr >
                    <td>05</td>
                    <td>Salina</td>
                    <td>Coding</td>
                    <td>03-24-22</td>
                    <td>9:00AM</td>
                    <td>4:00PM</td>
                    <td><button>View</button></td>
                  </tr>
                  <tr >
                    <td>06</td>
                    <td>Tara Smith</td>
                    <td>Testing</td>
                    <td>03-24-22</td>
                    <td>9:00AM</td>
                    <td>4:00PM</td>
                    <td><button>View</button></td>
                  </tr> 
                </tbody>
              </table>
            </div>
        
       
        
    
    <section class="attendance">
            <div class="attendance-list">
              <h1 style="color:#000;  font-weight: bold; font-size:30px;">class Time table</h1>
    <table class="table" style=" border: 1px solid #110d0d;"> 
    <thead style="width:100%; border: 1px solid #110d0d;">
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
            
          <td class="slot" data-day="monday" data-time="slot1">@foreach ($time5 as $time5)<li>{{$time5->tutorFullName}}-{{$time5->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="tuesday" data-time="slot1">@foreach ($time9 as $time9)<li>{{$time9->tutorFullName}}-{{$time9->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="wednesday" data-time="slot1">@foreach ($time13 as $time13)<li>{{$time13->tutorFullName}}-{{$time13->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="thursday" data-time="slot1">@foreach ($time17 as $time17)<li>{{$time17->tutorFullName}}-{{$time17->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="friday" data-time="slot1">@foreach ($time21 as $time21)<li>{{$time21->tutorFullName}}-{{$time21->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="saturday" data-time="slot1">@foreach ($time25 as $time25)<li>{{$time25->tutorFullName}}-{{$time25->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="Sunday" data-time="slot1">@foreach ($time1 as $time1) <li>{{$time1->tutorFullName}}-{{$time1->tutorSubject}}</li>
          @endforeach</td>
        </tr>
        <tr>



            <td>10:00 AM - 12:00 PM</td>

          <td class="slot" data-day="monday" data-time="slot2">@foreach ($time6 as $time6)<li>{{$time6->tutorFullName}}-{{$time6->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="tuesday" data-time="slot2">@foreach ($time10 as $time10)<li>{{$time10->tutorFullName}}-{{$time10->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="wednesday" data-time="slot2">@foreach ($time14 as $time14)<li>{{$time14->tutorFullName}}-{{$time14->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="thursday" data-time="slot2">@foreach ($time18 as $time18)<li>{{$time18->tutorFullName}}-{{$time18->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="friday" data-time="slot2">@foreach ($time22 as $time22)<li>{{$time22->tutorFullName}}-{{$time22->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="saturday" data-time="slot2">@foreach ($time26 as $time26)<li>{{$time26->tutorFullName}}-{{$time26->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="sunday" data-time="slot2">@foreach ($time2 as $time2)<li>{{$time2->tutorFullName}}-{{$time2->tutorSubject}}</li>
          @endforeach</td>
        </tr>
        <tr>



            <td>02:00 PM - 04:00 PM</td>

          <td class="slot" data-day="monday" data-time="slot3">@foreach ($time7 as $time7)<li>{{$time7->tutorFullName}}-{{$time7->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="tuesday" data-time="slot3">@foreach ($time11 as $time11)<li>{{$time11->tutorFullName}}-{{$time11->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="wednesday" data-time="slot3">@foreach ($time15 as $time15)<li>{{$time15->tutorFullName}}-{{$time15->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="thursday" data-time="slot3">@foreach ($time19 as $time19)<li>{{$time19->tutorFullName}}-{{$time19->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="friday" data-time="slot3">@foreach ($time23 as $time23)<li>{{$time23->tutorFullName}}-{{$time23->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="saturday" data-time="slot3">@foreach ($time27 as $time27)<li>{{$time27->tutorFullName}}-{{$time27->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="sunday" data-time="slot3">@foreach ($time3 as $time3)<li>{{$time3->tutorFullName}}-{{$time3->tutorSubject}}</li>
          @endforeach</td>
        </tr>
        <tr>



            <td>04:00 PM - 06:00 PM</td>

          <td class="slot" data-day="monday" data-time="slot4">@foreach ($time8 as $time8)<li>{{$time8->tutorFullName}}-{{$time8->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="tuesday" data-time="slot4">@foreach ($time12 as $time12)<li>{{$time12->tutorFullName}}-{{$time12->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="wednesday" data-time="slot4">@foreach ($time16 as $time16)<li>{{$time16->tutorFullName}}-{{$time16->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="thursday" data-time="slot4">@foreach ($time20 as $time20)<li>{{$time20->tutorFullName}}-{{$time20->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="friday" data-time="slot4">@foreach ($time24 as $time24)<li>{{$time24->tutorFullName}}-{{$time24->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="saturday" data-time="slot4">@foreach ($time28 as $time28)<li>{{$time28->tutorFullName}}-{{$time28->tutorSubject}}</li>
          @endforeach</td>

          <td class="slot" data-day="sunday" data-time="slot4">@foreach ($time4 as $time4)<li>{{$time4->tutorFullName}}-{{$time4->tutorSubject}}</li>
          @endforeach</td>
        </tr>


    </tbody>
</table>

</section>
        </section>
        </section>
</div>
    

</div>
      </section>
    
    
      @endsection

      
     
      
      </body>
    
  </html>
  </span>

  