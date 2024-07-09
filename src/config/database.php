<?php
$servername = "localhost";
$username = "root";
$password = "meli123";
$dbname = "task-minder";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully<br>";

//script atau function yang mau dijalanin



// $conn->close(); //putus connection sm phpmyadmin
