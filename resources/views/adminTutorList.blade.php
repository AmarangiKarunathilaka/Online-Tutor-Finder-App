<!DOCTYPE html>
<html lang="en">
<head>

<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">-->



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
            background:white;
        }
        
    </style>
        
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
    <header class="header">
      <div class="header_logo">

      <a href="/adminDashboard">
            <i class="fa fa-mail-reply" aria-hidden="true"></i></a>
        <a href="#"style="color:#fff;  font-weight: bold; margin-left:20px; font-size:25px;">Tutor List</a>
      </div>
  
      
  
      

        <a href="#"style="color:#fff;  font-weight: bold; font-size:25px;">Tutor List</a>
    </div> 

    </header>
           <!-- Ramal 2023.12.13 Button 2 -->
           <form action="{{ route('generate_pdf_tutor') }}" method="post" target="_blank">
	            @csrf
                <div>
                    <button class="button1">Download PDF</button>
                </div>
            </form>


    <div class="main_body">
        <div class="container">
            
     
        <div class="row d-flex justify-content-center">
                <div class="col-md-11 mt-5 pt-5">
                    <div class="row z-depth-3">
                        <div class="col-sm-4 bg-info rounded-left bg-white" style=" margin-top:-50px;">

                        <section class="attendance">
            <div class="attendance-list" style=" margin-top:-20px; ">
              
            <table class="table" style=" border: 1px solid #110d0d;"> 
            <thead style="width:100%; border: 1px solid #6b6b49; ">
                
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

        
          



    </div>

    </section>
    @endsection
</body>
</html>