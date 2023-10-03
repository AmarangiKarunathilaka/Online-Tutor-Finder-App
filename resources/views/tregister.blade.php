<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tregisterstyle.css">
    <title>Registation For Tutor</title>
</head>
<body>
    
    <header>
        <div class="logo">
            <img src="f.png" style="height: 60px; width: 200px;">
        </div>
        <nav>
            <ul>
                
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Browse</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </nav>
    </header>


    <div class="row justify-content-center">
    <div class="form-box">
    <div class="container mt-4 ">
           
        <div class="form">
            
            <h1><div class="row justify-content-center"> Registation Form </div></h1>

                <table>
                    <form method="post">
                        <tr>
                            <div class="mt-4">
                                
                                <td><input type="text" class="form-control" placeholder="First Name" name="name" required></td>
                                <td><input type="text" class="form-control" placeholder="Last Name" name="name" required></td>
                            </div>
                        </tr>
                
                        <tr>
                            <div class="mt-4">
                               <td> <input type="text" class="form-control" placeholder="Phone number" name="contact" required></td>
                               <td></td>
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
                                <td><label for="TR-subject"> Subject :</label></td>
                                <td><input type="checkbox" class="TR-input"  name="subject1">
                                <label for="TR-subject1"> Mathematics </label></td>
                            </div>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" class="TR-input"  name="subject2">
                                <label for="TR-subject2"> Biology </label>
                            </td>
                        <tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" class="TR-input"  name="subject3">
                                <label for="TR-subject3"> Chemistry </label>
                        </td>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" class="TR-input"  name="subject4">
                                <label for="TR-subject4"> Physics </label>
                            </td>
                        </tr>

                        <tr>
                            <tr>
                                <div class="TutorReg-1">
                                    <td><label for="TR-medium"> Medium :</label></td>
                                    <td><input type="checkbox" class="TR-input" name="medium1">
                                    <label for="TR-medium1"> Sinhala </label></td>
                                </div>
                            </tr>
                            <tr>
                                <td><td><input type="checkbox" class="TR-input" name="medium2">
                                    <label for="TR-medium2"> English </label></td></td>
                            <tr>
                            <tr>
                                <td><td><input type="checkbox" class="TR-input" name="medium3">
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

                                <td> <input type="password" class="form-control" placeholder="Enter Password" name="password"></td>
                                <td> <input type="password" class="form-control" placeholder="Re-enter Password" name="password"></td>
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
