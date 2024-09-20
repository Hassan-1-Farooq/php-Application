<?php 

require_once('db.php');

// check if the 'itemNo' parameter is set in the URL (GET request)
if (isset($_GET['itemNo'])) {

    // assign the value of 'itemNo' parameter to the $prodID variable
    $prodID = $_GET['itemNo'];

  
    $sql = "DELETE FROM products WHERE ItemNumber='$prodID'";


    if (mysqli_query($conn, $sql)) {
        // if the query is successful, display a success message, close the current window, and redirect to 'displayproducts.php' page
        print "<script>";
        print "alert('The record is successfully deleted');";
        print "window.close();";
        print 'window.location="http://localhost/COS4018-B/courseworkLogin/PHP/displayproducts.php"';
        print "</script>";
    } else {
        // if there is an error in executing the query, display the error message
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>


