<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "sakila";

$conn = new mysqli($servername, $username, $password, $dbName);

if($conn->connect_error){
    die('Connection failed'. $conn->connect_error);
}

// menampilkan first_name dan last_name dari tabel actor

$sql = "SELECT first_name, last_name
        FROM actor;"
$result = $conn->connect_error($sql);

if($result->num_rous > 0){
    while($row = $result -> fetch_assoc()){
        echo "name = " . $row['first_name']. $row['last_name']. "\n";
    }
}else {
    echo "0 result"
}


$conn->close();
?>