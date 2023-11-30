<!DOCTYPE html>
<html lang="en">
<head>

<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">-->

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminstyle.css">
    <link href="css/report.css" rel="stylesheet">
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
        <div class="text">Advertisement List</div>
    


    <div class="row justify-content-center">
        <div class="form-box">
            <div class="container mt-4 ">
                
                <table class="table table-success table-striped">
                    
                <thead>
                    <tr>
                        <th scope="col">Advertisement Id</th>
                        <th scope="col">Tutor Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Payment</th>
                        <th scope="col">Image</th>
                        <th scope="col">description</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Tutor Id</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>  

                <tbody>
                    @foreach ($advertisements as $advertisement)
                
                    <tr>
                    <th scope="row">{{ $advertisement->id }}</th>
                    <td>{{ $advertisement->tutorName }}</td>
                    <td>{{ $advertisement->email }}</td>
                    <td>{{ $advertisement->payment }}</td>
                    <td>{{ $advertisement->imageUpload }}</td>
                    <td>{{ $advertisement->description }}</td>
                    <td>{{ $advertisement->subject }}</td>
                    <td>{{ $advertisement->tutor_id }}</td>
                        <td><button type="button" class="accept">Accept </button>
                            <button type="button" class="remove">Reject</button></td>
                    </tr>
                    
                    @endforeach
                </tbody>
                    
                </table>
                        
            </div>
        </div>

        <form action="{{ route('view-pdf') }}" method="post" target="_blank">
	            @csrf
                <div>
                    <button type="button" onclick="generateReport()">Generate Report</button>

                </div>
            </form>
    </div>
    </section>
    @endsection
</body>
</html>