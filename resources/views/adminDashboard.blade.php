<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
 

  <link rel="stylesheet" href="{{ asset('css/tutorDashboard.css') }}">

  <link rel="stylesheet" href="{{ asset('css/adminDashboard.css') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"/>

 
    
 
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>

@extends('adminHomeContent')
@section('content')
<section class="home">
<header class="header">
      <div class="header_logo">
        <a href="#"style="color:#fff;  font-weight: bold; font-size:25px;">Admin Dashboard</a>
      </div>   
    </header>
    <section class="main">
     
      <div class="main-skills" style="margin-top: -10%;">
        <div class="card">
        <i class='bx bxs-user-check'></i>
          <h3>No of registered students</h3>
          <p>{{ $studentCount }}</p>
            </br>
          <table>
            <tr>
                <td>
                    <a href="/adminStudentList"> <button>Registered Student List</button></a>
                </td>
                <td>
                <a class="click-scroll" href="#section_1"> <button>Accepted Student List</button></a>
                </td>
            </tr>
          </table>
        </div>

        <div class="card">
        <i class='bx bxs-user-check'></i>
          <h3>No of registered tutors</h3>
          <p>{{ $tutorCount }}</p>
          </br>
          <table>
            <tr>
                <td>
                    <a href="/adminTutorList"> <button>Registered Tutor List</button></a> 
                </td>
                <td>
                    <a class="click-scroll" href="#section_2"> <button>Accepted Tutor List</button></a>
                </td>
            </tr>
          </table>
          
        </div>

        <div class="card">
        <i class='bx bxs-add-to-queue'></i>
          <h3>No of Requested classes</h3>
          <p>0</p>
          </br>
          <table>
            <tr>
                <td>
                    <a href="/adminTutorList"> <button>All Class Request List</button></a> 
                </td>
                <td>
                    <a href="/adminStudentList"> <button>Accepted Class Request List</button></a>
                </td>
            </tr>
          </table>
        </div>

        <div class="card">
        <i class='bx bx-table' ></i>
          <h3>Time Table</h3>
          <p>Join Over 1 million Students.</p>
          <a href="/admintimetable" class="button" style="padding:5px; margin-left:35%; margin-top:10%;"><button>Open</button></a>
        </div>
      </div>

    </section>
      <div class="chart" style="margin-top: -10%; margin-left: 20%;">
      <!-- Add this code at the end of your Blade file -->
      <canvas id="pieChart" width="300" height="300"></canvas>
      </div>

      <section class="main-course" id="section_1">
    
      <div class="main_body" >
        <div class="container">
            
     
        <div class="row d-flex justify-content-center">
                <div class="col-md-11 mt-5 pt-5">
                    <div class="row z-depth-3">
                        <div class="col-sm-4 bg-info rounded-left bg-white" style=" margin-top:-50px;">

                        <section class="attendance">
            <div class="attendance-list" style=" margin-top:-20px; ">
            <h2>Accepted Student List</h2>
            <table class="table" style=" border: 1px solid #110d0d;"> 
            <thead style="width:100%; border: 1px solid #6b6b49; ">
                

                    <tr>
                    <th scope="col">#</th>
                        <th scope="col">studentFullName</th>
                        <th scope="col">birthday</th>
                        <th scope="col">address</th>
                        <th scope="col">studentPhoneNumber</th>
                        <th scope="col">studentEmail</th>
                        <th scope="col">status</th>
                        
                       
                    </tr>
                </thead>  

                <tbody>
                @foreach ($students as $student)
                
                    <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->studentFullName }}</td>
                    <td>{{ $student->birthday }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->studentPhoneNumber }}</td>
                    <td>{{ $student->studentEmail }}</td>
                    <td>{{ $student->status }}</td>
                   
                   
                        
                    </tr>
                    
                    @endforeach
                </tbody>
                    
                </table>
            </div>
            </section>

                        </div>
                    </div>
                </div>
        </div>
        </div>
       </div>

        </section>


        <section class="main-course" id="section_2">
    
      <div class="main_body" style=" margin-top:-10%; ">
        <div class="container">
            
     
        <div class="row d-flex justify-content-center" >
                <div class="col-md-11 mt-5 pt-5">
                    <div class="row z-depth-3">
                        <div class="col-sm-4 bg-info rounded-left bg-white" style=" margin-top:-50px;">

                        <section class="attendance">
            <div class="attendance-list" >
            <h2>Accepted Tutor List</h2>
            <table class="table" style=" border: 1px solid #110d0d;"> 
            <thead style="width:100%; border: 1px solid #6b6b49; ">
                

                    
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">tutorFullName</th>
                        <th scope="col">tutorPhoneNumber</th>
                        <th scope="col">qualification</th>
                        <th scope="col">tutorEmail</th>
                       
                        <th scope="col">status</th>
                        
                       
                    </tr>
                </thead>  

                <tbody>
                @foreach ($tutors as $tutor)
                
                    <tr>
                    <th scope="row">{{ $tutor->id }}</th>
                        <td>{{ $tutor->tutorFullName }}</td>
                        <td>{{ $tutor->tutorPhoneNumber }}</td>
                        <td>{{ $tutor->qualification }}</td>
                        <td>{{ $tutor->tutorEmail }}</td>
                       
                        <td>{{ $tutor ->status }}</td>
                   
                   
                        
                    </tr>
                    
                    @endforeach
                </tbody>
                    
                </table>
            </div>
            </section>

                        </div>
                    </div>
                </div>
        </div>
        </div>
       </div>

        </section>





    </section>
  </div>

  

<script>
    // Get the counts from Blade variables
    var tutorCount = {{ $tutorCount }};
    var studentCount = {{ $studentCount }};

    // Get the canvas element
    var ctx = document.getElementById('pieChart').getContext('2d');

    // Create the pie chart
    var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Tutors', 'Students'],
        datasets: [{
            data: [tutorCount, studentCount],
            backgroundColor: ['#3f0c0c', 'rgb(255, 0, 0)'],
        }]
    },
    options: {
        responsive: false, // Disable responsiveness
        maintainAspectRatio: false, // Allow the chart to change aspect ratio
        // Explicitly set width and height
        width: 300,
        height: 300,
    }
});

</script>


  </section>
    @endsection

  

    <script src="js/click-scroll.js"></script>
</body>
</html></span>