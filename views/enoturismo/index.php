<!-- Start All Pages -->
<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Actividades</h1>
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
						<h2>Nuestras Actividades</h2>
						<p>Estas son las actividades que disponemos en nuestra bodega</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">Todo</button>
							<button data-filter=".catas">Catas</button>
							<button data-filter=".visitas">Visitas</button>
							<button data-filter=".comidas">Comidas</button>
						</div>
					</div>
				</div>
			</div>
				
			<div class="row special-list">
				
			<?php foreach($viewmodel as $item) : ?>
				<div class="<?php echo 'col-lg-4 col-md-6 special-grid '.$item['Tipo'];?>">
					<div class="gallery-single fix">
						<img src="<?php echo '../../assets/images/'.$item['Foto']; ?>" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4><?php echo $item['Titulo']; ?></h4>
							<p><?php echo $item['Descripcion']; ?></p>
							<h5><?php echo $item['Precio']; ?></h5>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
				
			</div>
		</div>
	</div>
	<!-- End Menu -->

	<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['user_data']['rol']=='admin') : ?>
				<div class="inner-column">
				<a class="btn btn-lg btn-circle btn-outline-new-white" href="<?php echo ROOT_PATH; ?>enoturismo/add">Añadir Actividad</a>
				</div>
	<?php endif; ?>
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Michael Strahan</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	