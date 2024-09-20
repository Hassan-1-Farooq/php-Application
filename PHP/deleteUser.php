<?php 
// include the db.php file which contains the database connection code
require_once('db.php');

// check if the 'customer' parameter is set in the URL (GET request)
if (isset($_GET['customer'])) {

    // assign the value of 'customer' parameter to the $use variable
    $use = $_GET['customer'];

    // create a SQL query to delete the record from the 'users' table based on the given email
    $sql = "DELETE FROM users WHERE email='$use'";

    // execute the SQL query
    if (mysqli_query($conn, $sql)) {
        // if the query is successful, display a success message, close the current window, and redirect to 'displayUsers.php' page
        print "<script>";
        print "alert('The record is successfully deleted');";
        print "window.close();";
        print 'window.location="http://localhost/COS4018-B/courseworkLogin/PHP/displayUsers.php"';
        print "</script>";
    } else {
        // if there is an error in executing the query, display the error message
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>


