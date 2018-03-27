
<?php // Filen index.php

//Att skapa en egen tjänsteserver (Egen RESTful API)

//Steg 1: Logga in i databasen.
$db_username = 'root';
$db_password = 'root';
$db_name = 'test1';
$db_host = 'localhost';


mysqli_set_charset($connection, "utf8");

		
//connect to MySql						
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);						
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

//Steg 2: Hämta data från databasen
// Skapa en SQL-sats
$query = "SELECT * FROM product";

// Kör SQL-satsen och lagra resultatet i en variabel
$table = mysqli_query($mysqli , $query)
or die (mysqli_error($mysqli));


while($row = $table->fetch_assoc()){
$array[] = $row;
}

// Skapa en JSON-string med hjälp av funktionen
// json_encode (Returns the JSON representation of a value)

$json_string = json_encode($array, JSON_PRETTY_PRINT);
// Skriv ut JSON-Strängen
echo $json_string;

?>
