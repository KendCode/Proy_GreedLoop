<!--Regstro de agencias-->
<?php

include("../controladores/conexion.php");
// include("bloqueo.php"); 
// // Desactivar la visualización de errores
// ini_set('display_errors', 0);
// error_reporting(0)
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<title>Perfil Agencia</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../admin/css/main.css">
</head>

<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				AGENCIA <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="../admin/assets/avatars/AdminMaleAvatar.png" alt="UserIcon">
					<figcaption class="text-center text-titles">
						<?php
						// include("conexion/conexion.php");
						// session_start();
						// echo "<h2 class='display-4 fw-bolder'>".$_SESSION['admin']."</h2>";
						?>
					</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="../index.php" title="Salir del sistema" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="index(age).php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>Panel
					</a>
				</li>
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert" title="d"></i></a>
				</li>
			</ul>
		</nav>

		<!-- TODO CONTENIDO PAGINA -->
		<div class="container-fluid">
			<div class="page-header">
				<h1 class="text-titles">Registra tu Agencia</h1>
			</div>
		</div>
		<div class="container mt-5" action="../controladores/abm.php" method="post">
			<div class="row justify-content-center">
				<div class="col-md-12"> <!-- Ajusta el tamaño de la columna si es necesario -->
					<form class="shadow p-4" method="POST" enctype="multipart/form-data">
						<div class="mb-3">
							<label for="id_agencia">ID de la Agencia</label>
							<input type="text" class="form-control mx-auto" name="id_agencia" id="id_agencia" placeholder="ID de la Agencia">
						</div>
						<div class="mb-3">
							<label for="nombreAgencia">Nombre de la Agencia</label>
							<input type="text" class="form-control mx-auto" name="nombreAgencia" id="nombreAgencia" placeholder="nombre">
						</div>
						<div class="mb-3">
							<label for="descripcion">Descripción de la Agencia</label>
							<input type="text" class="form-control mx-auto" name="descripcion" id="descripcion" placeholder="descripción">
						</div>
						<div class="mb-3">
							<label for="direccion">Dirección de la Agencia</label>
							<input type="text" class="form-control mx-auto" name="direccion" id="direccion" placeholder="dirección">
						</div>
						<div class="mb-3">
							<label for="archivo">Imagen de la Agencia</label>
							<input type="file" class="form-control mx-auto" name="archivo" id="archivo">
						</div>
						<div class="mb-3 text-center">
							<input type="submit" name="btn4" value="REGISTRAR" class="btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>

	</section>
</body>

</html>