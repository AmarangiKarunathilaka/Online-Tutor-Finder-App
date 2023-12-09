<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/student.css" />
  <link rel="stylesheet" href="css/dashboard.css">

      <!----===== Boxicons CSS ===== -->
      <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>

@extends('adminHomeContent')
@section('content')
<section class="home">
        <div class="text"></div>
  <div class="container">
    

    <section class="main">
      <div class="main-top">
        <h1>Admin Dashboard</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="main-skills">
        <div class="card">
          <i class="fas fa-laptop-code"></i>
          <h3>No of registered students</h3>
          <p>{{ $studentCount }}</p>
          <button>Registered Student List</button>
        </div>
        <div class="card">
          <i class="fab fa-wordpress"></i>
          <h3>No of registered tutors</h3>
          <p>{{ $tutorCount }}</p>
          <button>Registered Tutor List</button>
        </div>
        <div class="card">
          <i class="fas fa-palette"></i>
          <h3>No of scheduled classes</h3>
          <p>Join Over 2 million Students.</p>
          <button>Scheduled Class List</button>
        </div>
        <div class="card">
          <i class="fab fa-app-store-ios"></i>
          <h3>Time Table</h3>
          <p>Join Over 1 million Students.</p>
          <button>Open</button>
        </div>
      </div>

      
    </section>
  </div>
  </section>
    @endsection
</body>
</html></span>