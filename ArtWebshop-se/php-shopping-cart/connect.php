<?php
// Visa varningar och felmeddelanden

ini_set("display_errors",1);

// Logga in i databasen!

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "root";
$dbName = "test1";

$connection = mysqli_connect($dbHost , $dbUser , $dbPass , $dbName);

if(!$connection){
    echo "<h1>Fel! <br>" . mysqli_connect_error() . "</h1>";
    exit;
}
// Vid problem med svenska tecken
mysqli_set_charset($connection, "utf8"); 