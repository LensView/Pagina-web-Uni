<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
	<script src="MDB/js/mdb.min.js"></script>

	<title>BUAP</title>
</head>
<body class="bg-info">
	<header>
		<div class="container-fluid">
			<div class="row bg-info">
				<div class="col-2">
					<figure>
						<a href="../index.html"><img src="../img/buapbanner.png" class="rounded mx-auto d-block" width="50%"></a>
					</figure>
				</div>

				<div class="col-10 ">
					<nav class="navbar navbar-expand-sm bg-info navbar-dark float-right sticky-top">
						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav">
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle mr-3" href="#" id="navbardrop" data-toggle="dropdown">
										Iniciar Sesion
									</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="login.php">Estudiante</a>
										<a class="dropdown-item" href="../ingresoEscolar/php/loginCA.php">Aplicador</a>
										<a class="dropdown-item" href="../ingresoEscolar/php/loginCA.php">Coordinador</a>
									</div>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
		

		<div class="container-fluid bg-info mt-5">
			<div class="row justify-content-center">
				<div class="col-3">
					<h2 class="text-center">Iniciar Sesion</h2>
					<form>
						<div class="form-group">
							<label for="usuario">Usuario</label>
							<input type="usuario" class="form-control" id="usuario" placeholder="Ingresa usuario">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Contraseña</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu contraseña">
						</div>
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Recordarme</label>
						</div>
						<div class="float-right">
							<a href="">Recuperar contraseña</a>
						</div>
						<button type="submit" class="btn btn-success">Iniciar</button>
					</form>
				</div>
			</div>
		</div>

		<footer class="page-footer font-small bg-info mt-5">

			<!-- Footer Elements -->
			<div class="container-fluid">

				<!-- Grid row-->
				<div class="row justify-content-center">

					<!-- Grid column -->
					<div class="col-md-12 py-5">
						<div class="flex-center">

							<!-- Facebook -->
							<a class="fb-ic">
								<i class="fab fa-facebook-f fa-lg white-text mr-md-4 mr-3 fa-1x"> </i>
							</a>
							<!-- Twitter -->
							<a class="tw-ic">
								<i class="fab fa-twitter fa-lg white-text mr-md-4 mr-3 fa-1x"> </i>
							</a>
							<!-- Google +-->
							<a class="gplus-ic">
								<i class="fab fa-google-plus-g fa-lg white-text mr-md-4 mr-3 fa-1x"> </i>
							</a>
							<!--Linkedin -->
							<a class="li-ic">
								<i class="fab fa-linkedin-in fa-lg white-text mr-md-4 mr-3 fa-1x"> </i>
							</a>
							<!--Instagram-->
							<a class="ins-ic">
								<i class="fab fa-instagram fa-lg white-text mr-md-4 mr-3 fa-1x"> </i>
							</a>
							<!--Pinterest-->
							<a class="pin-ic">
								<i class="fab fa-pinterest fa-lg white-text fa-1x"> </i>
							</a>
						</div>
					</div>
					<!-- Grid column -->
				</div>
				<!-- Grid row-->
			</div>
			<!-- Footer Elements -->

			<!-- Copyright -->
			<div class="footer-copyright text-center">© 2018 Copyright:
				<a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
			</div>
			<!-- Copyright -->

		</footer>
		<!-- Footer -->
	</body>
	</html>