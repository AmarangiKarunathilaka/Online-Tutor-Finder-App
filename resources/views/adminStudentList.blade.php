<!DOCTYPE html>
<html lang="en">
<head>

<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">-->



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/tutorDashboard.css') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"/>
    

    <title>Student Table</title>

</head>
<body>
    
    <!--<div class="values">
        <div class="val-box">
            <i class="fas fa-user"></i>
            <div>
                <h3>1234</h3>
                <spam> New students </spam>
            </div>
        </div>
   
        <div class="val-box">
            <i class="fas fa-user"></i>
            <div>
                <h3>1234</h3>
                <spam> New Tutors </spam>
            </div>
        </div>
    </div>-->
    @extends('adminHomeContent')
    @section('content')
    <section class="home">
    <header class="header">
      <div class="header_logo">
        <a href="#"style="color:#fff;  font-weight: bold; font-size:25px;">Student List</a>
      </div>
  
      
  
      
    </header>
    


    <div class="main_body">
        <div class="container">
            
     
        <div class="row d-flex justify-content-center">
                <div class="col-md-11 mt-5 pt-5">
                    <div class="row z-depth-3">
                        <div class="col-sm-4 bg-info rounded-left bg-white" style=" margin-top:-50px;">

                        <section class="attendance">
            <div class="attendance-list" style=" margin-top:-20px; ">
              
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
                        <th scope="col">Accept/Remove</th>
                        <th scope="col">sendEmail</th>
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
                   
                    <td>    <a href="{{url('accept_student',$student->id)}}"><button type="submit" name="button" value="accept" >Accept </button>
                            <a href="{{url('reject_student',$student->id)}}" ><button type="submit" name="button" value="remove">Remove</button>
                    </td>
                    
                    <td>
                    <form action="{{ route('send.email', ['email' => $student->studentEmail]) }}" method="POST">
                        @csrf
                        <button type="submit" name="button" value="accept">Accept Email</button>
                        <button type="submit" name="button" value="remove">Remove Email</button>
                    </form>
                    </td>
                    
                </tr>
                    @endforeach
                </tbody>

                </table>
                        
            </div>
        </div>


        <!--Ramal 2023.12.14 Button 1-->
        <form action="{{ route('generate_pdf_student') }}" method="post" target="_blank">
	        @csrf
                <div>
                    <button class="button1">Download PDF</button>
                </div>
        </form>


    </div>
    </section>
    @endsection

</body>
</html>