<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Beautiful Bootstrap Navbar with Menu Icons</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
	<script
		src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
		integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
		crossorigin="anonymous"></script>

	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
		integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
		crossorigin="anonymous"></script>
	<style>
		body {
			background: #eeeeee;
			font-family: 'Varela Round', sans-serif;
		}

		.navbar {
			color: #fff;
			background: #926dde !important;
			padding: 5px 16px;
			border-radius: 0;
			border: none;
			box-shadow: 0 0 4px rgba(0, 0, 0, .1);
		}

		.navbar img {
			border-radius: 50%;
			width: 36px;
			height: 36px;
			margin-right: 10px;
		}

		.navbar .navbar-brand {
			color: #efe5ff;
			padding-left: 0;
			padding-right: 50px;
			font-size: 24px;
		}

		.navbar .navbar-brand:hover,
		.navbar .navbar-brand:focus {
			color: #fff;
		}

		.navbar .navbar-brand i {
			font-size: 25px;
			margin-right: 5px;
		}

		.search-box {
			position: relative;
		}

		.search-box input {
			padding-right: 35px;
			min-height: 38px;
			border: none;
			background: #faf7fd;
			border-radius: 3px !important;
		}

		.search-box input:focus {
			background: #fff;
			box-shadow: none;
		}

		.search-box .input-group-addon {
			min-width: 35px;
			border: none;
			background: transparent;
			position: absolute;
			right: 0;
			z-index: 9;
			padding: 10px 7px;
			height: 100%;
		}

		.search-box i {
			color: #a0a5b1;
			font-size: 19px;
		}

		.navbar .nav-item i {
			font-size: 18px;
		}

		.navbar .nav-item span {
			position: relative;
			top: 3px;
		}

		.navbar .navbar-nav>a {
			color: #efe5ff;
			padding: 8px 15px;
			font-size: 14px;
		}

		.navbar .navbar-nav>a:hover,
		.navbar .navbar-nav>a:focus {
			color: #fff;
			text-shadow: 0 0 4px rgba(255, 255, 255, 0.3);
		}

		.navbar .navbar-nav>a>i {
			display: block;
			text-align: center;
		}

		.navbar .dropdown-item i {
			font-size: 16px;
			min-width: 22px;
		}

		.navbar .dropdown-item .material-icons {
			font-size: 21px;
			line-height: 16px;
			vertical-align: middle;
			margin-top: -2px;
		}

		.navbar .nav-item.open>a,
		.navbar .nav-item.open>a:hover,
		.navbar .nav-item.open>a:focus {
			color: #fff;
			background: none !important;
		}

		.navbar .dropdown-menu {
			border-radius: 1px;
			border-color: #e5e5e5;
			box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
		}

		.navbar .dropdown-menu a {
			color: #777 !important;
			padding: 8px 20px;
			line-height: normal;
			font-size: 15px;
		}

		.navbar .dropdown-menu a:hover,
		.navbar .dropdown-menu a:focus {
			color: #333 !important;
			background: transparent !important;
		}

		.navbar .navbar-nav .active a,
		.navbar .navbar-nav .active a:hover,
		.navbar .navbar-nav .active a:focus {
			color: #fff;
			text-shadow: 0 0 4px rgba(255, 255, 255, 0.2);
			background: transparent !important;
		}

		.navbar .navbar-nav .user-action {
			padding: 9px 15px;
			font-size: 15px;
		}

		.navbar .navbar-toggle {
			border-color: #fff;
		}

		.navbar .navbar-toggle .icon-bar {
			background: #fff;
		}

		.navbar .navbar-toggle:focus,
		.navbar .navbar-toggle:hover {
			background: transparent;
		}

		.navbar .navbar-nav .open .dropdown-menu {
			background: #faf7fd;
			border-radius: 1px;
			border-color: #faf7fd;
			box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
		}

		.navbar .divider {
			background-color: #e9ecef !important;
		}

		@media (min-width: 1200px) {
			.form-inline .input-group {
				width: 350px;
				margin-left: 30px;
			}
		}

		@media (max-width: 1199px) {
			.navbar .navbar-nav>a>i {
				display: inline-block;
				text-align: left;
				min-width: 30px;
				position: relative;
				top: 4px;
			}

			.navbar .navbar-collapse {
				border: none;
				box-shadow: none;
				padding: 0;
			}

			.navbar .navbar-form {
				border: none;
				display: block;
				margin: 10px 0;
				padding: 0;
			}

			.navbar .navbar-nav {
				margin: 8px 0;
			}

			.navbar .navbar-toggle {
				margin-right: 0;
			}

			.input-group {
				width: 100%;
			}
		}
	</style>
</head>

<body>
	<?php include 'administrador.php' ?>
	<div
		class="container"
		style="margin-top: 50px;">

		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalEliminar" data-bs-whatever="@mdo">ELIMINAR ESTUDIANTE</button>
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalModificarId" data-bs-whatever="@fat">MODIFICAR IDENTIFICADOR</button>
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalModificarNotas" data-bs-whatever="@getbootstrap">MODIFICAR NOTAS</button>
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalModificarNombre" data-bs-whatever="@getbootstrap">MODIFICAR NOMBRE</button>

		<div class="modal fade" id="exampleModalEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel">ELIMINAR ESTUDIANTE</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form action="eliminar2.php" method="post">
						<div class="modal-body">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Identificador:</label>
								<input type="text" class="form-control" name="identificacion" value=""><br><br>
								</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
							<button type="submit" class="btn btn-primary" onclick="eliminar()">Eliminar</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="modal fade" id="exampleModalModificarId" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel">MODIFICAR IDENTIFICADOR</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form action="modificar1.php" method="post">
						<div class="modal-body">
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Identificador:</label>
								<input type="text" class="form-control" name="identificacion" value=""><br><br>
								</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
							<button type="submit" class="btn btn-primary" onclick="Modificar()">MODIFICAR</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
	 <script>
		function eliminar(){
			alert("Estas seguro de eliminar al estudiante");
		}
		function modificar() {
			alert("Estas seguro que quieres modificar los datos del estudiante");
		}
	 </script>
</body>

</html>