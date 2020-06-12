<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
<section id="contact_page">
	<div class="container">
		<div class="center">
			<br><br><br>

		</div>
		<div class="row contact-wrap">
			<div class="col-md-8 col-md-offset-wrap">
				<form role="from" name="ch" action="php/controller/action_ch_pswd.php" method="POST" class="contactForm">
					<div class="for-group">
						<label for="oldPSWD">Contraseña Actual</label>
						<input type="text"  id="oldPSWD" name="oldPSWD" class="form-control" placeholder="Contraseña Actual" required>
					</div>
					<div class="for-group">
						<label for="newPSWD">Nueva Contraseña</label>
						<input type="text"  id="newPSWD" name="newPSWD" class="form-control" placeholder="Nueva Contraseña" required>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary btn-lg">Actualizar</button>						
					</div>
				</form>
			</div>
		</div>
	</div>
</section>