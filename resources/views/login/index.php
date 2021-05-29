<!doctype html>
<html lang="es">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/login/style.css">
	<!-- include alertify.css -->
    <link rel="stylesheet" href="css/alertify.min.css">

    <!-- include boostrap theme  -->
    <link rel="stylesheet" href="css/themes/bootstrap.min.css">

    <!-- include alertify script -->
    <script src="js/alertify.min.js"></script>

	</head>
	<body class="img js-fullheight" style="background-image: url(images/tunco.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Inicio de sesión</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">¿Tienes una Cuenta?</h3>
		      	<form class="signin-form" id="app" @submit="checkForm" novalidate="true">
					<div class="form-group">
						<input v-model="email" type="text" class="form-control" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input   type="password" v-model="pwd" id="pwd" class="form-control" placeholder="Contraseña" required>
					<span toggle="#pwd" class="fa fa-fw fa-eye field-icon toggle-password"></span>
					</div>
					<div class="form-group">
						<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
					</div>
					<div class="form-group d-md-flex">
						<div class="w-50">
							<label class="checkbox-wrap checkbox-primary">Recuerdame
								<input type="checkbox" checked>
								<span class="checkmark"></span>
							</label>
						</div>
						<div class="w-50 text-md-right">
							<a href="#" style="color: #fff" data-bs-toggle="modal" data-bs-target="#modal_req">Recuperar contraseña</a>
						</div>
					</div>
	          	</form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<!-- Modal -->
	<div class="modal fade" id="modal_req" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Recuperar contraseña</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input v-model="email" type="text" class="form-control" placeholder="Email" required style="background: black !important;">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-primary" @click="sendEmail">Recuperar contraseña</button>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<!-- include bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="js/vue.js"></script>
	<script src="js/login/myscript.js"></script>
	</body>
</html>

