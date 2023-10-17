<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="login.css">

    <title>Tutor4U Login</title>
</head>
<body>
    <header>
        <h1>Tutor 4U</h1>
        <nav>
            <ul>
                
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Browse</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="registration.html">Register</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>Login</h2>
                    <div class="input-box">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" required>
                        <label for="">User Name</label>
                    </div>
                    <div class="input-box">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember me  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="">Forget Password</a></label>
                        
                    </div>
                    <button>Submit</button>
                    <div class="register">
                        <p>New Member <a href="">Registration here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>