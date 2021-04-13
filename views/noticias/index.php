<?php include ('upload.php'); ?>
<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Noticias</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start blog -->
	<div class="blog-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Nuestras Noticias</h2>
						<p>Aqui podras ver las diferentes noticias sobre nuestra bodega</p>
					</div>
				</div>
			</div>
			<div class="row">
			<?php foreach($viewmodel as $item) : ?>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="blog-box-inner">
						<div class="blog-img-box">
							<img class="img-fluid" src="<?php echo '../../assets/images/'.$item['Foto']; ?>" alt="">
						</div>
						<div class="blog-detail">
							<h4><?php echo $item['Titulo']; ?></h4>
							<ul>
								<li><span><?php echo $item['Fecha']; ?></span></li>
							</ul>
							<p><?php echo $item['Descripcion']; ?></p>
							<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Eliminar</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
				<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['user_data']['rol']=='admin') : ?>
				<div class="inner-column">
				<a class="btn btn-lg btn-circle btn-outline-new-white" href="<?php echo ROOT_PATH; ?>noticias/add">Añadir Noticia</a>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<!-- End blog -->
