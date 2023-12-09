<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/student.css" />
  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="css/adminstyle.css">

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
        <i class='bx bxs-user-check'></i>
          <h3>No of registered students</h3>
          <p>{{ $studentCount }}</p>
            </br>
          <table>
            <tr>
                <td>
                    <a href="/adminStudentList"> <button>Registered Student List</button></a>
                </td>
                <td>
                    <a href="/adminStudentList"> <button>Accepted Student List</button></a>
                </td>
            </tr>
          </table>
        </div>

        <div class="card">
        <i class='bx bxs-user-check'></i>
          <h3>No of registered tutors</h3>
          <p>{{ $tutorCount }}</p>
          </br>
          <table>
            <tr>
                <td>
                    <a href="/adminTutorList"> <button>Registered Tutor List</button></a> 
                </td>
                <td>
                    <a href="/adminStudentList"> <button>Accepted Tutor List</button></a>
                </td>
            </tr>
          </table>
          
        </div>

        <div class="card">
        <i class='bx bxs-add-to-queue'></i>
          <h3>No of scheduled classes</h3>
          <p>0</p>
          </br>
          <table>
            <tr>
                <td>
                    <a href="/adminTutorList"> <button>All Class Request List</button></a> 
                </td>
                <td>
                    <a href="/adminStudentList"> <button>Accepted Class Request List</button></a>
                </td>
            </tr>
          </table>
        </div>
        <div class="card">
        <i class='bx bx-table' ></i>
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