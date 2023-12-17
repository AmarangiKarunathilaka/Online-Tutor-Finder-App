<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        


        <title>Guest Interface</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">
>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/owl.carousel.min.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">

        <!-- Boxicons CDN link -->

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        
<!--



https://www.tooplate.com/view/2133-moso-interior

Bootstrap 5 HTML CSS Template

-->
    </head>
    
    <body>
        
        <nav class="navbar navbar-expand-lg  fixed-top shadow-lg">
       
            <div class="container">
                
                <img src="images/f.png" alt="" />
                

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1"><b>Home</b></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2"><b>About</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/login"><b>Login</b></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/registration"><b>Register</b></a>
                        </li>
                    </ul>
                </div>
            </div>
     
        </nav>


        
        <main>

            <section class="hero-section hero-slide d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 text-center mx-auto">
                            <div class="hero-section-text">
                                <h2 class="hero-title mt-2 mb-4">Welcome to Tutor Finder!</h2><i class="hero-icon bi-house"></i>
                                <small class="section-small-title">Search our website to find expert tutors in a variety of subjects.</small>

                            </div>


                            
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-8 col-12 text-center mx-auto">
                           
                                <h3>Find a Tutor </h3>
                                <form action="#" method="get" | class="search-bar">
                                <input type="text" placeholder="Enter subject..." name="subject">
                           
        
                               
                                 <button type="submit"><i class='bx bx-search'></i></button>
                                </div>
                                </form>
                            
                        </div>
                    </div>
                </div>
                
            </section>
    
            
            <section class="about-section section-padding" id="section_2">
                
                <div class="container">
                    
                    <div class="row align-items-center">

                        <div class="col-lg-5 col-12">
                            <small class="section-small-title"><h3>Our Story</h3></small>

                            <h2 class="mt-2 mb-4"><span class="text-muted"><b>At Tutor Finder,</b></span></h2>

                            <div class="about">
                            <p> <b>We're passionate about connecting dedicated tutors with eager learners. Founded in 2023, our platform simplifies the search for quality education tailored to individual needs. From basic subjects to advanced topics, we strive to ensure everyone finds their ideal tutor match. Join our community and embark on a journey towards academic excellence.</b></p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-5 col-5 mx-lg-auto">
                            <img src="images/aboutpic5.jpg" class="about-image about-image-small img-fluid" alt="">
                        </div>

                        <div class="col-lg-4 col-md-7 col-7">
                            <img src="images/aboutpic2.jpg" class="about-image img-fluid" alt="">
                        </div>

                    </div>
                </div>
            </section>

            



            
            
               
            <section class= "advertisement" id="">

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

                            <h5>{{ $advertisementMath->subject }}</h5>
                           <p> <a href="/registration">Register Now</a></p> 

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
                                <p> <a href="/registration">Register Now</a></p> 
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
                                <p> <a href="/registration">Register Now</a></p> 
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
                                <p> <a href="/registration">Register Now</a></p> 
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


                    <!-- <div class="reviews-thumb">
                        <div class="reviews-body">
                            <h4>Tutor4u is the most suitable website layout.</h4>
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

                
                    @if(isset($feedback) && count($feedback)>0)
                        @foreach ($feedback as $feedback)
                            <div class="reviews-thumb">
                                <div class="reviews-body">
                                    <h4>{{ $feedback->message }}</h4>
                                </div>

                                <div class="reviews-bottom reviews-bottom-up d-flex align-items-center">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                        <p class="text-white mb-0">
                                            <strong>{{ $feedback->name }}</strong> ( <small>Tutor</small> )
                                        </p>

                                        <div class="reviews-icons">
                                            @for ($i = 0; $i <= 4; $i++)
                                            <i class="bi-star-fill{{ $i >= $feedback->rating ? 'active' : '' }}"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No reviews found</p>
                    @endif
                                               
                                        

                    @if(isset($wfeedback) && count($wfeedback)>0)
                        @foreach ($wfeedback as $wfeedback)
                            <div class="reviews-thumb">
                                <div class="reviews-body">
                                    <h4>{{ $wfeedback->message }}</h4>
                                </div>

                                <div class="reviews-bottom reviews-bottom-up d-flex align-items-center">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                        <p class="text-white mb-0">
                                            <strong>{{ $wfeedback->name }}</strong> ( <small>Student</small> )
                                        </p>

                                        <div class="reviews-icons">
                                            @for ($i = 0; $i <= 4; $i++)
                                            <i class="bi-star-fill{{ $i >= $wfeedback->rating ? 'active' : '' }}"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No reviews found</p>
                    @endif
                    

                    @if(isset($tfeedback) && count($tfeedback)>0)
                        @foreach ($tfeedback as $tfeedback)
                            <div class="reviews-thumb">
                                <div class="reviews-body">
                                    <h6>{{ $tfeedback->tutor }} - Tutor</h6>
                                    <h4>{{ $tfeedback->message }}</h4>
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
                    
                </div>

                <!-- <div class="col-lg-12 col-12">
                    <p class="d-flex justify-content-center align-items-center mt-lg-5">Write some reviews on <a href="#" class="custom-btn btn ms-3"><i class="bi-facebook me-2"></i>facebook</a></p>
                </div> -->
            </div>

        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#36363e" fill-opacity="1" d="M0,96L40,117.3C80,139,160,181,240,186.7C320,192,400,160,480,149.3C560,139,640,149,720,176C800,203,880,245,960,250.7C1040,256,1120,224,1200,229.3C1280,235,1360,277,1400,298.7L1440,320L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>          
</section>
           


    <footer class="site-footer section-padding">
        
                <div class="container">
        
           

                <div class="col-lg-3 col-md-5 col-12 mb-3">
                    <h3><a href="index.html" class="custom-link mb-1">Tutor For You</a></h3><br>

                    <p class="text-white">We are ready to find the tutors you need</p>
                
                </div>

               

                <div class="col-lg-7 col-md-3 col-12 ms-lg-auto mb-3">
                    <h3 class="text-white mb-3">Contact Info</h3>

                        <p class="text-white mb-1">
                            <i class="bi-telephone me-1"></i>

                            <a href="tel:  071-01234567" class="text-white">
                                071-01234567
                            </a>
                        </p>

                        <p class="text-white mb-0">
                            <i class="bi-envelope me-1"></i>

                            <a href="mailto:info@company.com" class="text-white">
                                info@company.com
                            </a>
                        </p>
                </div>

                <div class="col-lg-3 col-md-3 col-12 ms-lg-auto mb-3">
                    <h3 class="text-white mb-3">Location</h3>

                    <p class="text-white mt-2">
                        <i class="bi-geo-alt"></i>
                        Matara
                    </p>
                </div>

                <div class="col-lg-8 col-md-7 copyright-text-wrap col-12 d-flex flex-wrap align-items-center mt-4 ms-auto">
                    <p class="copyright-text mb-0 me-4">© 2023 Tutor Finder</p>

                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link social-icon-twitter bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link social-icon-facebook bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link social-icon-instagram bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link social-icon-pinterest bi-pinterest"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link social-icon-whatsapp bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>

           
        </div>
    </footer>     

     <!-- JAVASCRIPT FILES -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/click-scroll.js"></script>
     <script src="js/jquery.backstretch.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

 </body>
</html>