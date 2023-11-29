<?php
// redirecciona a sing up html 

include "conexion.php";


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo']; 
$contrasena=$_POST['contrasena'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
$sql = "INSERT INTO usuarios (nombre, apellido1, correo, contraseña)
VALUES ('$nombre','$apellido','$correo','$contrasena')";
}


if ($conn->query($sql) === TRUE) {

  header("Refresh:0; url=login.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>