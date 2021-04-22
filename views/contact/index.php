<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Contacto</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Contacto</h2>
						<p>Contacta sin problema con nosotros</p>
					</div>
				</div>
			</div>
			<?php 
			if(isset($_SESSION['errorMsg'])){

				echo '<div class="alert alert-danger">'.$_SESSION['errorMsg'].'</div>';
				unset($_SESSION['errorMsg']);
			}

			if(isset($_SESSION['successMsg'])){

				echo '<div class="alert alert-success">'.$_SESSION['successMsg'].'</div>';
				unset($_SESSION['successMsg']);
			}?>
			<div class="row">
				<div class="col-lg-12">
					<form method="post" action="">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu Nombre" >
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Tu Email" id="email" name="email" >
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group"> 
									<textarea class="form-control" id="mensaje" name="mensaje" placeholder="Tu Mensaje" rows="4" ></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="submit-button text-center">
								<input type="hidden" id="submit" value="submit" name="submit">
								<button class="btn btn-common" id="submit" type="submit" value="Submit">Enviar Mensaje</button>
								</div>
							</div>
						</div>            
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact -->