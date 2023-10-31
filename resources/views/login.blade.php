
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

        <link rel="stylesheet" href="css/registrationstyle.css">

        <link rel="stylesheet" href="css/style.css">
        
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


    <section>
        <div class="form-box">
            <div class="form-value">

                <form method="post" action="{{ url('/postlogin') }}">
                @csrf
                    <h2>Login</h2>

                    <div class="input-box">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" id="email" name="email" required>
                        <label for="">E-mail</E-mail></label>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                    </div>

                    <div class="input-box">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="password" name="password" required>
                        <label for="">Password</label>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                    </div>


                    <div class="forget">
                        <label for=""><input type="checkbox">Remember me  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="">Forget Password</a></label>
                        
                    </div>
                    <button>Submit</button>
                    <div class="register">

                       
                        <p>New Member <a href="/registration">Registration here</a></p>

                    </div>
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

 

