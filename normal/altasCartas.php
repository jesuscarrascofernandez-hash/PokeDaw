<?php
//Estableciendo la conexión
include ("../conexion.php");
//recogida de datos
$idCarta=0;
$nombreCarta=$_POST['nombre'];
$email=$_SESSION['name'];
$ima="images/".$nombreCarta.".jpg";
$consulta = "INSERT INTO cartas (idCarta,nombreCarta,imagenCarta,emailUsuario) 
VALUES ('$idCarta','$nombreCarta','$ima','$email')";
//ejecutamos la sentencia SQL
mysqli_query($conn,$consulta);
//copiamos la imagen que nos ha llegado a su carpeta.
echo mysqli_error($conn);
$ruta=$ima;
COPY($_FILES["imagen"]["tmp_name"],$ruta);
//redireccionamos a la web listados (este fichero lo debeis de crar vosotros)
mysqli_close($conn);
header ("LOCATION:indexNormal.php");
?>
