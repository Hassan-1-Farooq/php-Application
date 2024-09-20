<html>
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0//css/font-awesome.min.css">
    </head>
    <body>

    
    <!-- *the background of the page* -->
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                     <div id="btn"></div>
                     <button type="button" class="toggle-btn"onclick="login()">Log In</button>
                     <button type="button" class="toggle-btn"onclick="register()">Register</button>
                </div>
            
                <!-- Login card -->
            <form action="validation.php" method="post" id = "login" class="input-group">
                <input type="text" name = "user" class="input-field" placeholder="Username" required>
                <input type="password" name = "password" class="input-field" placeholder="Password" required> 
                <input type="checkbox" class="check-box"> <span>Remember Password</span>
                <button type="submit" class="submit-btn">Log in</button>
            </form>


            <!-- Registration card -->
            <form action="registration.php" method="post" id = "register" class="input-group">
                <input type="text" name= "user" class="input-field" placeholder="Username" required>
                <input type="email" name = "eee" class="input-field" placeholder="Email Address" required>
                <input type="password" name = "password" class="input-field" placeholder="Password" required>
                <input type="text" name = "role" class="input-field" placeholder="Role" required>
                <input type="checkbox" class="check-box"> <span>I agree to the terms & conditions</span>
                <button type="submit" class="submit-btn">Register</button>
            </form>



        </div>

            </div>
            <script src= "../JavaScript/app.js">
                
            </script>

</body>
</html>