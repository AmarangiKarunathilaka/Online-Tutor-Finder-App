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
   
    
    
    <title>Advertisement Table</title>

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
        <a href="#"style="color:#fff;  font-weight: bold; font-size:25px;">Advertisement List</a>
      </div>
  
      
  
      
    </header>

        
    

        <div class="row justify-content-center">
            <!--Ramal 2023.12.14 Button 3-->
            <form action="{{ route('generate_pdf_advertisement') }}" method="post" target="_blank">
                    @csrf
                        <div>
                            <button>Download PDF</button>
                        </div>
                </form>
                </div>
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
                        <th>Id</th>
                        <th>Tutor Name</th>
                        <th>Email</th>
                        <th>Payment</th>
                        <th>Image</th>
                        <th>description</th>
                        <th>Subject</th>
                        <th>Tutor Id</th>
                        <th>Status Accept</th>
                        <th>Accept/Reject</th>
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
                        <td><a href="{{url('accept_advertisement',$advertisement->id)}}"><button type="button" class="accept">Accept </button>
                        <a href="{{url('reject_advertisement',$advertisement->id)}}" ><button type="button" class="remove">Reject</button></td>
                    </tr>
                    
                    @endforeach
                </tbody>
                    
                </table>


           
             
                </div>
                 
            </div>
            
</br>
</br>

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