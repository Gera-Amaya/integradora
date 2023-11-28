<?php
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

include 'conexion.php';

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios where correo='$correo' and contraseña='$contrasena'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    
    
    session_start();

    echo "Hola: " . $row["nombre"]; echo'<br>';
   /*  echo "<br>Tu tipo de usuario es:  " . $row["jerarquia"]; */
    header("Refresh:0; url=index.html");

  }
} else {
  echo "Login incorrecto";
  header("Refresh:1; url=login.html");
}
$conn->close();

?>