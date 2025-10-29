<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="./Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
	<link href="styles.css" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="img/Poke_Ball.webp">
	<title>REGISTRO - PokeDaw</title>
</head>

<body>
	<?php
	include("header.php");
	?>
	<section>
		<div class="container ">
			<div class="row justify-content-center align-items-center ">
				<div class="col-11 col-sm-12 col-lg-11 col-xl-10 mb-4 mt-4">
					<div class="row justify-content-center titulos mt-4 mb-4">
						<div class="col-12 mt-4">
							<p class="text-center" style="font-size: 25pt;">NUEVO USUARIO</p>
						</div>
						<div class="col-10">
							<hr>
						</div>

						<form method="post" action="altas.php">
							<div class="row justify-content-center">
								<div class="col-12 col-md-5 mt-4">
									<div class="row justify-content-end">
										<div class="col-12">
											<div class="form-floating mb-3 ">
												<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required>
												<label for="nombre">Nombre</label>
											</div>
											<div class="form-floating mb-3 ">
												<input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" required>
												<label for="pass">Contraseña</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-auto"></div>
								<div class="col-12 col-md-5 mt-4">
									<div class="row justify-content-start">
										<div class="col-12">
											<div class="form-floating mb-3 ">
												<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
												<label for="email">Email <span class="form-text text-muted small float-end">pokedaw@pokedaw.com</span></label>
											</div>
											<div class="form-floating ">
												<input type="password" class="form-control" id="pass2" name="pass2" placeholder="Confirma tu contraseña" required>
												<label for="pass2">Confirma tu contraseña</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-10 ms-md-3 mt-2 mb-2">
									<span class="form-text text-danger small float-end">Todos los campos son obligatorios</span>
								</div>
								<div class="col-12 col-md-6 d-grid mb-4 mt-2">
									<button class="btn btn-lg" type="submit">CREAR CUENTA</button>
								</div>
							</div>
							
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include("footer.php"); ?>
</body>

</html>