<?php
include("seguridad.php");
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

    <!--Contenido de la página-->
   <section>
		<div class="container ">
			<div class="row justify-content-center align-items-center ">
				<div class="col-11 col-sm-12 col-lg-11 col-xl-10 mb-4 mt-4">
					<div class="row justify-content-center titulos mt-4 mb-4">
						<div class="col-12 mt-4">
							<p class="text-center" style="font-size: 25pt;">NUEVA CARTA</p>
						</div>
						<div class="col-10">
							<hr>
						</div>

						<form method="post" action="altasCartas.php" enctype="multipart/form-data">
							<div class="row justify-content-center">
								<div class="col-12 col-md-5 mt-4">
									<div class="row justify-content-end">
										<div class="col-12">
											<div class="form-floating mb-3 ">
												<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required>
												<label for="nombre">Nombre de la carta</label>
											</div>
											<div class="form-floating mb-3 ">
												<input type="file" name="imagen" id="imagen" required />
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-10 ms-md-3 mt-2 mb-2">
									<span class="form-text text-danger small float-end">Todos los campos son obligatorios</span>
								</div>
								<div class="col-12 col-md-6 d-grid mb-4 mt-2">
									<button class="btn btn-lg" type="submit">GUARDAR CARTA</button>
								</div>
							</div>
							
						</form>
						
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