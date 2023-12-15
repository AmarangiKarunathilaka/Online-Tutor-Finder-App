<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        

        <title>Registation</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/owl.carousel.min.css" rel="stylesheet">

    
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/registrationstyle.css') }}">
<!--

Tooplate 2133 Moso Interior

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
                            <a class="nav-link click-scroll" href="/">Home</a>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/#section_2">About</a>
                        </li>

                    
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="/registration"><b>Register</b></a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
           
        <section class="hero-section hero-slide d-flex justify-content-center align-items-center">

        
        <div class="form-box" style="margin-top: 10%; height:400px;">
            <div class="form-value text-center"  style="padding:25px">
    
        <div class="mt-5">
            @if($errors->any())
            <div class="col-12">
                @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
            @endif

            @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif

        </div>
        
            <form action="{{route('reset.password.post')}}" method="POST">
                @csrf
                <h3 class="mt-6">Create your New Password</h3>
                <input type="hidden" name="token" hidden value="{{$token}}">

                <div class="text-center mt-md-3 mt-2 mb-2 mb-md-3">
                    <div>
                        <label for="studentEmail" class="form-lable" style="font-weight: bold; color: white;">Email Address</label>
                        <input type="email" class="form-control" name="studentEmail" >
                    </div>

                    <div>
                        <label for="password" class="form-lable" style="font-weight: bold; color: white;">New Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div>
                        <label for="password_confirmation" class="form-lable" style="font-weight: bold; color: white;">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>

                <button style="font-size: 15px;" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


 <!-- JAVASCRIPT FILES -->
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/click-scroll.js"></script>
 <script src="js/jquery.backstretch.min.js"></script>
 <script src="js/owl.carousel.min.js"></script>
</body>
</html>