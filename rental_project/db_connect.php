<?php
// Default credentials for MAMP on Mac
$host = "localhost";
$user = "root";
$pass = "root"; // MAMP default password
$db_name = "rental_service"; // The empty DB

$con = mysqli_connect($host, $user, $pass, $db_name);

// Check connection
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>