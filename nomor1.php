<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "sakila";

$conn = new mysqli($servername, $username, $password, $dbName);

if($conn->connect_error){
    die("Connection failed". $conn->connect_error);
}

//INSERT DATA TABEL ACTOR
$sql = "INSERT INTO actor(first_name, last_name) 
        VALUES('Bintang', 'Fajar');"

if($conn->query($sql) === TRUE){
    echo "New record created succesfully";
} else{
    echo "Error: " . $sql . $conn->error;
}



$conn->close();
?>