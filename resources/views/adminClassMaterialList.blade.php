<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/adminstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/report.css') }}">
    <title>Admin Class Material List</title>
</head>
<body>
    @extends('adminHomeContent')
    @section('content')
    <section class="home">
        <div class="text">Class Materials Management</div>
    


    <div class="row justify-content-center">
        <div class="form-box">
            <div class="container mt-4 ">

                    <table class="table table-success table-striped">
                    
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
                    <td>{{ $classmaterial->file }}</td>
                    <td>{{ $classmaterial->tutor_id }}</td>
                    <td>{{ $classmaterial->status }}</td>
                        <td> <a href="{{url('accept_material',$classmaterial->id)}}"> <button type="button" class="accept">Accept</button></a>
                            <a href="{{url('reject_material',$classmaterial->id)}}" ><button type="button" class="remove">Reject</a></button></td>
                    </tr>
                    
                    @endforeach
                </tbody>

                </table>
                </div>

                <form action="{{ route('view-pdf') }}" method="post" target="_blank">
	            @csrf
                <div>
                    <button type="button" onclick="generateReport()">Generate Report</button>

                </div>
            </form>

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
