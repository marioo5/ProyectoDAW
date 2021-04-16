<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Insertar Horas</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	<div class="contact-box">
  <form method="post" id="contactForm" action="Index">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Nueva Horas</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form id="contactForm">
						<div class="row">
                        <div class="col-md-12">
										<div class="form-group">
										<select class="custom-select d-block form-control" id="actividad" name="actividad" required data-error="Elige una actividad">
											  <option disabled selected>Selecciona la Actividad*</option>
											  <?php foreach($viewmodel as $item) : ?>
											  <option value="<?php echo $item['IdActividad']; ?>"><?php echo $item['Titulo']; ?></option>
											  <?php endforeach ; ?>											 
											</select>
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
              				<div class="col-md-12">
								<div class="form-group">
                                <input type="time" class="form-control" id="hora" name="hora" placeholder="Introduce la hora ...">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>

								<div class="submit-button text-center">
									<input type="hidden" id="submit" value="submit" name="submit">
									<button class="btn btn-common" id="submit" type="submit" value="Submit">Insertar Hora</button>
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