<!DOCTYPE html>
<html lang="en">
<!-- VISUALIZACIÓN EN IE -->
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<head>
	<title>Innovación Organizacional</title><!-- Título del documento -->
	<meta charset="utf-8"><!-- Codificación UTF-8 para aceptar acentos -->
	<!-- Tamaño de visor mínimo para activar "responsiveness" -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<!-- Carga de Hojas de Estilo -->
	<link rel="stylesheet" href="css/hola.css">
</head>
<body>
	<!-- Barra de Navegación -->
	<nav class="navbar navbar-default navbar-static" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" alt="IOConsultores" id="logo">
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<div class="navbar-left"></div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#escencia">Nosotros</a></li>
					<li><a href="#contacto">Contacto</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<!-- Carrusel -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		</ol><!-- Termina Indicators -->

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<!-- Slide 1 -->
			<div class="item active">
				<div id="slider1" class="slider-bg">
					<div class="carousel-caption">
						<div class="jumbotron">
							<h1>Innovación <br> para todos triunfar</h1>
						</div>
					</div>
				</div>
			</div>
			<!-- Slide 2 -->
			<div class="item">
				<div id="slider2" class="slider-bg">
					<div class="carousel-caption">
						<div class="jumbotron">
							<h1>Impacta positivamente tus indicadores de éxito</h1>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
			<!-- Termina Controls -->
			
		</div><!-- Termina Carousel Inner -->
	</div><!-- Termina Carrusel -->

	<!-- Escencia -->
	<div id="escencia" class="container">
		<!-- Encabezado de Bloque -->
		<div class="header">
			<h3>ESCENCIAS DE CONSULTORÍA</h3>
		</div>
		
		<div class="row">
			<!-- Circle 1 -->
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<div class="circle">
						<!-- Icon -->
						<img src="img/ico1.png">

					</div>
					<div class="caption">
						<p>Diseño de experiencias de aprendizaje</p>
					</div>
				</div>
			</div>	

			<!-- Circle 2 -->
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<div class="circle">
						<!-- Icon -->
						<img src="img/ico2.png">
					</div>
					<div class="caption">
						<p>Teatro laboral y <br> psicodrama educativo</p>
					</div>
				</div>
			</div>
			<!-- Circle 3 -->
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<div class="circle">
						<!-- Icon -->
						<img src="img/ico3.png">
					</div>
					<div class="caption">
						<p>Inyección de <br> innovación pura</p>
					</div>
				</div>
			</div>

			<!-- Circle 4 -->
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<div class="circle">
						<!-- Icon -->
						<img src="img/ico4.png">
					</div>
					<div class="caption">
						<p>Confección de eventos<br> institucionales</p>
					</div>
				</div>
			</div>

		</div>
	</div><!-- Termina Escencia  -->

	<!-- Contacto -->
	<div id="contacto">
		<div class="container">
			<!-- Encabezado de Bloque -->
			<div class="header">
				<h3>CONTACTO</h3>
			</div>
					<?php
		// check for a successful form post
		if (isset($_GET['s'])) echo "<br><div class=\"alert bold col-lg-10 \" style=\"text-align:center;\">".$_GET['s']."</div>";
		// check for a form error
		elseif (isset($_GET['e'])) echo "<br><div class=\"alert alert-danger bold col-lg-10 \" style=\"text-align:center;\">".$_GET['e']."</div>";
		?>	
			<!-- Primer Columna -->
			<div class="col-sm-12 col-lg-6 col-lg-offset-3">
				<form class="form" method="POST" action="contact-form-submission.php" >

								<input 	type="text" 
										class="form-control" 
										name="contact_name" 
										id="nombre" 
										placeholder=" Ejemplo: Juan Perez..." required>
							
								<input 	type="text" 
										class="form-control" 
										type="email" 
										name="contact_email" 
										id="email" 
										placeholder=" Ejemplo: nombre@correo.com.mx..." required>

								<input 	type="text" 
										class="form-control" 
										name="contact_telefono" 
										id="telefono" 
										placeholder=" Ejemplo: 811-555-1234..." >

								<textarea 	class="form-control" 
											rows="6" 
											name="contact_message" 
											id="mensaje" 
											placeholder="Escriba su mensaje en este espacio..." required>
								</textarea>
							
							<!-- Boton de Envio -->
							<div class="form-actions">
								<input type="hidden" name="save" value="contact">
								<button type="submit" class="btn btn-md boton">Enviar</button>
							</div>
				</form>					
					</div>

			</div>
		</div><!-- Termina Contacto -->
		</div>

		<!-- Footer -->
		<div class="footer">
			<div class="container">
				<img src="img/logob.png">
				<p class="texto-footer"> <small>Todos los derechos reservados</small>
				</p>
			</div>
		</div><!--  End Footer  -->
		
		<!-- Carga de Javascripts al final para evitar carga lenta -->
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>	

</body>
</html>