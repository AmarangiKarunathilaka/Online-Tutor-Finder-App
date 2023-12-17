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
                    <a class="click-scroll" href="#section_1"> <button>Accepted Tutor List</button></a>
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
          <a href="/admintimetable" class="button" style="padding:5px; margin-left:4%; margin-top:10%;"><button>Open</button></a>
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
                        <th scope="col">Id</th>
                        <th scope="col">Tutor Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Payment</th>
                        <th scope="col">Image</th>
                        <th scope="col">description</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Tutor Id</th>
                        <th scope="col">Status Accept</th>
                       
                    </tr>
                </thead>  

                <tbody>
                    @foreach ($advertisements as $advertisement)
                
                    <tr>
                    <th scope="row">{{ $advertisement->id }}</th>
                    <td>{{ $advertisement->tutorName }}</td>
                    <td>{{ $advertisement->email }}</td>
                    <td>{{ $advertisement->payment }}</td>
                    <td><img src="/uploads/{{ $advertisement ->photo }}"  width='50' height='50' class="img img-responsive"/></td>
                    <td>{{ $advertisement->description }}</td>
                    <td>{{ $advertisement->subject }}</td>
                    <td>{{ $advertisement->tutor_id }}</td>
                    <td>{{ $advertisement->status }}</td>
                        
                    </tr>
                    
                    @endforeach
                </tbody>
                    
                </table>

                <!--
                <form action="{{ route('generate_pdf_student') }}" method="post" target="_blank">
	                 @csrf
                    <div>
                       <button style="background-color: #f7e348; padding: 15px; margin: 15px 20px; border-radius: 8px;" type="submit" class="">Download Students PDF</button>
                    </div>
                </form>



            
            <form action="{{ route('generate_pdf_tutor') }}" method="post" target="_blank">
	            @csrf
                <div>
                    <button style="background-color: #f7e348;  padding: 15px; margin: 0px 20px; border-radius: 8px;" type="submit" class="">Download Tutors PDF</button>
                </div>
            </form>
            -->

            
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