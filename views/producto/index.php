<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Productos</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Nuestros Vinos</h2>
						<p>Las diferentes variedades de nuestros vinos</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">Todo</button>
							<button data-filter=".blancos">Blancos</button>
							<button data-filter=".tintos">Tintos</button>
							<button data-filter=".rosados">Rosados</button>
						</div>
					</div>
				</div>
			</div>
				
			<div class="row special-list">
				<div class="col-lg-4 col-md-6 special-grid blancos">
					<div class="gallery-single fix">
						<img src="../../assets/images/img-01.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Blanco Viura Rual</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $7.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid blancos">
					<div class="gallery-single fix">
						<img src="../../assets/images/img-02.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Blanco Chardone</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $9.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid blancos">
					<div class="gallery-single fix">
						<img src="../../assets/images/img-03.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Tempranillo Blanco Rual</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $10.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid tintos">
					<div class="gallery-single fix">
						<img src="../../assets/images/img-04.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Tinto Rual Joven</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $15.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid tintos">
					<div class="gallery-single fix">
						<img src="../../assets/images/img-05.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Tinto Rual Crianza</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $18.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid tintos">
					<div class="gallery-single fix">
						<img src="../../assets/images/img-06.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Tinto Rual Reserva</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $20.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid rosados">
					<div class="gallery-single fix">
						<img src="../../assets/images/img-07.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Rosado Rual</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $25.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid tintos">
					<div class="gallery-single fix">
						<img src="../../assets/images/img-09.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Pack Tintos</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $22.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid blancos">
					<div class="gallery-single fix">
						<img src="../../assets/images/vinos-galeria.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Pack Blancos</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $24.79</h5>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Menu -->

	<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['user_data']['rol']=='admin') : ?>
				<div class="inner-column">
				<a class="btn btn-lg btn-circle btn-outline-new-white" href="<?php echo ROOT_PATH; ?>producto/add">Añadir Producto</a>
				</div>
	<?php endif; ?>
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="lead ">
						" El vino hace la vida más fácil y llevadera, con menos tensiones y más tolerancia "
					</p>
					<span class="lead">Benjamin Franklin</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	