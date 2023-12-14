<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/adminstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/report.css') }}">
    <title>Admin Feedback List</title>
</head>
<body>
 
    <section class="home">
        <div class="text">Feedback Management</div>
    


    <div class="row justify-content-center">
        <div class="form-box">
            <div class="container mt-4 ">

                    <table class="table table-success table-striped">
                    
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Message</th>
                        <th scope="col">Student Id</th>
                        <th scope="col">Status</th>
                        <th scope="col">Accept/Reject</th>
                    </tr>
                </thead>  

                <tbody>
                    @foreach ($feedback as $feedback)
                
                    <tr>
                    <th scope="row">{{ $feedback->id }}</th>
                    <td>{{ $feedback->name }}</td>
                    <td>{{ $feedback->email }}</td>
                    <td>{{ $feedback->rating }}</td>
                    <td>{{ $feedback->message }}</td>
                    <td>{{ $feedback->student_id }}</td>
                    <td>{{ $feedback->status }}</td>
                    <td>
                        <a href="{{url('acceptFeedback',$feedback->id)}}"><button type="button" class="accept">Accept </button><br><br>
                        <a href="{{url('rejectFeedback',$feedback->id)}}" ><button type="button" class="remove">Reject</button>
                    </td>
                    </tr>
                    
                    @endforeach
                </tbody>

                </table>


                    
          

                </div>
            </nav>
        </header>
    </section>

    
</body>
</html>
