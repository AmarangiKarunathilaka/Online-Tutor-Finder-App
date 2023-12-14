<!DOCTYPE html>
<html lang="en">
<head>

<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">-->

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminstyle.css">
    
    <title>Student Table</title>

</head>
<body>
    
    <!--<div class="values">
        <div class="val-box">
            <i class="fas fa-user"></i>
            <div>
                <h3>1234</h3>
                <spam> New students </spam>
            </div>
        </div>
   
        <div class="val-box">
            <i class="fas fa-user"></i>
            <div>
                <h3>1234</h3>
                <spam> New Tutors </spam>
            </div>
        </div>
    </div>-->
    @extends('adminHomeContent')
    @section('content')
    <section class="home">
        <div class="text">Tutor List</div>
    


        <div class="row justify-content-center">
        <div class="form-box">
            <div class="container mt-4 ">
                
                <table class="table table-success table-striped">
                
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">tutorFullName</th>
                        <th scope="col">tutorPhoneNumber</th>
                        <th scope="col">qualification</th>
                        <th scope="col">tutorEmail</th>
                        <th scope="col">tutorMedium</th>
                        <th scope="col">tutorSubject</th>
                        <th scope="col">Accept/Remove</th>
                    </tr>
                </thead> 

                <tbody>
                     
                    @foreach ($data as $item)

                    <tr>
                        <th {{ $item->id }}</th>
                        <td>{{ $item->tutorFullName }}</td>
                        <td>{{ $item->tutorPhoneNumber }}</td>
                        <td>{{ $item->qualification }}</td>
                        <td>{{ $item->tutorEmail }}</td>
                        <td>{{ $item->tutorMedium }}</td>
                        <td>{{ $item->tutorSubject}}</td>
                        <td><button type="button" class="accept">Accept </button>
                            <button type="button" class="remove">Remove</button></td>
                    </tr>
                        
                    @endforeach
                </tbody>    
                    
                </table>
                        
            </div>
        </div>
    </div>

    </section>
    @endsection
</body>
</html>