<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TIME TABLE</title>
    
    <link rel="stylesheet" href="{{ asset('css/tutorDashboard.css') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"/>
    <!-- MDB -->
  
</head>
  <body class="be-light">
  @extends('adminHomeContent')
@section('content')
<section class="home">
    <header class="header">
      <div class="header_logo">
        <a href="#"style="color:#fff;  font-weight: bold; font-size:25px;">Class Time Table</a>
      </div>
  
      
  
      
    </header>
  
    <!-- Mian Body Section -->

    <div class="main_body">
        <div class="container">
            
     
        <div class="row d-flex justify-content-center">
                <div class="col-md-11 mt-5 pt-5">
                    <div class="row z-depth-3">
                        <div class="col-sm-4 bg-info rounded-left bg-white" style=" margin-top:-50px;">

                        <section class="attendance">
            <div class="attendance-list" style=" margin-top:-20px; ">
              
    <table class="table" style=" border: 1px solid #110d0d;"> 
    <thead style="width:100%; border: 1px solid #110d0d; ">
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