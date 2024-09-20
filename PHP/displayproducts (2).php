<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     
    
</head>
<body>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
    </div>
    <thead>
        <tr>
            <th style="text-align:center;">Item Number</th>
            <th style="text-align:center;">item Name</th>
            <th style="text-align:center;">item Description</th>
            <th style="text-align:center;">Item Price</th>
        </tr>
    </thead>
    <tbody>
<?php
	require_once('db.php');
	

      $sql="SELECT * FROM products ORDER BY ItemNumber ASC";
	  $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
  
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

</tr>
<?php }
} ?>
</tbody>
</table>
</body>
</html>