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
                        <th scope="col">Accept/Remove</th>
                    </tr>
                </thead>  

                <tbody>
                  @foreach ($classmaterial as $item)
                
                    <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->tutorName }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->subject }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->lecNote }}</td>
                    <td>{{ $item->file }}</td>
                    <td>{{ $item->tutor_id }}</td>
                        <td><button type="button" class="accept">Accept </button>
                            <button type="button" class="remove">Reject</button></td>
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
