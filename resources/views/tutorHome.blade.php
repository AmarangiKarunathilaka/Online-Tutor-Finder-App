<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/dashboard.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    
    
    <title>Dashboard Sidebar Menu</title> 
</head>
<body>
    <nav class="sidebar close">
        <header>

            <!-- Notification Panel -->
            <div class="notification-panel">
                <div class="notification-icon" id="notificationIcon">
                    <i class='bx bx-bell'></i>
                    <!-- <span class="badge">3</span> -->
                </div>

                <div class="notification-content">
                    <h3>Notifications</h3>
                    <ul>
                        <li></li>
                        <li>New message received</li>
                        <li>Class request accepted</li>
                        <li>Advertisement uploaded</li>
                    </ul>
                </div>
            </div>
            
            <div class="image-text">
                <span class="image">
                    <img src="{{ asset('images/f.png')}}" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Tutor</span>
                    <span class="profession">Finder System</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    
                    <input type="text">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="/tutorDashboard">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/classRequestList">
                            <i class='bx bx-user-plus icon'></i>
                            <span class="text nav-text">Class Requests</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/upload-class-material">
                            <i class='bx bx-book-open icon'></i>
                            <span class="text nav-text">Class Materials</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/advertismentUpload">
                            <i class='bx bx-file icon' ></i>
                            <span class="text nav-text">Advertisements</span>
                        </a>
                    </li>

                

                    <li class="nav-link">
                        <a href="/websiteFeedbackForm">
                            <i class='bx bx-edit icon' ></i>
                            <span class="text nav-text">Feedback</span>
                        </a>
                    </li>

                    
                    <li class="nav-link">
                        <a href="/editTutorProfile">
                            <i class='bx bx-edit icon' ></i>
                            <span class="text nav-text">Edit Profile</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="/">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
    <section class="home">

        <div class="text"></div>

       

    </section>
   

    <script src="{{ asset('js/script.js')}}"></script>

</body>
</html>