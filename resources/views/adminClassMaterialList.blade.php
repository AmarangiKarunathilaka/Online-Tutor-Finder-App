<!DOCTYPE html>
<html lang="en">
<head>
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/tutorDashboard.css') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"/>
    <title>Admin Class Material List</title>
</head>
<body>
    @extends('adminHomeContent')
    @section('content')
    <section class="home">
    <header class="header">
      <div class="header_logo">
        <a href="#"style="color:#fff;  font-weight: bold; font-size:25px;">Class Material List</a>
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
                    
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">TutorName</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Title</th>
                        <th scope="col">Catagory</th>
                        <th scope="col">File</th>
                        <th scope="col">Tutor Id</th>
                        <th scope="col">Status Accept</th>
                        <th scope="col">Accept/Remove</th>
                    </tr>
                </thead>  

                <tbody>
                  @foreach ($classmaterial as $classmaterial)
                
                    <tr>
                    <th scope="row">{{ $classmaterial->id }}</th>
                    <td>{{ $classmaterial->tutorName }}</td>
                    <td>{{ $classmaterial->email }}</td>
                    <td>{{ $classmaterial->subject }}</td>
                    <td>{{ $classmaterial->title }}</td>
                    <td>{{ $classmaterial->lecNote }}</td>
                    <td> <a href="{{url('/view',$classmaterial->id)}}" >View </a>
                    <td>{{ $classmaterial->tutor_id }}</td>
                    <td>{{ $classmaterial->status }}</td>
                        <td> <a href="{{url('accept_material',$classmaterial->id)}}"> <button type="button" class="accept">Accept</button></a>
                            <a href="{{url('reject_material',$classmaterial->id)}}" ><button type="button" class="remove">Reject</a></button></td>
                    </tr>
                    @endforeach
                    
                </tbody>

                </table>
                </div>

        



        </nav>
        </header>
    </section>
    @endsection

    <script type="text/javascript">
        var app = angular.module('Leave', []);
        app.controller('myCtrl', function ($scope) {
            $scope.ExpandNotifications = function () {
                $(".notification").css("min-width", "300px");
                $scope.hello = "how are you";
            };
        });
    </script>
</body>
</html>
