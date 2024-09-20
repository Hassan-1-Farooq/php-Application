<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<nav class="navbar">
        <!-- the border for the logo -->
        <div class="navbar__container">
            <!-- website logo -->
            <a href="/" id="navbar__logo"> <i class="fa-sharp fa-regular fa-gem fa-lg"></i>TECHWAVE</a>
            
            <!-- Mobile menu toggle button -->
            <div class="navbar__toggle" id="mobile-menu">
            <span class="bar"></span> 
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="navbar__menu">

        <div class="search-box">
                    <input class="search-txt" type="text" name="" placeholder="What are you looking for?">
                    <a class="search-btn" href="">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
        
            <li class="navbar__btn"><a href="../HTML/AdminIndex.html" 
                class="button">Sign out</a></li>
</ul>
        </div>
    </nav>
    <br>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
    <div class="alert alert-info">
    <a href="../HTML/FormsToAddItems.html">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong><i class="icon-user icon-large"></i></strong>
    </a></div>
    <thead>
        <tr>
            <th style="text-align:center;">Item Number</th>
            <th style="text-align:center;">item Name</th>
            <th style="text-align:center;">item Description</th>
            <th style="text-align:center;">Item Price</th>
            <th style="text-align:center;">Delete item</th>
             
        </tr>
    </thead>
    <tbody>
<?php
	require_once('db.php');
	

      $sql="SELECT * FROM products ORDER BY ItemNumber ASC";
	  $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {

            // Loop through each item and display it in a row
          while($row = mysqli_fetch_assoc($result)){
             $id=$row['ItemNumber'];

    ?>
<tr>
    <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['ItemNumber']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['ItemName']; ?></td>
<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['Description']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['Price']; ?></td>
<td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;">
	<?php if($row['Image'] != ""){ ?>
	<img src="images/<?php echo $row['Image']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
	<?php }else{ ?>
	<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
	<?php } ?>
</td>
<td style="text-align:center; word-break:break-all; width:200px;"> <a href="deleteItem.php?itemNo=<?php echo $row ['ItemNumber']; ?>"> delete item</a></td>
</tr>
<?php }
}
 ?>
</tbody>
</table>
</body>
</html>