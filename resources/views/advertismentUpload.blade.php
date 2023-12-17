<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertisement upload form</title>
   
    <link rel="stylesheet" href="css/classMaterial.css" />
    <link rel="stylesheet" href="css/advertisement.css" />
    

    <link href="css/bootstrap-icons.css" rel="stylesheet">   

    <link href="css/owl.carousel.min.css" rel="stylesheet"> 

    <link href="css/bootstrap-icons.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
          
         
        .box{
            margin-top: 580px; 
            margin-left: 1200px;
            height: 40px;
            width: 120px;
            display: flex;
            
           
        }
        button{
            height: 40px;
            width: 100px;
            border: none;
            outline: none;
            font-size: 20px;
            font-weight: 600;
        }
        button,.fa{
            color: #383838;
            box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);
            cursor: pointer;
        }
        .fa{
            font-size: 20px;
            padding: 10px 18px;
        }
        #back,.fa-mail-forward{
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        
        
        .fa-mail-reply{
            
            background: linear-gradient(#ffeb3b,#ff5722);
        }
        
    </style>

  </head>
  <body>

  @extends('tutorHomeContent')
  @section('content')
  <section class="home">
        <div class="text"></div>
    
        
    <div class="container">

      <div>
      <a href="/tutorDashboard">
      <i class="fa fa-mail-reply" aria-hidden="true"></i></a>
        <button id="back">BACK</button>
      <h1 class="form-title">Advertisment Upload</h1>
      <form action="{{ url('/advertisementInput') }}" method="post" enctype="multipart/form-data">
        @csrf

        @foreach ($tutorName as $tutorName)
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="fullName">Name</label>
            <input type="text"
                    id="fullName"
                    name="fullName"
                    placeholder="Name to be displayed" value="{{$tutorName->tutorFullName}}" />
          </div>
          @endforeach

          @foreach ($email as $email)
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your Email" value="{{$email->tutorEmail}}"/>
          </div>
          @endforeach
          
          <div class="user-input-box">
            <label for="title">Class Fee</label>
            <input type="text"
                    id="title"
                    name="payment"
                    placeholder="Enter Your payment for one hour : LKR"/>
          </div>
          <div class="user-input-box">
            <label for="material">Upload image:</label>
                <input type="file" name="photo"   accept="image/jpeg, image/png, image/jpg" id="input-file" required>
          </div>
          <div class="user-input-box">
            <label for="email">Description</label></div>
            <textarea id="message" name="message" rows="4" placeholder="Your Qualifications..." ></textarea>
          
          
        </div>
        <div class="category-details-box">
          
          </br>
          </br>
          <div class="user-input-box">
            <label for="subject">Select Subject</label>
                <select name="subject" id="subject">
                  @foreach($subjects as $subject)
                    <option value="{{$subject}}">{{$subject}}</option>
                  @endforeach 
                    
                </select>
          </div>
        </div>

        <div class="category-details-box">
          
          </br>
          </br>
          <div class="user-input-box">
            <label for="subject">Select Medium</label>
                <select name="medium" id="medium">
                  @foreach($medium as $medium)
                    <option value="{{$medium}}">{{$medium}}</option>
                  @endforeach 
                    
                </select>
          </div>
        </div>

        
        <div class="form-submit-btn">
          
          <button type="submit" class="btn" onclick="openPopup()">Upload</button>
                <div  class = "popup" id="popup">
                    <img src = "images/tick.png">
                    <h2>Successful</h2>
                    <p>Your advertisment uploaded</p>
                    <button type = "button" onclick="closePopup()">OK</button>
                </div>
                    
                <script>
                    let popup= document.getElementById("popup");

                    function openPopup(){
                    popup.classList.add("open-popup"); 
                    }

                    function closePopup(){
                    popup.classList.remove("open-popup"); 
                    }
                </script>
               
        
       
   
        </div>
      </form>
        </div>
        
      
    </div>
                  </br>
    
    <section class= "advertisement">
    <div class="col-lg-12 col-12">
            <h2>My Advertisements</h2>
        </div>
        
    </section>

                  </br>
    <section class="content">

        <div class="row">

            <div class="owl-carousel reviews-carousel">
                    @foreach ($advertisements as $advertisement)
                        <div class="col">   
                                    
                            <img class="ad" src="/uploads/{{ $advertisement ->photo }}"  width='50' height='50' class="img img-responsive"/>
                            <h2>{{ $advertisement->tutorName }}</h2>
                            <p>{{ $advertisement->description }}</p>
                            <h3>{{ $advertisement->subject }}</h3>
                            <a href="{{url('update_advertisement',$advertisement->id)}}" ><button type="button" class="register">Update Advertisement</button>
                            <a href="{{url('delete_advertisement',$advertisement->id)}}" ><button type="button" class="register">Delete</button>
                        </div>
                    @endforeach
            </div>

        </div>
      </section>

      <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/click-scroll.js"></script>
     <script src="js/jquery.backstretch.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

    @endsection
    </section>
  </body>
</html>