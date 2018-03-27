<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Art Shop</title>
  </head>
  <body class="container">
    <h1>Art shop</h1>

<?php 

require_once('connect.php');

$query = "SELECT * FROM product";

$table = mysqli_query($connection,$query)
or die(mysqli_error($connection));

?>


<table class="table">
<tr> 
    <th>Name</th> 
    <th>Price</th> 
    <th>Picture</th>
    <th>Description</th>
    <th> </th>
</tr>

<?php while($row = $table->fetch_assoc()) : ?>


<tr>
<td><?php  echo $row['pro_name'] ?></td>
<td><?php  echo $row['price'] ?></td>
<td><?php echo "<img src='images/" . $row['pro_img'] . "' alt=''>"; ?>
<td><?php  echo $row['pro_desc'] ?></td>
</td>



<form action="kontaktform.php" method="post">
<td><input type="hidden" name="pro_name" value="<?php echo $row['pro_name']?>"></td>
<td><input type="hidden" name="price" value="<?php echo $row['price']?>"></td>
<td><input type="hidden" name="pro_desc" value="<?php echo $row['pro_desc']?>"></td>
<td><input type="hidden" name="pro_img" value="<?php echo $row['pro_img']?>"></td>
<td><input type="hidden" name="article" value="<?php echo $row['article']?>"></td>
<td><input type="hidden" name="ordernumber" value="<?php echo $row['ordernumber']?>"></td>
<td><input type="submit" value="Buy" class=btn btn-outline-danger"></td>
</form>

</tr>

<?php 
// echo "<pre>";
// print_r($row);
// echo "</pre>";
endwhile; ?>

</table>

  
</body>
</html>

<?php 



?>