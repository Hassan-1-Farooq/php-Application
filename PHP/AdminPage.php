<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     

    <link rel="stylesheet" type="text/css" href="../css/DT_bootstrap.css">
</head>
<body>

    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
        </div>
        <thead>
            <tr>
                <th style="text-align:center;">Add Items</th>
                <th style="text-align:center;">Delete Item</th>
                <th style="text-align:center;">Add Customer</th>
                <th style="text-align:center;">Delete Customer</th>
            </tr>
        </thead>
        <tbody>
        <?php
            // database connection code
            require_once('db.php');

            // select all rows from the 'products' table in the database and order them by ItemNumber
            $sql="SELECT * FROM products ORDER BY ItemNumber ASC";
            $result = mysqli_query($conn, $sql);

            // check if there are any rows returned from the database query
            if (mysqli_num_rows($result) > 0) {
                // loop through each row returned from the database query
                while($row = mysqli_fetch_assoc($result)){
                    // assign the ItemNumber to a variable
                    $id=$row['ItemNumber'];
        ?>
                <tr>
                    <!-- display the ItemNumber, ItemName, Description and Price of the product in each row -->
                    <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['ItemNumber']; ?></td>
                    <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['ItemName']; ?></td>
                    <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['Description']; ?></td>
                    <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['Price']; ?></td>
                    <td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;">
                        <!-- display the product image, if available, or a default image if not -->
                        <?php if($row['Image'] != ""){ ?>
                            <img src="images/<?php echo $row['Image']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
                        <?php }else{ ?>
                            <img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
                        <?php } ?>
                    </td>
                </tr>
        <?php 
                }
            }
        ?>
        </tbody>
    </table>
</body>
</html>
