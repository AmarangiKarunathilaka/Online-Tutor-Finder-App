
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
        <div class="form-box" style="margin-top: 10%; height:400px;">
            <div class="form-value text-center"  style="padding:25px">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <h3 class="mt-0">Forgot Password</h3>
                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('Forgot your password? No problem.') }}
                        <br>
                        {{__('Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.')}}
                    </div>
                    <div class="radio-box text-white mb-md-4 mb-2">
                        <input type="radio" id="student" name="user_type" value="student" {{ old('user_type', 'student') === 'student' ? 'checked' : '' }} required>
                        <label for="student">Student</label>

                        <input type="radio" id="tutor" name="user_type" class="ms-3" value="tutor" {{ old('user_type') === 'tutor' ? 'checked' : '' }} required>
                        <label for="tutor">Tutor</label>

                        <input type="radio" id="admin" name="user_type" class="ms-3" value="admin" {{ old('user_type') === 'admin' ? 'checked' : '' }} required>
                        <label for="admin">Admin</label>
                    </div>
                    <div class="text-center mt-md-5 mt-2 mb-2 mb-md-5">
                        <input type="text" class="form-control" name="email" placeholder="Email" required>
                        <!-- Validation for email -->
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <button style="font-size: 15px;">{{ __('Email Password Reset Link') }}</button>

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

 

