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

   
   <thead>
   <tr>
        <th><b>Biology</b></th>
        </tr>
  </thead> 

  <tbody>
      
    @php
      $lastTutorName = null;
    @endphp

    @foreach ($note as $note)
      @if($lastTutorName !== $note->tutorName)
        <tr><td>Tutor Name: {{ $note->tutorName }} </td></tr>
        <tr><td>
        <ul class="list">
            <li class="post"><b>Class Note</b></li>
            <li><a href="{{url('/download',$note->file)}}"> {{ $note->title }} </a></li>

          @php
            $lastTutorName = $note->tutorName
          @endphp
      
      @else
        <li><a href="{{url('/download',$note->file)}}"> {{ $note->title }} </a></li>
      @endif

      @endforeach
      </td></tr>
      
  
        <tr><td>
        <ul class="list">
            <li class="post"><b>Assignment</b></li>
            @foreach ($ass as $ass)
            <li><a href="{{url('/download',$ass->file)}}"> {{ $ass->title }} </a></li>

      @endforeach
      </td></tr> 


     
        <tr><td>
        <ul class="list">
            <li class="post"><b>Reference</b></li>
            @foreach ($ref as $ref)
            <li><a href="{{url('/download',$ref->file)}}"> {{ $ref->title }} </a></li>

      @endforeach
      </td></tr> 

      
    </tbody>
</table>
</session>

</section>
  </div>
  </section>
@endsection