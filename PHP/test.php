<?php

session_start();

require_once ('db.php');

if (isset($_POST['add_to_cart'])) {

    if (isset($_SESSION['cart'])) {

        $session_array_ItemNumber = array_column($_SESSION['cart'], "ItemNumber");



        if (!in_array($_GET['ItemNumber'], $session_array_ItemNumber)) {
            $session_array = array(
                "ItemNumber" => $_GET['ItemNumber'],
                "ItemName" => $_POST['ItemName'],
                "Price" => $_POST['Price'],
                "quantity" => $_POST['quantity']
            );

        }
        
    } else {

        $session_array = array(
            "ItemNumber" => $_GET['ItemNumber'],
            "ItemName" => $_POST['ItemName'],
            "Price" => $_POST['Price'],
            "quantity" => $_POST['quantity']
        );

        $_SESSION['cart'][] = $session_array;
    }
}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Shopping cart</title>
    <link rel="stylesheet" type = "text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/> 

     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css"/>
</head>
<body>
 <!-- Navbar Section -->
 <nav class="navbar">
        <!-- the border for the logo -->
        <div class="navbar__container">
            <!-- website logo -->
            <a href="/" id="navbar__logo"> <i class="fa-sharp fa-regular fa-gem fa-lg"></i>TECHWAVE</a>
              
            
            <div class="navbar__toggle" id="mobile-menu">
            <span class="bar"></span> 
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="navbar__menu">


                
                <div class="search-box">
                    <input class="search-txt" type="text" name="" placeholder="What are you looking for?">
                    <a class="search-btn" href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
           
            <li class="navbar__btn"><a href="index.html" 
                class="button">Sign Out</a></li>
        </ul>
        </div>
    </nav>

<div class="container-fluid"></div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
       <br>
</br>
                
                <div class="col-md-12">
                    <div class = "row">

                   

                <?php
                $query = "SELECT * FROM products";
                $result = mysqli_query($conn,$query);



                while ($row = mysqli_fetch_array($result)) {?>
                <div class = "col-md-4">
                    <form method="post" action= "test.php?ItemNumber=<?=$row['ItemNumber'] ?>">
                        <img src = "../images/<?= $row['Image'] ?>" style ='height: 150px; width: 150px;'>
                        <h5 class = "text/center"><?= $row['ItemName']; ?></h5>
                        <h5 class = "text/center">$<?= number_format($row['Price'],2); ?></h5>
                        <input type="hidden" name="ItemName" value="<?= $row['ItemName'] ?>">
                        <input type="hidden" name="Price" value="<?= $row['Price'] ?>">
                        <input type="number" name="quantity" value="1" class="form-control">
                        <input type="submit" name="add_to_cart" class="btn btn-warning btn-block my-2" 
                        value = "Add To Cart">

                    </form>
                </div>


               <?php }

        
        
        
        
                 ?>
                    </div>
                </div>
           </div>
           
            </div>
        </div>
    </div>
</div>
    
</body>
</html>