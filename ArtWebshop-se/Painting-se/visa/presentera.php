<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produkter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body class="container">
<h1>Painting Shop</h1>

<?php

// Steg 1: Hämta data via en endpoint (RESTFul API)
$endpoint = "http://localhost/ArtWebshop-se/api/products/";
$data = file_get_contents($endpoint);

// echo $data;

if(empty($data)){
    echo "<h2>Problem med att hämta data!</h2>";
    exit;
}
// Steg 2: JSON -> PHP-Array
$array = json_decode($data, true);
if(!is_array($array)){
    echo "<h2>Problem med att skapa en array!</h2>";
    exit;
}
// Steg 3: Presentera info
echo "<table class='table'>";
echo "<tr> <th>ID</th><th>Product name</th> <th>Description</th> <th>Price </th> </tr>";
foreach($array as $key => $value){
    echo "<tr>";
    echo "<td>" . $value['article'] . "</td>";
    echo "<td>" . $value['pro_name'] . "</td>";
    echo "<td>" . $value['pro_desc'] . "</td>";
    echo "<td>" . $value['price'] . "</td>";
    echo "</tr>";
}

echo "</table>";

// TEST
// print "<pre>";
// print_r($array);
// print "</pre>";

?>
</body>
</html>