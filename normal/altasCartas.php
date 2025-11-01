<?php
session_start();
//Estableciendo la conexión
include ("../conexion.php");
//recogida de datos
$nombreCarta=$_POST['nombre'];
$email=$_SESSION['email'];


$ima="imgCartas/".$nombreCarta.".png"; // Esto está bien para la BBDD



$consulta = "INSERT INTO cartas (nombreCarta,imagenCarta,emailUsuario) 
VALUES ('$nombreCarta','$ima','$email')";
//ejecutamos la sentencia SQL
mysqli_query($conn,$consulta);
//copiamos la imagen que nos ha llegado a su carpeta.
echo mysqli_error($conn);

// $ruta=$ima; // <-- ESTA LÍNEA ES INCORRECTA

// ¡ESTA ES LA LÍNEA CORRECTA!
// Añadimos "../" para subir un nivel (de /normal/ a la raíz)
$ruta = "../" . $ima; 

COPY($_FILES["imagen"]["tmp_name"],$ruta);
//redireccionamos a la web listados (este fichero lo debeis de crar vosotros)
mysqli_close($conn);
header ("LOCATION:indexNormal.php");
?>