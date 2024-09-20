<?php 
include("../db/DB_connect1.php"); 

// Check if the 'productid' parameter is set in the GET request
if (isset($_GET['productid'])) {
    // Retrieve the value of the 'productid' parameter
    $prodID = $_GET['productid'];
    
    // Construct the SQL query to delete the record with the specified product ID
    $sql = "DELETE FROM product WHERE product_id='$prodID'";
    
    // Execute the SQL query
    if (mysqli_query($db, $sql)) {
        // If the query is successful, display a success message using JavaScript
        print "<script>";
        print "alert('The record is successfully deleted');";
        print "window.close();";
        print "</script>";
    } else {
        // If there is an error executing the query, display the error message
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
