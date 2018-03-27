<?php
require_once('connect.php');
// Skapa en SQL-sats
$query = "SELECT * FROM orders, product WHERE orders.article = product.article";


// Kör SQL-satsen
$table = mysqli_query($connection , $query)
or die (mysqli_error($connection));
// Visa en HTML-tabell
?>
<table class="table">
<tr> 
<th>Ordernummer</th> 
<th>Article</th> 
<th>Customer Name</th> 
<th>Email</th>
<th>Phonenumber</th>
<th>adress</th>
<th>text</th>
<th>Product name</th>
<th>Product description</th>
<th>Price</th>

</tr>
<?php while($row = $table->fetch_assoc()) { ?>
<tr>
<td><?php echo $row['ordernumber'] ?></td>
<td><?php echo $row['article'] ?></td>
<td><?php echo $row['customer_name'] ?></td>
<td><?php echo $row['email'] ?></td>
<td><?php echo $row['phonenumber'] ?></td>
<td><?php echo $row['adress'] ?></td>
<td><?php echo $row['text'] ?></td>
<td><?php echo $row['pro_name'] ?></td>
<td><?php echo $row['pro_desc'] ?></td>
<td><?php echo $row['price'] ?></td>
</tr>
<?php } ?>
</table>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>