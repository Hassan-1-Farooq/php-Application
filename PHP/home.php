<?php

// Check if the 'username' key is not set in the session
session_start();
if(!isset($_SESSION['username'])){
    header('location:in.php');
}


?>

<html>
    <head>
        <title> Home page</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css">

    </head>

    <body>

    <div class="container">
        <!-- Display a logout link  -->
        <a class = "float-right" href="logout.php"> LOGOUT</a>
        <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
        </div>
    </body>
</html>