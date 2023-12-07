<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{ asset('css/materialContent.css') }}">

      <!----===== Boxicons CSS ===== -->
      <link href="{{asset('https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css')}}" rel='stylesheet'>
    
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css')}}">
</head>
<body>

@extends('studentHomeContent')
@section('content')

<section class="home">
        
  <div class="container">
    

<section class="main">

<section class="material" id="section2">
   <table class="table table-success table-striped">

   @foreach ($classmaterial as $classmaterial)
   <thead>
   <tr>
        <th><b>{{ $classmaterial->subject }}</b></th>
        </tr>
    </thead> 

    <tbody>
        <tr>
        <td>{{ $classmaterial->tutorName }}
        <ul class="list">
            <li class="post"><b>Class Note</b></li>
            <a href="{{url('/download',$classmaterial->file)}}"> {{ $classmaterial->title }} </a>

           <!-- <iframe src = "/filestore/{{ $classmaterial->file }}" > </iframe> -->

            <li class="post"><b>Assignment</b></li>
            <a href="{{url('/download',$classmaterial->file)}}"> {{ $classmaterial->title }} </a>

            <li class="post"><b>Reference</b></li>
           <a href="{{url('/download',$classmaterial->file)}}"> {{ $classmaterial->title }} </a>
        </td>
        </tr>
    </tbody>
    @endforeach
</table>
</session>

</section>
  </div>
  </section>
@endsection