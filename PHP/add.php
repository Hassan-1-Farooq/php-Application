<?php
// require the db.php file which contains the database connection code
require_once('db.php');

// check if the 'Submit' button has been clicked
if (isset($_POST['Submit'])) {
 
  // assign the form input values to variables
    $itemname= $_POST['name'];
    $desc= $_POST['desc'];
    $price= $_POST['price'];

    // upload the selected photo to the 'images' folder
    move_uploaded_file($_FILES["photo"]["tmp_name"],"images/" . $_FILES["photo"]["name"]);			
    $fname=$_FILES["photo"]["name"];
    
     
    // insert the form values and photo filename into the 'products' table in the database
    $sql = "INSERT INTO  products (ItemName, Description, Price, Image)
    VALUES ('$itemname', '$desc', '$price', '$fname')";
     
     // check if the query was executed successfully
    if (mysqli_query($conn, $sql)) {

      // display success message and redirect to 'displayproducts.php' page
      echo "<script>alert('Successfully Added!!!'); window.location='displayproducts.php'</script>";
    
    } else {
      // display error message if query execution fails
    
    }
    
    // close the database connection
    mysqli_close($conn);
    }

?>