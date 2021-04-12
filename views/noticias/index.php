<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Blog</h1>
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
						<h2>Blog</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
			<?php foreach($viewmodel as $item) : ?>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="blog-box-inner">
						<div class="blog-img-box">
							<img class="img-fluid" src="<?php echo "<img src='../../assets/imagves/$file_name' >"; ?>" alt="">
						</div>
						<div class="blog-detail">
							<h4><?php echo $item['titulo']; ?></h4>
							<ul>
								<li><span>27 February 2018</span></li>
							</ul>
							<p><?php echo $item['descripcion']; ?></p>
							
						</div>
					</div>
				</div>
			<?php endforeach; ?>
				
				<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['user_data']['rol']=='usuario') : ?>
				<a class="btn btn-lg btn-circle btn-outline-new-white" href="<?php echo ROOT_PATH; ?>noticias/add">Añadir Noticia</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<!-- End blog -->

	<?php foreach($viewmodel as $item) : ?>
        <div class="card card-body bg-light">
            <h3><?php echo $item['title']; ?></h3>
            <small><?php echo $item['create_date']; ?></small>
            <hr />
            <p><?php echo $item['body']; ?></p>
            <br />
            <a class="btn btn-info" href="<?php echo $item['link']; ?>" target="_blank"> Go To Website</a>
        </div>
    <?php endforeach; ?>