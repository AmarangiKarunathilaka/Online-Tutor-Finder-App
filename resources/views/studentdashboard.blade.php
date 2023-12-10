<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/advertisementstyle.css">
    

    <link href="css/bootstrap-icons.css" rel="stylesheet">   

    <link href="css/owl.carousel.min.css" rel="stylesheet"> 

    <link href="css/bootstrap-icons.css" rel="stylesheet"> 

       
        


    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Student Dashboard</title> 
</head>
<body>
@extends('studentHomeContent')
  @section('content')
  <section class="home">
        <div class="text"></div>
    
    
    <div class="container">
    
        
   

    
<!---------------------------------------
    advertisements            
  ----------------------------------------->

    <section class= "advertisement">

        <div class="col-lg-12 col-12">
            <h2>Our Tutors</h2>
        </div>
    </section>


    <section class="content">


        <div class="col-lg-12 col-12">
            <div class="subject">
                <h3><i><u>Mathematics</u></i></h3>
            </div>
        </div>

        <div class="row">

            <div class="owl-carousel reviews-carousel">
                    @foreach ($advertisementMaths as $advertisementMath)
                        <div class="col">   
                                    
                            <img src="/uploads/{{ $advertisementMath ->photo }}"  width='50' height='50' class="img img-responsive"/>
                            <h1>{{ $advertisementMath->tutorName }}</h1>
                            <button class="register">Register Now</button>
                        </div>
                    @endforeach
            </div>

        </div>



        <div class="col-lg-12 col-12">
            <div class="subject">
                <h3><i><u>Physics</u></i></h3>
            </div>
        </div> 

        <div class="row">
            
            <div class="owl-carousel reviews-carousel">
                    @foreach ($advertisementPhysics as $advertisementPhysic)
                            <div class="col">   
                                
                                <img src="/uploads/{{ $advertisementPhysic ->photo }}"  width='50' height='50' class="img img-responsive"/>
                                <h1>{{ $advertisementPhysic->tutorName }}</h1>
                            </div>
                    @endforeach
            </div>
            
        </div> 



        <div class="col-lg-12 col-12">
            <div class="subject">
                <h3><i><u>Chemistry</u></i></h3>
            </div>
        </div> 

        <div class="row">

            <div class="owl-carousel reviews-carousel">
                    @foreach ($advertisementChemistry as $advertisementChem)
                            <div class="col">   
                                
                                <img src="/uploads/{{ $advertisementChem ->photo }}"  width='50' height='50' class="img img-responsive"/>
                                <h1>{{ $advertisementChem ->tutorName }}</h1>
                            </div>
                    @endforeach
            </div>

        </div>


        <div class="col-lg-12 col-12">
            <div class="subject">
                <h3><i><u>Biology</u></i></h3>
            </div>
        </div> 

        <div class="row">
            <div class="owl-carousel reviews-carousel">
                    @foreach ($advertisementBiology as $advertisementBio)
                            <div class="col">   
                                
                                <img src="/uploads/{{ $advertisementBio ->photo }}"  width='50' height='50' class="img img-responsive"/>
                                <h1>{{ $advertisementBio ->tutorName }}</h1>
                            </div>
                    @endforeach
            </div>

        </div>

    </section>
    
    </div>
    







     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/click-scroll.js"></script>
     <script src="js/jquery.backstretch.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

     </section> 

     @endsection

</body>
</html>
</span>