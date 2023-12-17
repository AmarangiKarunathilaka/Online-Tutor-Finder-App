<!DOCTYPE html>
<html lang="en">
<head>

<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">-->

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/adminstyle.css">
    <link href="css/report.css"  rel="stylesheet">

    <link rel="stylesheet" href="css/adminstyle.css">


    <link href="css/report.css" rel="stylesheet">

    <title>Tutor Table</title>


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
                       
                        <th scope="col">status</th>
                        <th scope="col">Accept/Remove</th>
                        <th scope="col">sendEmail</th>
                    </tr>
                </thead> 

                <tbody>
                     
                    @foreach ($data as $item)

                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->tutorFullName }}</td>
                        <td>{{ $item->tutorPhoneNumber }}</td>
                        <td>{{ $item->qualification }}</td>
                        <td>{{ $item->tutorEmail }}</td>
                       
                        <td>{{ $item->status }}</td>
                        <td><a href="{{url('accept_tutor',$item->id)}}"><button type="submit" name="button" value="accept">Accept</button>
                            <a href="{{url('reject_tutor',$item->id)}}" ><button type="submit" name="button" value="remove">Remove</button>
                        </td>
                        <td>
                        <form action="{{ route('send.email', ['email' => $item->tutorEmail]) }}" method="POST">
                            @csrf
                            <button type="submit" name="button" value="accept">Accept Email</button>
                            <button type="submit" name="button" value="remove">Remove Email</button>
                        </form>
                        </td>

                    </tr>
                        
                    @endforeach
                </tbody>    
                    
                </table>
                        
            </div>
        </div>

        
                 <!-- Ramal 2023.12.13 Button 2 -->
            <form action="{{ route('generate_pdf_tutor') }}" method="post" target="_blank">
	            @csrf
                <div>
                    <button class="button1">Download PDF</button>
                </div>
            </form>



    </div>

    </section>
    @endsection
</body>
</html>