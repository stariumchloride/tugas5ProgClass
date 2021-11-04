<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "sakila";

$conn = new mysqli($servername, $username, $password, $dbName);

if($conn->connect_error){
    die('Connection failed'. $conn->connect_error);
}

// menampilkan judul film yang tidak berawalan huruf A

$sql = "SELECT title FROM film WHERE NOT title LIKE "A%";
$result = $conn->connect_error($sql);



$conn->close();
?>