<?php
include("seguridad.php");
include("../conexion.php");

// 1. COMPROBAR QUE LLEGAMOS CORRECTAMENTE
// Esta página SOLO debe cargarse si se envía un ID desde el formulario anterior
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_carta_a_borrar'])) {

	$idCarta = $_POST['id_carta_a_borrar'];
	$email = $_SESSION['email'];

	// 2. BUSCAR LOS DATOS DE LA CARTA
	// Buscamos los datos de la carta seleccionada
	$consulta = "SELECT nombreCarta, imagenCarta FROM cartas WHERE idCarta='$idCarta' AND emailUsuario='$email'";
	$result = mysqli_query($conn, $consulta);

	// 3. COMPROBAR SI LA CARTA ES VÁLIDA
	if (mysqli_num_rows($result) == 1) {
		$carta = mysqli_fetch_assoc($result);
		$nombreCarta = $carta['nombreCarta'];
		$imagenCarta = $carta['imagenCarta'];
	} else {
		// Si no se encuentra (o no es del usuario), redirigir al paso 1
		header("LOCATION: formulario_bajas_cartas.php");
		exit();
	}
	mysqli_close($conn);
}
// 4. LÓGICA DE ACCESO INCORRECTO (si se entra por URL)
else {
	header("LOCATION: formulario_bajas_cartas.php");
	exit();
}
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
	<title>Confirmar Borrado - PokeDaw</title>
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
							<p class="text-center" style="font-size: 25pt;">CONFIRMAR BORRADO</p>
						</div>
						<div class="col-10">
							<hr>
						</div>

						<form method="post" action="bajasCartas.php">
							<div class="row justify-content-center text-center">

								<p class="h4 mt-3">¿Estás seguro de que quieres borrar esta carta?</p>

								<h3 class="mt-3" style="color: var(--marron-claro);">
									<?php echo $nombreCarta; ?>
								</h3>
								<div class="col-12 d-flex justify-content-center mt-3">
									<img src="<?php echo $imagenCarta; ?>" alt="<?php echo $nombreCarta; ?>" style="max-width: 300px; border-radius: 10px; border: 3px solid var(--marron-claro);">
								</div>


								<div class="col-12 col-md-4 d-grid mb-4 mt-4">
									<button class="btn btn-lg" type="submit" name="confirmar_borrado">SÍ, BORRAR CARTA</button>
								</div>
								<div class="col-12 col-md-4 d-grid mb-4 mt-4">
									<a class="btn btn-lg" href="formulario_bajas_cartas.php" role="button">NO, CANCELAR</a>
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