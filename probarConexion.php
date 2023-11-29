<?php

$servername = "127.0.0.1:3306";
$username = "u666007820_admin";
$password = "EduAAG2023";
$dbname = "u666007820_educatify";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 32bca7acda201d408c906e3e32546a5157e57d5b
