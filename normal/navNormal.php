<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="main_navbar">
	<div class="container-fluid">

		
		<div class="container">
			<div class="row justify-content-between">

				<div class=" col-2 nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button">
						<i class="bi bi-file-earmark-post-fill">Mis Cartas</a></i>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#">Ver mis cartas</a></li>
						<li><a class="dropdown-item" href="formulario_altas_cartas.php">Añadir cartas</a></li>			
					</ul>
					</li>
				</div>

				<div class="col-2 nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button">
						<i class="bi bi-person-fill"> <?php echo $_SESSION['name']; ?></a></i>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="cerrarSesion.php">Cerrar sesión</a></li>
					</ul>
					</li>
				</div>

			</div>
		</div>
</nav>