<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tRegisterstyle.css">
    <link href="css/style.css" rel="stylesheet">
    <title>Class Request Form</title>
</head>
<body>
    
    <header>
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
                       <a class="nav-link click-scroll" href="#section_3"><b>Contact Us</b></a>
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
    </header>


    <div class="row justify-content-center">
    <div class="form-box">
    <div class="container mt-4 ">
           
        <div class="form">
            
            <h1><div class="row justify-content-center"> Request</div></h1>

                <table>
                    <form action="{{ url('/classRequestInput') }}" method="post">
                        @csrf 
                        <input type="hidden" name="key" value="1">
                        <tr>
                            <div class="mt-4">
                                
                                <td><input type="text" class="form-control" placeholder="Tutor Id" name="tutorId" required></td>
                               
                            </div>
                        </tr>
                        <tr>
                            <div class="mt-4">
                                
                                <td><input type="text" class="form-control" placeholder="Tutor Name" name="tutorname" required></td>
                               
                            </div>
                        </tr>
                        <tr>
                            <div class="mt-4">
                                
                                <td><input type="text" class="form-control" placeholder="Student Name" name="studentname" required></td>
                               
                            </div>
                        </tr>

                        <tr>
                            <div class="mt-4">
                            <td><label for="date"> Date:</label>
                            <input type="date" id="date" name="date"></td>

                               
                            </div>
                            
                        </tr>
                
                        <tr>
                            <div class="mt-4">
                           <td><label for="time">Time:</label>
                            <input type="time" id="time" name="time"></td>

                               
                            </div>
                            
                        </tr>

                        

                    </table>

                        
                    
                        
                <table>
                    <tr>
                    <td><input type="text" class="form-control" placeholder="Subject" name="subject" required></td>
                    </tr>

                        <tr>
                            <tr>
                                <div class="TutorReg-1">
                                    <td><label for="TR-medium"> Medium :</label></td>
                                    <td><input type="radio" class="TR-input" name="medium">
                                    <label for="TR-medium1"> Sinhala </label></td>
                                </div>
                            </tr>
                            <tr>
                                <td><td><input type="radio" class="TR-input" name="medium">
                                    <label for="TR-medium2"> English </label></td></td>
                            <tr>
                            <tr>
                                <td><td><input type="radio" class="TR-input" name="medium">
                                    <label for="TR-medium3"> Tamil </label></td></td>
                            </tr>
                        </tr>
                        
                       
                    
                        
                    </table>
                    </tr>
                
                            <div class="row">
                            <div class="form-group col-1">
                                <input type="checkbox" class="TR-input" name="terms" required>
                                </div>
                                <div class="form-group col-11">
                                <label for="TR-terms"> I Agree to the <a href="terms.html">Terms and Conditions</a>  </label>
                            </div>
                        </div>
                        
                        
                        <button type="submit" name="submit" class="btn" style="font-size: 20px; text-align:center; width: 100%"> Register </button>
                        
        
                    </form>
                
            
            </div>
        </div>
    </div>
    </div>

         <footer>
            <p>&copy; 2023 Tutor Finder</p>
        </footer> 
    
</body>
</html>
