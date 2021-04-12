<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Insertar Noticia</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	<div class="contact-box">
  <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Nueva Noticia</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form id="contactForm">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Introduce el titulo ..." required data-error="<?php echo $errorMSG; ?>">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
              <div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Introduce tu email ..." required data-error="<?php echo $errorMSG; ?>">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
							
								<div class="submit-button text-center">
									<button class="btn btn-common" id="submit" type="submit" value="Submit">Registrarse</button>
                  					<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>home">Cancel</a>
                  					<div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div>
								</div>
							</div>
						</div>            
					</form>
				</div>
			</div>
		</div>
    </form>
	</div>