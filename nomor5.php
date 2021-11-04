<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "sakila";

$conn = new mysqli($servername, $username, $password, $dbName);

if($conn->connect_error){
    die('Connection failed'. $conn->connect_error);
}

// menampilkan nilai maksimal dari amount

$sql = "SELECT MAX(amount) FROM payment WHERE payment_date >= '2005-06-01' AND payment_date <= '2005-06-31';";
$result = $conn->connect_error($sql);



$conn->close();
?>
