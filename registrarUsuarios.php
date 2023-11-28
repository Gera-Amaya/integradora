<?php
// redirecciona a sing up html 

include "conexion.php";


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido1'];
$apellido=$_POST['apellido2'];
$correo=$_POST['correo']; 
$contrasena=$_POST['contrasena'];
$fecha_nacimineto=$_POST['fecha_nacimineto'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO usuarios (nombre, apellido1, apellido2, correo, contraseña, fecha_nacimiento)
VALUES ('$nombre','$apellido','$correo','$contrasena')";


if ($conn->query($sql) === TRUE) {

  header("Refresh:0; url=login.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>