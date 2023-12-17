<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{ asset('css/student.css') }}">
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

      <!----===== Boxicons CSS ===== -->
      <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>

@extends('studentHomeContent')
@section('content')
<section class="home">
        <div class="text"></div>
  <div class="container">
    

    <section class="main">
      
     
       
        
        
      

      <section class="main-course">
        <h2>Class Materials</h2>
        <div class="course-box">
         

          

          <div class="course">
            <div class="box">
              <h3>Combined Mathematics</h3>
              
              <a href="/materialContent/maths"> <button style="background: linear-gradient(to left, #525b5e 0%, #73691b 100%);">continue</button></a>
              <i class="fas fa-book"></i>
            </div>

            <div class="box">
              <h3>Biology</h3>
              
              <a href="/materialContent/biology"> <button style="background: linear-gradient(to left, #525b5e 0%, #73691b 100%);">continue</button></a>
              <i class="fas fa-book"></i>
            </div>

            <div class="box">
              <h3>Chemistry</h3>
              
              <a href="/materialContent/chemistry"> <button style="background: linear-gradient(to left, #525b5e 0%, #73691b 100%);">continue</button></a>
              <i class="fas fa-book"></i>
            </div>

            <div class="box">
              <h3>Physics</h3>
              
              <a href="/materialContent/physics"> <button style="background: linear-gradient(to left, #525b5e 0%, #73691b 100%);">continue</button></a>
              <i class="fas fa-book"></i>
            </div>

          </div>
          
        </div>
      </section>
    </section>
  </div>
  </section>

   
    @endsection
</body>
</html></span>