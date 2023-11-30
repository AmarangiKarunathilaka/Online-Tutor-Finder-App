<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tRegisterstyle.css">
    <link href="css/style.css" rel="stylesheet">
    <title>Registation For Student</title>
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
                       <a class="nav-link click-scroll" href="/#section_1"><b>Home</b></a>
                   </li>

                   <li class="nav-item">
                       <a class="nav-link click-scroll" href="/#section_2"><b>About</b></a>
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
            
            <h2><div class="row justify-content-center"> Registration </div></h2>

                <table>
                    <form action="{{ url('/studentInput') }}" method="Post">
                        @csrf 
                        <tr>
                            <div class="mt-4">
                                
                                <td><input type="text" class="form-control" placeholder="Full Name" name="name" required></td>
                               
                            </div>
                        </tr>

                        <tr>
                            <div class="StReg-1">
                                <td><label for="TR-contact">Date Of Birth: </label></td>
                                <td>
                                    <input type="date" class="form-control" name="dateOfBirth" required>
                                </td>
                            </div>
                        </tr>

                        <tr>
                                <div class="StReg-1">
                                    
                                    <td> <textarea type="text" class="form-control" placeholder="Address" name="address" rows="3" cols="23" required></textarea></td>
                                </div>
                            </tr>
                
                        <tr>
                            <div class="mt-4">
                                <td> <input type="text" class="form-control" placeholder="Phone number" name="studentContact" required>
                                    @error('studentContact')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </td>
                               
                            </div>
                            
                        </tr>
                    </table>

                        <tr>
                            <div class="form-group col-8" style="padding: 5px ;">
                            <div class="TutorReg-1">
                                <td><input type="email" class="form-control"  placeholder="Enter E-mail" name="studentEmail" required></td>
                                <td></td>
                            </div>
                        </div>
                        </tr>
                    <table>
                        <tr>
                            <div class="TutorReg-1">

                                <td> <input type="password" class="form-control" placeholder="Enter Password" name="password">
                                    @error('Password')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </td>

                                <td> <input type="password" class="form-control" placeholder="Re-enter Password" name="studentReEnterPassword">
                                    @error('studentReEnterPassword')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </td>

                            </div>
                        </tr>
                    </table>
                    </tr>
                
                            <div class="row">
                            <div class="form-group col-1"><br>
                                <input type="checkbox" class="TR-input" name="terms" required>
                                </div>
                                <div class="form-group col-11">
                                <br><label for="TR-terms"> I Agree to the <a href="/terms"> Terms and Conditions</a>  </label>
                            </div>
                        </div>
                        
                        
                        <br><button type="submit" name="submit" class="btn" style="font-size: 20px; text-align:center; width: 100%"> <b>Register<b> </button>
                        
        
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


                                

                        