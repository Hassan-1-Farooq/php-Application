<?php

require_once('db.php');

// Retrieve values from the form
$name = $_POST['user'];
$pass = $_POST['password'];
$eee = $_POST['eee'];
$role = $_POST['role'];

// Check if the username already exists in the database
$s = "SELECT * FROM users WHERE username = '$name'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

// If the username already exists, display an alert and close the window
if ($num == 1) {
    print "<script>";
    print "alert('Login already taken');";
    print "window.close();";
    print 'window.location="http://localhost/COS4018-B/courseworkLogin/PHP/in.php"';
    print "</script>";
} else {
    // Insert the new user into the database
    $reg = "INSERT INTO users (username, email, password, role) VALUES ('$name', '$eee', '$pass', '$role')";
    mysqli_query($conn, $reg);
    header('location:in.php'); // Redirect to another page
}
?>
