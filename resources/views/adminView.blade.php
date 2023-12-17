<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('css/report.css') }}">
    <title>Admin Class Material List</title>
</head>
<body>
    
    @extends('adminHomeContent')
    @section('content')
    <section class="home">
        <div class="view">
        <div class="text">Class Materials View</div>
    
        
    <table class="time" style="width:90%;">
        <tr>
        <td class="inside" style="font-size:23px;"><b>Tutor Name: </b>{{ $classmaterial->tutorName }}</td>
        <td class="inside" style="font-size:23px;"><b>Title:   </b>{{ $classmaterial->title }}</td></tr>
        <tr>
        <td class="inside" style="font-size:23px;"><b>Subject: </b>{{ $classmaterial->subject }}</td>
        <td class="inside" style="font-size:23px;"><b>Category: </b>{{ $classmaterial->lecNote }}</td></tr>

</table>

    <iframe height="1000" width="90%" src = "/filestore/{{ $classmaterial->file }}" > </iframe>

        <div class="back"><a href="/adminClassMaterialList"> <b><-Back</b></a></div>
</div>
    </section>
    @endsection
    </body>
</html>