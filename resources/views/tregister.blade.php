<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tRegisterstyle.css">
    <link href="css/style.css" rel="stylesheet">
    <title>Registation For Tutor</title>
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
            
            <h2><div class="row justify-content-center"> Registration </div></h2 >

                <table>
                    <form action="{{ url('/tutorInput') }}" method="post">
                        @csrf 
                        <tr>
                            <div class="mt-4">
                                
                                <td><input type="text" class="form-control" placeholder="Full Name" name="name" required></td>
                               
                            </div>
                        </tr>
                
                        <tr>
                            <div class="mt-4">
                               <td> <input type="text" class="form-control" placeholder="Phone number" name="contact" required>
                                    @error('contact')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </td>
                               
                            </div>
                            
                        </tr>
                    </table>

                        
                        <div class="TutorReg-1" style="padding: 5px;">
                                <textarea type="text" class="form-control" placeholder="Qualifications" name="qualification" rows="5" cols="10" required></textarea>
                        </div>
                        
                <table>
                    <tr>
                        <tr>
                            <div class="TutorReg-1">
                                <td><label for="TR-subject" name="subject"> Subject :</label></td>
                                <td><input type="checkbox" class="TR-input"  name="subject1" value="mathematics">
                                <label for="TR-subject1"> Mathematics </label></td>
                            </div>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" class="TR-input"  name="subject2" value="biology">
                                <label for="TR-subject2"> Biology </label>
                            </td>
                        <tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" class="TR-input"  name="subject3" value="chemistry">
                                <label for="TR-subject3"> Chemistry </label>
                        </td>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" class="TR-input"  name="subject4" value="physics">
                                <label for="TR-subject4"> Physics </label>
                            </td>
                        </tr>

                        <tr>
                            <tr>
                                <div class="TutorReg-1">
                                    <td><label for="TR-medium" name="medium"> Medium :</label></td>
                                    <td><input type="checkbox" class="TR-input" name="medium1" value="sinhala">
                                    <label for="TR-medium1"> Sinhala </label></td>
                                </div>
                            </tr>
                            <tr>
                                <td><td><input type="checkbox" class="TR-input" name="medium2" value="english">
                                    <label for="TR-medium2"> English </label></td></td>
                            <tr>
                            <tr>
                                <td><td><input type="checkbox" class="TR-input" name="medium3" value="tamil">
                                    <label for="TR-medium3"> Tamil </label></td></td>
                            <tr>
                        </tr>
                    
                    </table>
                        <tr>
                            <div class="form-group col-8" style="padding: 5px ;">
                            <div class="TutorReg-1">
                                <td><input type="email" class="form-control"  placeholder="Enter University E-mail" name="email" required></td>
                                <td></td>
                            </div>
                        </div>
                        </tr>
                    <table>
                        <tr>
                            <div class="TutorReg-1">

                                <td> <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password" name="password" id="password">
                            
                                @error('password')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror

                                </td>

                                <td> <input type="password" class="form-control @error('reEnterPassword') is-invalid @enderror" placeholder="Re-enter Password" name="reEnterPassword" id="reEnterPassword"></td>
                                
                                @error('reEnterPassword')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror

                            </div>
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
