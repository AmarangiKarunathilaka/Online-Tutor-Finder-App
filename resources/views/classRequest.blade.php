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
    
   
    @extends('studentHomeContent')
    @section('content')
   
    <div class="container1">

    <div class="row justify-content-center">
    <div class="form-box">
    <div class="container mt-4 ">
           
        <div class="form">
            
            <h1><div class="row justify-content-center"> Request</div></h1>

                <table>
                    <form action="{{ url('/tutorInput') }}" method="post">
                        @csrf 
                        <tr>
                            <div class="mt-4">
                                
                                <td><input type="text" class="form-control" placeholder="TutorName" name="TutorName" required></td>
                               
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
                        <tr>
                            <div class="TutorReg-1">
                            <td><input type="text" class="form-control" placeholder="Subject" name="subject" required></td>
                                
                            </div>
                       

                        <tr>
                            <tr>
                                <div class="TutorReg-1">
                                    <td><label for="TR-medium"> Medium :</label></td>
                                    <td><input type="radio" class="TR-input" name="medium1">
                                    <label for="TR-medium1"> Sinhala </label></td>
                                </div>
                            </tr>
                            <tr>
                                <td><td><input type="radio" class="TR-input" name="medium2">
                                    <label for="TR-medium2"> English </label></td></td>
                            <tr>
                            <tr>
                                <td><td><input type="radio" class="TR-input" name="medium3">
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
                        
                        
                        <button type="submit" name="submit" class="btn" style="font-size: 20px; text-align:center; width: 100%"> Submit </button>
                        
        
                    </form>
                
            
            </div>
        </div>
    </div>
    </div>

        </div>
@endsection
</body>
</html>
