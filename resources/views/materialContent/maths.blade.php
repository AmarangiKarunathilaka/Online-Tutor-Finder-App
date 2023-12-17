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
        <th><b>Mathematics</b></th>
        </tr>
  </thead> 

  <tbody>
      
    @php
      $lastTutorName = null;
    @endphp

    @foreach ($combinedResults as $combinedResults)
      @if($lastTutorName !== $combinedResults->tutorName)
        <tr><td>Tutor Name: {{ $combinedResults->tutorName }} </td></tr>
        <tr><td>
        <ul class="list">
            <li class="post"><b>Class Note</b></li>
            <li><a href="{{url('/download',$combinedResults->file)}}"> {{ $combinedResults->title }} </a></li>

          @php
            $lastTutorName = $combinedResults->tutorName
          @endphp
      
      @else
        <li><a href="{{url('/download',$combinedResults->file)}}"> {{ $combinedResults->title }} </a></li>
      @endif

      @endforeach
      </td></tr>
      
    
     
        
        <tr><td>
        <ul class="list">
            <li class="post"><b>Assignment</b></li>
            @foreach ($combinedass as $combinedass)
            <li><a href="{{url('/download',$combinedass->file)}}"> {{ $combinedass->title }} </a></li>

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

</body>
</html>