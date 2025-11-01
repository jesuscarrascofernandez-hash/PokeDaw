<?php
include("seguridad.php");
include("../conexion.php"); // Incluimos la conexión

// 1. OBTENER LAS CARTAS DEL USUARIO
$emailUsuario = $_SESSION['email'];
$consulta_cartas = "SELECT idCarta, nombreCarta FROM cartas WHERE emailUsuario = '$emailUsuario' ORDER BY nombreCarta ASC";
$result_cartas = mysqli_query($conn, $consulta_cartas);
// NO cerramos la conexión todavía, la necesitamos para el loop
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link href="../styles.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../img/Poke_Ball.webp">
    <title>Usuario - PokeDaw</title>
</head>

<body>
    <?php
    include("../header.php");
    include("navNormal.php");
    ?>

    <section>
        <div class="container ">
            <div class="row justify-content-center align-items-center ">
                <div class="col-11 col-sm-12 col-lg-11 col-xl-10 mb-4 mt-4">
                    <div class="row justify-content-center titulos mt-4 mb-4">
                        <div class="col-12 mt-4">
                            <p class="text-center" style="font-size: 25pt;">ELIMINAR CARTA</p>
                        </div>
                        <div class="col-10">
                            <hr>
                        </div>

                        <form method="post" action="formulario_bajas_cartas2.php">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-5 mt-4">
                                    <div class="row justify-content-end">
                                        <div class="col-12">
                                            <div class="form-floating mb-3 ">
                                                
                                                <select class="form-select" id="selectCarta" name="id_carta_a_borrar" required>
                                                    <option value="">Selecciona una carta...</option>
                                                    <?php
                                                   
                                                    while ($row = mysqli_fetch_assoc($result_cartas)) {
                                                        $id = $row['idCarta'];
                                                        $nombre = $row['nombreCarta'];
                                                        echo "<option value='$id'>$nombre</option>";
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                </select>
                                                <label for="selectCarta">Elige la carta a eliminar</label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 d-grid mb-4 mt-2" style="margin-left: 25%;">
                                    <button class="btn btn-lg" type="submit">ELEGIR CARTA</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include("../footer.php");
    ?>
	<script src="../Bootstrap/js/bootnavbar.js"></script>
    <script>
        new bootnavbar();
    </script>
    </body>
</html>