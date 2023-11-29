<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
  <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('css/classMaterial.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    
   
   
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Class Materials</title> 
</head>
<body>
@extends('studentHomeContent')


@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Uploaded Class Materials</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Tutor Name</th>
                    <th>Subject</th>
                    <th>Title</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classMaterials as $classMaterial)
                    <tr>
                        <td>{{ $classMaterial->tutorName }}</td>
                        <td>{{ $classMaterial->subject }}</td>
                        <td>{{ $classMaterial->title }}</td>
                        <td>
                            <a href="{{ url('class-materials.download', $classMaterial->id) }}" class="btn btn-primary">Download</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

<!--<section class="home">
        <div class="text">Dashboard Sidebar</div>
    
    @section('content')
    @foreach ($classMaterials as $classMaterial)
<div class="container1">
        <header>
            <h1>Class Materials</h1>
        </header>
        <ul class="material-list">
            <li><a href="#">Subject: {{ $classMaterial->subject }}</a></li>
            <li><a href="#">Tutor: {{ $classMaterial->tutor->tutorName }}</a></li>
            <li><a href="#">Lecture Note: {{ $classMaterial->lecNote }}</a></li> -->
            
            <!-- Add more class materials here -->
      <!--  </ul>
    </div>
    <hr>
    @endforeach
    @endsection
    </section>-->

</body>
</html>