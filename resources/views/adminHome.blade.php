<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Admin Home</title> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                <img src="{{asset('images/f.png')}}" alt="">
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
                        <a href="/adminDashboard">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/adminStudentList">
                            <i class='bx bx-user-plus icon'></i>
                            <span class="text nav-text">Student List</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/adminTutorList">
                            <i class='bx bx-user-plus icon'></i>
                            <span class="text nav-text">Tutor List</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/adminAdvertisementList">
                            <i class='bx bx-file icon' ></i>
                            <span class="text nav-text">Advertisement List</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/adminClassMaterialList">
                            <i class='bx bx-file icon' ></i>
                            <span class="text nav-text">Class Material List</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/adminClassRequestList">
                            <i class='bx bx-file icon' ></i>
                            <span class="text nav-text">Class Request List</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/adminFeedbackList">
                            <i class='bx bxs-conversation icon' ></i>
                            <span class="text nav-text">Feedback List</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/report">
                            <i class='bx bx-edit icon' ></i>
                            <span class="text nav-text">Reports</span>
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

   

    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>