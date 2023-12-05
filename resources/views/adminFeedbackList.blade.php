<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/adminstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/report.css') }}">
    <title>Admin Feedback List</title>
</head>
<body>
    @extends('adminHomeContent')
    @section('content')
    <section class="home">
        <div class="text">Feedback Management</div>
    


    <div class="row justify-content-center">
        <div class="form-box">
            <div class="container mt-4 ">

                    <table class="table table-success table-striped">
                    
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Message</th>
                        <th scope="col">Student Id</th>
                        <th scope="col">Accept/Reject</th>
                    </tr>
                </thead>  

                <tbody>
                    @foreach ($feedback as $item)
                
                    <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->rating }}</td>
                    <td>{{ $item->message }}</td>
                    <td>{{ $item->student_id }}</td>
                    <td>
                        <form method="POST" action="{{ route('admin.feedback.accept', $item->id) }}">
                            @csrf
                            <button type="submit" class="accept">Accept</button>
                        </form>
                        <form method="POST" action="{{ route('admin.feedback.reject', $item->id) }}">
                            @csrf
                            <button type="submit" class="remove">Reject</button>
                        </form>
                    </td>
                    </tr>
                    
                    @endforeach
                </tbody>

                </table>
                </div>
            </nav>
        </header>
    </section>
    @endsection

    <!-- <script type="text/javascript">
        var app = angular.module('Leave', []);
        app.controller('myCtrl', function ($scope) {
            $scope.ExpandNotifications = function () {
                $(".notification").css("min-width", "300px");
                $scope.hello = "how are you";
            };
        });
    </script> -->
</body>
</html>
