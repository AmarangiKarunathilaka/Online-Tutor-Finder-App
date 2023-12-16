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
    
    <link href="css/reviews-styles.css" rel="stylesheet">

       
        


    
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
                            <h2>{{ $advertisementMath->tutorName }}</h2>
                            <p>{{ $advertisementMath->description }}</p>
                            <h3>{{ $advertisementMath->subject }}</h3>
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
                                <h2>{{ $advertisementPhysic->tutorName }}</h2>
                                <p>{{ $advertisementPhysic->description }}</p>
                                <h3>{{ $advertisementPhysic->subject }}</h3>
                                <button class="register">Register Now</button>
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
                                <h2>{{ $advertisementChem->tutorName }}</h2>
                                <p>{{ $advertisementChem->description }}</p>
                                <h3>{{ $advertisementChem->subject }}</h3>
                                <button class="register">Register Now</button>
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
                                <h2>{{ $advertisementBio->tutorName }}</h2>
                                <p>{{ $advertisementBio->description }}</p>
                                <h3>{{ $advertisementBio->subject }}</h3>
                                <button class="register">Register Now</button>
                            </div>
                    @endforeach
            </div>

        </div>

    </section>
    
    <section class="reviews-section section-padding pb-0">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <h2 class="mt-2 mb-4">Reviews</h2>

                    <div class="owl-carousel reviews-carousel">

                        @if(isset($tfeedback) && count($tfeedback)>0)
                            @foreach ($tfeedback as $tfeedback)
                                <div class="reviews-thumb">
                                    <div class="reviews-body">
                                        <h4>{{ $tfeedback->tutor }} - Tutor</h4>
                                        <h3>{{ $tfeedback->message }}</h3>
                                    </div>

                                    <div class="reviews-bottom reviews-bottom-up d-flex align-items-center">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                            <p class="text-white mb-0">
                                                <strong>{{ $tfeedback->name }}</strong> ( <small>Student</small> )
                                            </p>

                                            <div class="reviews-icons">
                                                @for ($i = 0; $i <= 4; $i++)
                                                <i class="bi-star-fill{{ $i >= $tfeedback->rating ? 'active' : '' }}"></i>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>No reviews found</p>
                        @endif

                        <!-- <div class="reviews-thumb">
                            <div class="reviews-body">
                                <h4>Tutor4u</h4>
                                <h3>Tutor4u is the most suitable website layout.</h3>
                            </div>

                            <div class="reviews-bottom reviews-bottom-up d-flex align-items-center">
                            

                                <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                    <p class="text-white mb-0">
                                        <strong>Sandy</strong>, <small>CEO</small>
                                    </p>

                                    <div class="reviews-icons">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </div>
                    
                </div>

            </div>
        </div>
        
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#36363e" fill-opacity="1" d="M0,96L40,117.3C80,139,160,181,240,186.7C320,192,400,160,480,149.3C560,139,640,149,720,176C800,203,880,245,960,250.7C1040,256,1120,224,1200,229.3C1280,235,1360,277,1400,298.7L1440,320L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg> 
        
        
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