<?php

require_once('db.php');

// Retrieve values from the form
$name = $_POST['user'];
$pass = $_POST['password'];

// Check if the username and password combination exists in the database
$s = "SELECT * FROM users WHERE username = '$name' AND password = '$pass'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

// Retrieve the role of the user from the database
while ($row = mysqli_fetch_assoc($result)) {
    $role = $row["role"];
}

// Check the login credentials and role to determine the appropriate action
if ($num == 1 && $role == 0) {
    // If the login is correct and the role is 0 (regular user), set the session variable and redirect to productTest.php
    $_SESSION['username'] = $name;
    header('location:productTest.php');
} elseif ($num == 1 && $role == 1) {
    // If the login is correct and the role is 1 (admin), set the session variable and redirect to AdminIndex.html
    $_SESSION['username'] = $name;
    header('location:../HTML/AdminIndex.html');
} else {
    // If the login is incorrect, display an alert message and close the window
    print "<script>";
    print "alert('Incorrect Login');";
    print "window.close();";
    print 'window.location="http://localhost/COS4018-B/courseworkLogin/PHP/in.php"';
    print "</script>";
}
?>
