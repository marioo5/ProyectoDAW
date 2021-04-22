<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Login</h1>
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
						<h2>Login</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form id="contactForm">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="email" class="form-control" id="email" name="email" placeholder="Introduce tu email ..." required>
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="password" placeholder="Introduce tu contraseña ..." id="pass" class="form-control" name="pass" required data-error="Please enter your email">
									<div class="help-block with-errors"></div>
								</div> 
							</div>
								<div class="submit-button text-center">
								<input type="hidden" id="submit" value="submit" name="submit">
									<button class="btn btn-common" id="submit" type="submit" value="submit">Login</button>
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
	<!-- End Contact -->