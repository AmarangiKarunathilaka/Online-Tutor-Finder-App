<!DOCTYPE html>
<html lang="en">
<head>

<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">-->

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminstyle.css">
    <title>Student Table</title>

</head>
<body>
    
    <!--<div class="values">
        <div class="val-box">
            <i class="fas fa-user"></i>
            <div>
                <h3>1234</h3>
                <spam> New students </spam>
            </div>
        </div>
   
        <div class="val-box">
            <i class="fas fa-user"></i>
            <div>
                <h3>1234</h3>
                <spam> New Tutors </spam>
            </div>
        </div>
    </div>-->
    @extends('adminHomeContent')
    @section('content')
    <section class="home">
        <div class="text">Tutor List</div>
    


        <div class="row justify-content-center">
        <div class="form-box">
            <div class="container mt-4 ">
                
                <table class="table table-success table-striped">
                    
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">tID</th>
                        <th scope="col">tPwd</th>
                        <th scope="col">tName</th>
                        <th scope="col">tEmail</th>
                        <th scope="col">profilePicID</th>
                        <th scope="col">tContactNo</th>
                        <th scope="col">medium</th>
                        <th scope="col">qualification</th>
                        <th scope="col">payment</th>
                        <th scope="col">Accept/Remove</th>
                    </tr>
                    
                    <tr>
                        <th scope="row">1</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button type="button" class="accept">Accept </button>
                            <button type="button" class="remove">Remove</button></td>
                    </tr>
                    
                    <tr>
                        <th scope="row">2</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button type="button" class="accept">Accept </button>
                            <button type="button" class="remove">Remove</button></td>
                    </tr>
                    
                    <tr>
                        <th scope="row">3</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button type="button" class="accept">Accept </button>
                            <button type="button" class="remove">Remove</button></td>
                    </tr>
                    
                </table>
                        
            </div>
        </div>
    </div>

    </section>
    @endsection
</body>
</html>