<?php
//Estableciendo la conexión
include ("conexion.php");
//recogida de datos
$email=$_POST['email'];
$contra=$_POST['pass'];
$name=$_POST['nombre'];
$rol='0';
$consulta = "INSERT INTO usuarios (email,pass,nombre,rol)  
VALUES ('$email','$contra','$name','$rol')";
//ejecutamos la sentencia SQL
mysqli_query($conn,$consulta);
//redireccionamos a la web listados (este fichero lo debeis de crar vosotros)
mysqli_close($conn);
header ("LOCATION:index.php");
exit();
?>