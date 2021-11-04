<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "sakila";

$conn = new mysqli($servername, $username, $password, $dbName);

if($conn->connect_error){
    die('Connection failed'. $conn->connect_error);
}

// insert data untuk kolom title, description, release_year, language_id, rental_duration, rental_rate, replacement_cost, last_update pada table film

$sql = "INSERT INTO film(title, description, release_year, language_id, rental_duration, rental_rate, replacement_cost, last_update) 
        VALUES('I Don't Know', 'I really don't know what should i write', 2021, 2, 10, 10);"

if($conn->query($sql) === TRUE){
    echo "New record created succesfully";
} else{
    echo "Error: " . $sql . $conn->error;
}



$conn->close();
?>