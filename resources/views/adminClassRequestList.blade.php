<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/adminstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/report.css') }}">
    <title>Admin class Request List</title>
</head>
<body>
    @extends('adminHomeContent')
    @section('content')
    <section class="home">
        <div class="text">Class Request Management</div>
    


    <div class="row justify-content-center">
        <div class="form-box">
            <div class="container mt-4 ">

                    <table class="table table-success table-striped">
                    
                <thead>
                <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tutor Id</th>
                        <th scope="col">Tutor Name</th>
                        <th scope="col">Student Id</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Medium</th>
                        <th scope="col">Status</th>
                        <th scope="col">Accept/Reject</th>
                    </tr>
                </thead>  

                <tbody>
                    @foreach ($requests as $request)
                
                    <tr>
                    <th scope="row">{{$request->id}}</th>
                    <td>{{ $request->tutor_id }}</td>
                    <td>{{ $request->tutor_name }}</td>
                    <td>{{ $request->student_id }}</td>
                    <td>{{ $request->student_name }}</td>
                    <td>{{ $request->date }}</td>
                    <td>{{ $request->time }}</td>
                    <td>{{ $request->subject }}</td>
                    <td>{{ $request->medium }}</td>
                    <td>{{ $request->status}}</td>
                    
                    <td>
                        <a href="{{url('acceptRequest',$request->id)}}"><button type="button" class="accept">Accept </button>
                        <a href="{{url('rejectRequest',$request->id)}}" ><button type="button" class="remove">Reject</button>
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
    
</body>
</html>
