<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/tutorDashboard.css') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"/>
    <!-- MDB -->
    <title>Admin class Request List</title>
</head>
<body>
    @extends('adminHomeContent')
    @section('content')
    <section class="home">
    <header class="header">
      <div class="header_logo">
        <a href="#"style="color:#000;  font-weight: bold; font-size:25px; color:#fff;"> Accepted Class Request List </a>
      </div>
  
      
  
      
    </header>


     <!--Ramal 2023.12.14 Button 5-->
     <form action="{{ route('generate_pdf_request') }}" method="post" target="_blank">
                    @csrf
                        <div>
                            <button>Download PDF</button>
                        </div>
                </form>

  
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
                        <th scope="col">Student Name</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Medium</th>
                        <th scope="col">Tutor Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Status</th>
                       
                    </tr>
                </thead>  

                <tbody>
                    
                <tr>
               
                    @foreach ($requests as $request )
                
                    <td>{{ $request->studentName }}</td>
                    <td>{{ $request->subject }}</td>
                    <td>{{ $request->medium }}</td>
                    <td>{{ $request->tutorFullName }}</td>
                    <td>{{ $request->day }}</td>
                    <td>{{ $request->time }}</td>
                    <td>{{ $request->status}}</td>
                   
                    
                    </tr>
                  
                  

                 
                    @endforeach
                </tbody>

                </table>





                </div>
    
                </div>
            </nav>
            </section>
    </section>
    @endsection
    
</body>
</html>
