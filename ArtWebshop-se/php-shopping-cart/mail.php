<?php
// Hämta data från formuläret via metoden POST
$customer_name = $_POST['customer_name'];
$phonenumber = $_POST['phonenumber'];
$email    = $_POST['email'];
$adress    = $_POST['adress'];
$text    = $_POST['texten'];
$article = $_POST['article'];
$pro_name = $_POST['pro_name'];
$price = $_POST['price'];



echo "<h2>Hi " . $customer_name ."! Your order will be sent!  </h2>"; 
echo "<img src='images/$img' alt=''>";


// Hämta innehållet i filen connect.php
// En enda gång (ONCE)
// require visar ett felmeddelande om filen saknas
require_once('connect.php');
// Hämta data från POST-Arrayen



// Förberedd en SQL-sats
$sql = "INSERT INTO orders (`article`, `customer_name`, `email`, `phonenumber`, `adress`, `text`) 
VALUES ('$article', '$customer_name', '$email', '$phonenumber', '$adress', '$text')";

 
    

// Exekvera (kör) SQL-satsen
mysqli_query($connection , $sql) or die(mysqli_error($connection));

// Gå till startsidan (index.php)
//header('Location: index.php');




/*
print "<hr><pre> ";
print_r($_POST);
print "</pre>";
*/