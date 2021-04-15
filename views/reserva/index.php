<!-- Start All Pages -->
<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Reservas</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Reservation -->
	<div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Haz tu reserva</h2>
						<p>Reserva la actividad que más te guste</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						<form id="contactForm">
							<div class="row">
								<div class="col-md-6">
									<h3>Elige la actividad</h3>
									<div class="col-md-12">
										<div class="form-group">
										<select class="custom-select d-block form-control" id="titulo" name="titulo" required data-error="Elige una actividad">
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
											<input id="personas" name="personas" class="form-control" placeholder="Introduce el numero de personas ..." required data-error="Porfavor introduce el número de personas">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="date" id="fecha" name="fecha" class="form-control" required data-error="Porfavor introduce la fecha">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" id="person" required data-error="Please select Person">
											  <option disabled selected>Elige la hora*</option>
											  <?php foreach($viewmodel as $item) : ?>
											  <option value="<?php echo $item['Hora']; ?>"><?php echo $item['Hora']; ?></option>
											  <?php endforeach ; ?>	
											</select>
											<div class="help-block with-errors"></div>
										</div> 
									</div>
								</div>
								<div class="col-md-6">
									<h3>Detalles de Contacto</h3>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu Name" value="<?php echo $_SESSION['user_data']['name']; ?>">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Tu Email" id="email" class="form-control" name="email" value="<?php echo $_SESSION['user_data']['email']; ?>">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
								</div>
								<div class="col-md-12">
									<div class="submit-button text-center">
										<button class="btn btn-common" id="submit" type="submit">Hacer Reserva</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div> 
										<div class="clearfix"></div> 
									</div>
								</div>
							</div>            
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Reservation -->
	
	