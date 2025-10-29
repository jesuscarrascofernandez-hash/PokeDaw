<?php
// consultas.php
function anadirUsuario($email, $nombre, $pass) {
    // Conexión a la base de datos
    $conn = new mysqli("localhost", "usuario", "contraseña", "basededatos");


    
    $stmt = $conn->prepare("INSERT INTO usuarios (email, pass, nombre,rol) VALUES ('$email','$pass','$nombre',0)");

    $stmt->close();
    $conn->close();
}
?>
