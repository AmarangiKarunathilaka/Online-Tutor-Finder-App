<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/tutorDashboard.css') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
          
        
        button,.fa{
            color: #383838;
            box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);
            cursor: pointer;
        }
        .fa{
            margin-left: -10px;
            font-size: 20px;
            padding: 10px 18px;
        }
        #back,.fa-mail-forward{
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        
        
        .fa-mail-reply{
            background: white;
        }
        
    </style>
        
    <title>Admin Feedback List</title>
</head>
<body>
    @extends('adminHomeContent')
    @section('content')
    <section class="home">
    <header class="header">
      <div class="header_logo">
      <a href="/adminDashboard">
            <i class="fa fa-mail-reply" aria-hidden="true"></i></a>
        <a href="#"style="color:#fff; margin-left:20px; font-weight: bold; font-size:25px;">Feedback List</a>
      </div>
  
      
  
      
    </header>
    


    <div class="main_body">
        <div class="container">
            
     
        <div class="row d-flex justify-content-center">
                <div class="col-md-11 mt-5 pt-5">
                    <div class="row z-depth-3">
                        <div class="col-sm-4 bg-info rounded-left bg-white" style=" margin-top:-50px;">

                        <section class="attendance">
            <div class="attendance-list" style=" margin-top:-20px; ">
            <h2>Website Feedback By Tutors</h2>
            <table class="table" style=" border: 1px solid #110d0d;"> 
            <thead style="width:100%; border: 1px solid #6b6b49; ">
                
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Message</th>
                                <th scope="col">Tutor Id</th>
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
                            <td>{{ $feedback->tutor_id }}</td>
                            <td>{{ $feedback->status }}</td>
                            <td>
                                <a href="{{url('acceptFeedback',$feedback->id)}}"><button type="button" class="accept">Accept </button>
                                <a href="{{url('rejectFeedback',$feedback->id)}}"><button type="button" class="remove">Reject</button>
                            </td>
                            </tr>
                            
                            @endforeach
                        </tbody>

                    </table><br><br>

                 <div class="row d-flex justify-content-center">
                <div class="col-md-11 mt-5 pt-5">
                    <div class="row z-depth-3">
                        <div class="col-sm-4 bg-info rounded-left bg-white" style=" margin-top:-50px;">

                        <section class="attendance">
            <div class="attendance-list" style=" margin-top:-20px; ">
            <h2>Website Feedback By Students</h2>  
            <table class="table" style=" border: 1px solid #110d0d;"> 
            <thead style="width:100%; border: 1px solid #6b6b49; ">
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
                            @foreach ($wfeedback as $wfeedback)
                            
                            <tr>
                            <th scope="row">{{ $wfeedback->id }}</th>
                            <td>{{ $wfeedback->name }}</td>
                            <td>{{ $wfeedback->email }}</td>
                            <td>{{ $wfeedback->rating }}</td>
                            <td>{{ $wfeedback->message }}</td>
                            <td>{{ $wfeedback->student_id }}</td>
                            <td>{{ $wfeedback->status }}</td>
                            <td>
                                <a href="{{url('acceptwFeedback',$wfeedback->id)}}"><button type="button" class="accept">Accept </button>
                                <a href="{{url('rejectwFeedback',$wfeedback->id)}}" ><button type="button" class="remove">Reject</button>
                            </td>
                            </tr>
                            
                            @endforeach
                        </tbody>

                    </table><br><br>
                    
        <div class="row d-flex justify-content-center">
                <div class="col-md-11 mt-5 pt-5">
                    <div class="row z-depth-3">
                        <div class="col-sm-4 bg-info rounded-left bg-white" style=" margin-top:-50px;">

                        <section class="attendance">
            <div class="attendance-list" style=" margin-top:-20px; ">
            <h2>Tutor Feedback by Students</h2>
            <table class="table" style=" border: 1px solid #110d0d;"> 
            <thead style="width:100%; border: 1px solid #6b6b49; ">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Tutor</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Message</th>
                                <th scope="col">Student Id</th>
                                <th scope="col">Status</th>
                                <th scope="col">Accept/Reject</th>
                            </tr>
                        </thead>  

                        <tbody>
                            @foreach ($tfeedback as $tfeedback)
                                
                                <tr>
                                <th scope="row">{{ $tfeedback->id }}</th>
                                <td>{{ $tfeedback->name }}</td>
                                <td>{{ $tfeedback->email }}</td>
                                <td>{{ $tfeedback->tutor }}</td>
                                <td>{{ $tfeedback->rating }}</td>
                                <td>{{ $tfeedback->message }}</td>
                                <td>{{ $tfeedback->student_id }}</td>
                                <td>{{ $tfeedback->status }}</td>
                                <td>
                                    <a href="{{url('accepttFeedback',$tfeedback->id)}}"><button type="button" class="accept">Accept </button>
                                    <a href="{{url('rejecttFeedback',$tfeedback->id)}}" ><button type="button" class="remove">Reject</button>
                                </td>
                                </tr>
                                
                            @endforeach
                        </tbody>


                    </table><br><br>

                </table>


                <!--Ramal 2023.12.14 Button 6-->
                <form action="{{ route('generate_pdf_feedback') }}" method="post" target="_blank">
                    @csrf
                        <div>
                            <button class="button1">Download PDF</button>
                        </div>
                </form>

          
                </div>
            </div>
        </div>
    </section>
    @endsection
    
</body>
</html>
