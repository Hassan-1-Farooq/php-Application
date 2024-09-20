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
            
            <div class="navbar__toggle" id="mobile-menu">
            <span class="bar"></span> 
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
            
            
                <a href="../HTML/AdminIndex.html" class="navbar__links">MainPage</a>
            </li>
            <li class="navbar__btn"><a href="../HTML/index.HTML" 
                class="button">Sign Out</a></li>
        </ul>
        </div>
    </nav>

<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
    <div class="alert alert-info">
        <br></br> <br>
        <strong><i class="icon-user icon-large"></i></strong>
    </div>
    <thead>
        <tr>
            <th style="text-align:center;">username</th>
            <th style="text-align:center;">email</th>
            <th style="text-align:center;">password</th>
            <th style="text-align:center;">role</th>
             
        </tr>
    </thead>
    <tbody>
<?php
	require_once('db.php');
	

      $sql="SELECT * FROM users ORDER BY email";
	  $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
  
          while($row = mysqli_fetch_assoc($result)){
             $id=$row['email'];

    ?>
<tr>
    <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['username']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['email']; ?></td>
<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['password']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['role']; ?></td>
</td>
<td style="text-align:center; word-break:break-all; width:200px;"> <a href="deleteUser.php?customer=<?php echo $row ['email']; ?>"> delete user</a></td>
</tr>
<?php }
}
 ?>
</tbody>
</table>
</body>
</html>