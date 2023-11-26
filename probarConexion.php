<?php
session_start();
$gamertag=$_SESSION["gamertag"];

include "conexion.php";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM gamepass where gamertag='$gamertag'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Hola: " . $row["nickname"]; echo'<br>';
    echo "<br>Tu tipo de usuario es:  " . $row["jerarquia"];
  }
} else {
  echo "0 results";
}
$conn->close();

?>