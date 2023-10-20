<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/classMaterial.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Class Materials</title> 
</head>
<body>
@extends('studentHomeContent')
    @section('content')
<div class="container1">
        <header>
            <h1>Class Materials</h1>
        </header>
        <ul class="material-list">
            <li><a href="#">Mathematics - Lecture Notes</a></li>
            <li><a href="#">Science - Homework Assignment 1</a></li>
            <li><a href="#">English - Reading Materials</a></li>
            <li><a href="#">History - Chapter 5 Slides</a></li>
            <!-- Add more class materials here -->
        </ul>
    </div>
@endsection
</body>
</html>