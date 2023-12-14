<!DOCTYPE html>
<html lang="en">
<head>

<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">-->

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminstyle.css">
    <link href="css/report.css"  rel="stylesheet">
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
        <div class="text">Student List</div>
    


    <div class="row justify-content-center">
        <div class="form-box">
            <div class="container mt-4 ">
                
                <table class="table table-success table-striped">
                    
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">studentFullName</th>
                        <th scope="col">birthday</th>
                        <th scope="col">address</th>
                        <th scope="col">studentPhoneNumber</th>
                        <th scope="col">studentEmail</th>
                        <th scope="col">Accept/Remove</th>
                    </tr>
                </thead>  

                <tbody>
                    @foreach ($students as $student)
                
                    <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->studentFullName }}</td>
                    <td>{{ $student->birthday }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->studentPhoneNumber }}</td>
                    <td>{{ $student->studentEmail }}</td>
                        <td><button type="button" class="accept">Accept </button>
                            <button type="button" class="remove">Remove</button></td>
                    </tr>
                    
                    @endforeach
                </tbody>

                </table>
                        
            </div>
        </div>


        <!--Ramal 2023.12.14 Button 1-->
        <form action="{{ route('generate_pdf_student') }}" method="post" target="_blank">
	        @csrf
                <div>
                    <button>Download PDF</button>
                </div>
        </form>


    </div>
    </section>
    @endsection
</body>
</html>