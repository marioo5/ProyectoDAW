<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Bodegas Ruiz Alfaya</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo ROOT_PATH; ?>assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo ROOT_PATH; ?>assets/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">   
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap-icons.css">  
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/custom.css">

	<!-- CSS only -->
	
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Start header -->
<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="<?php echo ROOT_PATH; ?>">
					<img src="<?php echo ROOT_PATH; ?>assets/images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="<?php echo ROOT_PATH; ?>">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo ROOT_PATH; ?>producto">Productos</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo ROOT_PATH; ?>historia">Historia</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="dropdown-a" data-toggle="dropdown">Enoturismo</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
							<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['user_data']['rol']=='admin') : ?>
								<a class="dropdown-item" href="<?php echo ROOT_PATH; ?>horas">Horas</a>
							<?php endif; ?>
							<?php if(isset($_SESSION['is_logged_in'])) : ?>
								<a class="dropdown-item" href="<?php echo ROOT_PATH; ?>reserva">Reservas</a>
							<?php endif; ?>
								<a class="dropdown-item" href="<?php echo ROOT_PATH; ?>personal">Personal</a>
								<a class="dropdown-item" href="<?php echo ROOT_PATH; ?>galeria">Galer??a</a>
								<a class="dropdown-item" href="<?php echo ROOT_PATH; ?>enoturismo">Actividades</a>
							</div>
						</li>
						<?php if(isset($_SESSION['is_logged_in'])) : ?>
							<li class="nav-item"><a class="nav-link" href="<?php echo ROOT_PATH; ?>noticias">Noticias</a></li>
						<?php endif; ?>	
						<li class="nav-item"><a class="nav-link" href="<?php echo ROOT_PATH; ?>contact">Contacto</a></li>
						<?php if(isset($_SESSION['is_logged_in'])) : ?>
						<li class="nav-item"><a class="nav-link" href="<?php echo ROOT_PATH; ?>users/logout">Deslogearse</a></li>
						<?php else : ?>
						<li class="nav-item"><a class="nav-link" href="<?php echo ROOT_PATH; ?>users/login">Login</a></li>
						<li class="nav-item active"><a class="nav-link" href="<?php echo ROOT_PATH; ?>users/register">Registrarse</a></li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<main class="container">
  		<div class="starter-template text-center py-5 px-3">
    		<?php require ($view); ?>
  	</div>

	</main><!-- /.container -->

	<!-- End header -->
	
	<!-- Start Contact info -->
 
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Tel??fono</h4>
						<p class="lead">
							941347896
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							daw005.2021@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Direcci??n</h4>
						<p class="lead">
							Castilseco, La Rioja
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
  
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>Sobre Nosotros</h3>
					<p>Somos una bodega familiar que cultivamos nuestros propios vi??edos en una zona absolutamente privilegiada, situada en Castilseco, Rioja Alta.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Horario</h3>
					<p><span class="text-color">Lunes: </span>Cerrado</p>
					<p><span class="text-color">Martes - Jueves :</span> 10:00 - 18:30</p>
					<p><span class="text-color">Viernes - Sabado :</span> 10:00 - 19:00</p>
					<p><span class="text-color">Domingo :</span> 9:00 - 14:00</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contacto</h3>
					<p class="lead">Castilseco, La Rioja, Calle Carretera 14</p>
					<p><a href="<?php echo ROOT_PATH; ?>contact"> daw005.2021@gmail.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribete</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<a class="submit" href="<?php echo ROOT_PATH; ?>users/register">SUBSCRIBIRSE</a>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="https://www.facebook.com/bodegasruizalfaya/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/RiojaWine_ES?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.facebook.com/bodegasruizalfaya/videos/1727888157419610/"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/bodegasruizalfaya/?hl=es"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2021 <a href="#">Bodegas Ruiz Alfaya</a> Design By : 
					<a href="https://github.com/marioo5/ProyectoDAW">Mario Carreras</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->

	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

  	<script src="<?php echo ROOT_PATH; ?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo ROOT_PATH; ?>assets/js/popper.min.js"></script>
	<script src="<?php echo ROOT_PATH; ?>assets/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="<?php echo ROOT_PATH; ?>assets/js/jquery.superslides.min.js"></script>
	<script src="<?php echo ROOT_PATH; ?>assets/js/images-loded.min.js"></script>
	<script src="<?php echo ROOT_PATH; ?>assets/js/isotope.min.js"></script>
	<script src="<?php echo ROOT_PATH; ?>assets/js/baguetteBox.min.js"></script>
	<script src="<?php echo ROOT_PATH; ?>assets/js/form-validator.min.js"></script>
  	<script src="<?php echo ROOT_PATH; ?>assets/js/contact-form-script.js"></script>
  	<script src="<?php echo ROOT_PATH; ?>assets/js/custom.js"></script>

</body>
</html>

