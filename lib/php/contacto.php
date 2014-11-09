
    
        <!-- B. Cuerpo ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->        	
	    
	    <div id="contacto-a">
	    	<div id="mapa">
		    	<div class="container">
		    		<h1>Ponte en contacto con nosotros.</h1>
		    	</div>
	    	</div>
	    </div>

	    <div id="lower_body">
	    	<div class="container">
	    		<div class="col-lg-6">
		    		<h3>Envíanos un Mensaje Directo</h3>
		    		<p>En <span>CONTTAX</span> será un placer trabajar con usted.</p>
		    		<span>Estamos a sus órdenes para cualquier duda o comentario.</span>
				</div>
				
				<!-- Formulario de Contacto -->
					<form method="POST" action="contact-form-submission.php" class="form-horizontal">
						<div class="col-lg-6">
							<h4>Formulario de Contacto</h4>

							<!-- Nombre Completo -->
							<div class="input-group">
								<span class="input-group-addon" for="nombre">Nombre</span>
								<input 	type="text" 
										class="form-control" 
										name="contact_name" 
										id="nombre" 
										placeholder=" Ejemplo: Juan Perez..." required>
							</div>

							<!-- Correo Electronico -->
							<div class="input-group">
								<span class="input-group-addon" for="correo">Correo</span>
								<input 	type="text" 
										class="form-control" 
										type="email" 
										name="contact_email" 
										id="email" 
										placeholder=" Ejemplo: nombre@correo.com.mx..." required>
							</div>

							<!-- Telefono-->
							<div class="input-group">
								<span class="input-group-addon" for="telefono">Teléfono</span>
								<input 	type="text" 
										class="form-control" 
										name="contact_telefono" 
										id="telefono" 
										placeholder=" Ejemplo: 811-555-1234..." >
							</div>

							<!-- Mensaje -->
							<div class="input-group">
								<span class="input-group-addon" for="mensaje">Mensaje</span>
								<textarea 	class="form-control" 
											rows="5" 
											name="contact_message" 
											id="mensaje" 
											placeholder="Escriba su mensaje en este espacio..." required>
								</textarea>
							</div>
							
							<!-- Boton de Envio -->
							<div class="form-actions">
								<input type="hidden" name="save" value="contact">
								<button type="submit" class="btn btn-md boton">Enviar</button>
							</div>

						<?php
						// check for a successful form post
						if (isset($_GET['s'])) echo "<br><div class=\"alert alert-success bold col-lg-10 \">".$_GET['s']."</div>";

						// check for a form error
						elseif (isset($_GET['e'])) echo "<br><div class=\"alert alert-danger bold col-lg-10 \">".$_GET['e']."</div>";
						?>	

						</div>
					</form>

	    	</div>
	    </div>