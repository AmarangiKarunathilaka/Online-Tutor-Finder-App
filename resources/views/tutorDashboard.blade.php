<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Web UI Design | By Code Info</title>
    <link rel="stylesheet" href="css/tutorDashboard.css">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
    rel="stylesheet"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  
</head>
  <body class="be-light">
  @extends('tutorHomeContent')
@section('content')
<section class="home">
    <header class="header">
      <div class="header_logo">
        <a href="#">Dashboard</a>
      </div>
  
      
  
      
    </header>
  
    <!-- Mian Body Section -->

    <div class="main_body">
        <div class="container">
            
     
        <div class="row d-flex justify-content-center">
                <div class="col-md-11 mt-5 pt-5">
                    <div class="row z-depth-3">
                        <div class="col-sm-4 bg-info rounded-left bg-white">
                            <div class="card-block text-center bg-white ">
                                
                                <div class="profile-card">
                                    <div class="image">
                                             
                             @foreach ($profile as $profile)
                          
                              <img  src="/profileImage/{{ $profile ->image }}" width='150' height='150' class="img-account-profile rounded-circle mb-2" alt/>
                                     
                              @endforeach
                                    </div>
                                    <div class="data">
                                        <h4>{{$profile->tutorFullName}}</h4>
                                        <span>{{$profile->subject}}</span>
                                    </div>
                                    
                                    <div class="buttons">
                                        <a href="#" class="btn">Edit</a>
                                        <input type="checkbox" id="check">
                                        @csrf
                                        @method('DELETE')
                                        <label class="show_button" for="check">Delete</label>
                                    <div class="background"></div>
                                
                                    <div class="alert_box">
                                        <div class="icon">
                                            <i class="fas fa-exclamation"></i>
                                        </div>
                                        <header>your account will be deleted permenantly!</header>
                                            
                                        <p>are you sure to proceed?</p>
                                            <div class="btns">
                                            <label for="check">Yes, Delete!</label>
                                            <label for="check">Cancel</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                            <div class="col-sm-8 bg-white rounded-right">
                                <h3 class="mt-4 text-center ">Information</h3>
                                <hr class="badge-primary mt-2 w-30">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="font-weight-bold">Email</p>
                                        <h6 class="text-muted">{{$profile->tutorEmail}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="font-weight-bold">Phone</p>
                                        <h6 class="text-muted">{{$profile->tutorPhoneNumber}}</h6>
                                    </div>
                                </div> 
                               
                                <hr class="bg-primary">
                                <div class="row">
                                    <div class="col-sm-8">
                                    <p class="font-weight-bold">Qualification</p>
                                        <h6 class="text-muted" >{{$profile->qualification}}</h6>
                                    </div>
                                    
                                </div>
                                <hr class="bg-primary">
                                <ul class="list-unstyled d-flex justify-content-center" mt-4>
                                    <li><a href="#"><i class="fab fa-facebook px-3 h4 text-info"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube px-3 h4 text-info"></i></a></li>
                                </ul>
                            </div>
                    </div>
            </div>

        </div>
          <section class="attendance">
            <div class="attendance-list">
              <h1>class Request List</h1>
              <table class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>subject</th>
                    <th>Date</th>
                    <th>Join Time</th>
                    <th>Logout Time</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>Sam David</td>
                    <td>Design</td>
                    <td>03-24-22</td>
                    <td>8:00AM</td>
                    <td>3:00PM</td>
                    <td><button>View</button></td>
                  </tr>
                  <tr class="active">
                    <td>02</td>
                    <td>Balbina Kherr</td>
                    <td>Coding</td>
                    <td>03-24-22</td>
                    <td>9:00AM</td>
                    <td>4:00PM</td>
                    <td><button>View</button></td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>Badan John</td>
                    <td>testing</td>
                    <td>03-24-22</td>
                    <td>8:00AM</td>
                    <td>3:00PM</td>
                    <td><button>View</button></td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>Sara David</td>
                    <td>Design</td>
                    <td>03-24-22</td>
                    <td>8:00AM</td>
                    <td>3:00PM</td>
                    <td><button>View</button></td>
                  </tr>
                   <tr >
                    <td>05</td>
                    <td>Salina</td>
                    <td>Coding</td>
                    <td>03-24-22</td>
                    <td>9:00AM</td>
                    <td>4:00PM</td>
                    <td><button>View</button></td>
                  </tr>
                  <tr >
                    <td>06</td>
                    <td>Tara Smith</td>
                    <td>Testing</td>
                    <td>03-24-22</td>
                    <td>9:00AM</td>
                    <td>4:00PM</td>
                    <td><button>View</button></td>
                  </tr> 
                </tbody>
              </table>
            </div>
          </section>
        </section>
  
       
        
        
  
        
        
  
      </div>
      </section>
      @endsection
      <!-- Sidebar Reviews Section -->
     <!-- <div class="sidebar1">
        <div class="row">
          <h2>Reviews</h2>
          <a href="#">See all</a>
        </div>
  
        <div class="review">
          <div class="details">
            
            <div class="title">
              <h2>Smith David</h2>
              <span>1 day ago</span>
            </div>
          </div>
          <div class="review_post">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore harum vero consectetur expedita numquam accusantium necessitatibus. Sit accusantium nobis assumenda.</p>
          </div>
        </div>
  
        <div class="review">
          <div class="details">
            
            <div class="title">
              <h2>Elyana Gomiz</h2>
              <span>1 day ago</span>
            </div>
          </div>
          <div class="review_post">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore harum vero consectetur expedita numquam accusantium necessitatibus. Sit accusantium nobis assumenda.</p>
          </div>
        </div>
  
        <div class="review">
          <div class="details">
            
            <div class="title">
              <h2>Sam Jhon</h2>
              <span>1 day ago</span>
            </div>
          </div>
          <div class="review_post">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore harum vero consectetur expedita numquam accusantium necessitatibus. Sit accusantium nobis assumenda.</p>
          </div>
        </div>
  
        <div class="review">
          <div class="details">
            
            <div class="title">
              <h2>Salina David</h2>
              <span>1 day ago</span>
            </div>
          </div>
          <div class="review_post">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore harum vero consectetur expedita numquam accusantium necessitatibus. Sit accusantium nobis assumenda.</p>
          </div>
        </div>
  
        <div class="review">
          <div class="details">
            
            <div class="title">
              <h2>Smith David</h2>
              <span>1 day ago</span>
            </div>
          </div>
          <div class="review_post">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore harum vero consectetur expedita numquam accusantium necessitatibus. Sit accusantium nobis assumenda.</p>
          </div>
        </div>
  
        <div class="review">
          <div class="details">
            
            <div class="title">
              <h2>Elyana Gomiz</h2>
              <span>1 day ago</span>
            </div>
          </div>
          <div class="review_post">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore harum vero consectetur expedita numquam accusantium necessitatibus. Sit accusantium nobis assumenda.</p>
          </div>
        </div>
  
      </div>
    </div>-->
    
   
  </body>
  </html>
  </span>