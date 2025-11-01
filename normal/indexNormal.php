<?php
include("seguridad.php");
include("../conexion.php");
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
	<!--Cabecera-->
	<?php

	include("../header.php");
	include("navNormal.php");

	?>

	<!--Barra de navegación-->

	<!--Contenido de la página-->
	<section>
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-12 mb-5 mt-3">
					<div class="row justify justify-content-center titulos mt-5 mb-4">
						<div class="col-12 mt-5">
							<p class="h2 text-center">Hola, <?php echo $_SESSION['name']; ?></p>
							<h4 class="text-center">Tus cartas:</h4>
							<hr>
						</div>
						<div class="cartas-container col-8 mt-4">
							<?php
							//Lógica del fichero
							$email = $_SESSION['email'];
							$consulta = "SELECT * FROM cartas where emailUsuario='$email'";

							$result = mysqli_query($conn, $consulta);

							while ($row = mysqli_fetch_array($result)) {
								$ruta = $row['imagenCarta'];
								$nombre = htmlspecialchars($row['nombreCarta']); // Seguridad contra inyección HTML
								echo "<div class='carta-item text-center'>
            						<img class='carta' src='$ruta' width='250' alt='$nombre'>
            						<p class=' mt-2'><strong>$nombre</strong></p>
        							</div>";
							}


							//Cerramos la conexión
							mysqli_close($conn);
							?>

						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- footer -->
	<?php

	include("../footer.php");


	?>

	<script src="../Bootstrap/js/bootnavbar.js"></script>
	<script>
		new bootnavbar();
	</script>

</body>

</html>