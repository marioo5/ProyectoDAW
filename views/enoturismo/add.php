<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Insertar Actividad</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	<div class="contact-box">
  <form method="post" enctype="multipart/form-data" action="upload">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Nuevo Actividad</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form id="contactForm">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Introduce el titulo ..." required>
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>

              				<div class="col-md-12">
								<div class="form-group">
									<textarea class="form-control" id="textarea_com" name="descripcion" placeholder="Introduce una descripcion ..." required rows="4"></textarea>
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>

							<div class="col-md-12">
									<div class="form-group">
										<select class="custom-select d-block form-control" id="tipo" name="tipo" required data-error="Selecciona el tipo de vino">
											  <option disabled selected>Elige el tipo de Actividad*</option>
											  <option value="catas">Catas</option>
											  <option value="visitas">Visitas</option>
											  <option value="comidas">Comidas</option>
										</select>
										<div class="help-block with-errors"></div>
									</div> 
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" id="precio" name="precio" required placeholder="Introduce el precio ..." >
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<input class="form-control" id="foto" name="foto" type="file" required/>
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
								<div class="submit-button text-center">
									<input type="hidden" id="submit" value="submit" name="submit">
									<button class="btn btn-common" id="submit" type="submit" value="Submit">Insertar Actividad</button>
                  					<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>producto">Cancel</a>
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