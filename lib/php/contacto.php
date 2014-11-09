<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta charset="utf-8">
        <meta name="description" content="Aqui va la descripcion del sitio de Conttax">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <title>Conttax - Contacto</title>

        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="author" href="humans.txt">

    </head>
    <body>

    	<!-- A. Encabezado ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->   

	<header id="header">  
		<nav class="navbar navbar-inverse">
			<div class="container">
				<a class="navbar-brand" href="http://www.conttax.com.mx/index.html">
					<img src="imgs/logo.png" class="logo" alt="Conttax - Logo">
				</a>
				<ul class="menu">
					<li><a href="/index.html">INICIO</a></li>
					<li><a href="/nosotros.html">NOSOTROS</a></li>
					<li><a href="/servicios.html">SERVICIOS</a></li>
					<li><a href="/contacto.php">CONTACTO</a></li>
				</ul>
			</div>
		</nav>
	</header>
    
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

	    <!-- D. Footer ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<div id="footer" class="">
			<div class="container">
				<div class="col-lg-5">
					<img src="imgs/logo_inv.png" alt="">
					<p>Estamos a sus órdenes para cualquier duda o comentario. </p>
					<h5 class="raleway bold"><span class="glyphicon glyphicon-phone"></span> Teléfono: +(81) 1343 4123</h5>
					<h5 class="raleway bold"><span class="glyphicon glyphicon-envelope"></span> e-mail: info@conttax.com.mx</h5>
				</div>
			</div>
		</div>
		<div id="contact">
				<div class="container">
					<div class="col-lg-4 footer_left">
						Todos los Derechos Reservados - Conttax 2013
					</div>
					<div class="col-lg-4 col-lg-offset-4 right">
						<div id="social_footer"> Encuéntranos en  
							<a href="#"><img src="imgs/facebook.png" class="footer_icon" ></a>
							<a href="#"><img src="imgs/twitter.png" class="footer_icon"></a>
							<a href="#"><img src="imgs/linkedin.png" class="footer_icon"></a>
						</div>
					</div>
				</div>
			</div>


		<!-- Scripts de ultima Carga ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
       	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>