<?php
// 1. INCLUIR SEGURIDAD Y CONEXIÓN
include("seguridad.php");
include("../conexion.php");

// 2. COMPROBAR QUE LLEGAMOS CORRECTAMENTE
// Esta lógica SÓLO se ejecuta si se pulsa "confirmar_borrado"
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_carta_oculto'])) {
    
    $idCarta = $_POST['id_carta_oculto']; // El ID que venía del campo oculto
    $email = $_SESSION['email'];

    // 3. (Paso A) Obtener la ruta de la imagen ANTES de borrar
    $consulta_img = "SELECT imagenCarta FROM cartas WHERE idCarta='$idCarta' AND emailUsuario='$email'";
    $result_img = mysqli_query($conn, $consulta_img);

    // 4. COMPROBAR SI LA CARTA ES VÁLIDA
    if (mysqli_num_rows($result_img) == 1) {
        $row_img = mysqli_fetch_assoc($result_img);
        $ruta_a_borrar = $row_img['imagenCarta'];

        // 5. (Paso B) Borrar el registro de la Base de Datos
        $consulta_borrar = "DELETE FROM cartas WHERE idCarta='$idCarta' AND emailUsuario='$email'";
        mysqli_query($conn, $consulta_borrar);
        
        // 6. (Paso C) Borrar el archivo físico del servidor
        // La ruta ../ sube de /normal/ a la raíz
        if (file_exists("../" . $ruta_a_borrar)) {
            unlink("../" . $ruta_a_borrar);
        }
    }

    // 7. (Paso D) Redireccionar
    mysqli_close($conn);
    header("LOCATION: indexNormal.php");
    exit();

} 
// 8. LÓGICA DE ACCESO INCORRECTO (si se entra por URL)
else {
    header("LOCATION: indexNormal.php");
    exit();
}
?>