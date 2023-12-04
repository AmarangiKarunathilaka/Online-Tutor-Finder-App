
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    
  <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('css/classMaterial.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    
   
   
    
    
    
    <title>Class Materials</title> 
</head>
<body>
@extends('studentHomeContent')




@section('content')
    <div class="container">
        <h2>Uploaded Class Materials</h2>

        <section class="home">
        <div class="text">Dashboard Sidebar</div>
    
    @section('content')
   
<div class="container1">
        <header>
    
        </header>
        <ul class="material-list">
            
           
            
         
            @foreach ($classmaterial as $classmaterial)
            <li>Subject: 
                <li>{{ $classmaterial->tutorName }}</li></li>
            <li>Tutor: 
            <li>{{ $classmaterial->subject }}</li></li>
            <li>Class Materials
            <li>{{ $classmaterial->title }}</li>
            <li>{{ $classmaterial->lecNote }}</li>
            <li>{{ $classmaterial->file }}</li></li>

            @endforeach
            </ul>
    </div>
  
   
    </div>
    </div>
    </section>
    @endsection
   




</body>
</html>



