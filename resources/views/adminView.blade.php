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
    
        
    <table>
        <tr>
        <td><b>Tutor Name: </b>{{ $classmaterial->tutorName }}</td>
        <td><b>Title:   </b>{{ $classmaterial->title }}</td></tr>
        <tr>
        <td><b>Subject: </b>{{ $classmaterial->subject }}</td>
        <td><b>Category: </b>{{ $classmaterial->lecNote }}</td></tr>

</table>

    <iframe height="1000" width="90%" src = "/filestore/{{ $classmaterial->file }}" > </iframe>

        <div class="back"><a href="/adminClassMaterialList"> <b><-Back</b></a></div>
</div>
    </section>
    @endsection
    </body>
</html>