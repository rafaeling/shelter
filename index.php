
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Shelter</title>
		<meta charset="utf-8">
		<meta name="author" content="pixelhint.com">
		<meta name="description" content="Magnetic is a stunning responsive HTML5/CSS3 photography/portfolio website template"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
	    <script type="text/javascript" src="js/jquery.js"></script>
	    <script type="text/javascript" src="js/main.js"></script>
	</head>

	<body>

		<header>
			<div class="logo">
				<a href="index.php"><img src="img/logo.png" alt="Shelter" width="133" height="96" title="Shelter"/></a>
			</div><!-- end logo -->

			
		</header>

		<div id="menu">

			<div id="menu_icon"></div>
			<nav>
				<ul>
					<li id="menu_bottom"><a href="index.php?t=animales">Gestionar Animales</a></li>
					<li id="menu_bottom"><a href="index.php?t=usuarios">Gestionar Usuarios</a></li>
					<li id="menu_bottom"><a href="index.php?t=adopciones">Gestionar Adopciones</a></li>
					<li id="menu_bottom"><a href="index.php?t=acogidas">Gestionar Acogidas</a></li>
					<li id="menu_bottom"><a href="index.php?t=eventos">Gestionar Eventos</a></li>
					<li id="menu_bottom"><a href="index.php?t=recursos">Gestionar Recursos</a></li>
				</ul>
			</nav><!-- end navigation menu -->

			<div class="footer clearfix">

				<ul class="social clearfix">
					<li><a href="#" class="fb" data-title="Facebook"></a></li>
					<li><a href="#" class="google" data-title="Google +"></a></li>
					<li><a href="#" class="behance" data-title="Behance"></a></li>
					<!--<li><a href="#" class="twitter" data-title="Twitter"></a></li>
					<li><a href="#" class="dribble" data-title="Dribble"></a></li>-->
					<li><a href="#" class="rss" data-title="RSS"></a></li>
				</ul><!-- end social -->

				<div class="rights">
					<p>Copyright © 2015 Shelter.</p>
				</div><!-- end rights -->
			</div ><!-- end footer -->	

		</div>


		<div class="content">
			<div class="formulario">
	



			<?php
				//$t = $_GET["t"];
		
				$t = isset($_GET["t"]) ? $_GET["t"] : '';
		
				if ($t == "acogidas") {
		
					include 'content/gestionar_acogidas.php';
			
				}else if ($t == "adopciones") {
		
					include 'content/gestionar_adopciones.php';
			
				}else if ($t == "animales") {
		
					include 'content/gestionar_animales.php';
			
				}else if ($t == "eventos") {
		
					include 'content/gestionar_eventos.php';
			
				}else if ($t == "recursos") {
		
					include 'content/gestionar_recursos.php';
			
				}else if ($t == "usuarios") {
		
					include 'content/gestionar_usuarios.php';
			
				}else if ($t == "nuevo_animal") {
		
					include 'content/animal/nuevo_animal.php';
			
				}else if ($t == "modificar_animal") {
		
					include 'content/animal/modificar_animal.php';
			
				}else if ($t == "modificar_usuario") {
		
					include 'content/usuario/modificar_usuario.php';
			
				}else if ($t == "nuevo_usuario") {
		
					include 'content/usuario/nuevo_usuario.php';
			
				}else if ($t == "nueva_adopcion") {
		
					include 'content/adopciones/nueva_adopcion.php';
			
				}else if ($t == "nueva_acogida") {
		
					include 'content/acogidas/nueva_acogida.php';
			
				}else if ($t == "modificar_evento") {
		
					include 'content/eventos/modificar_evento.php';
			
				}else if ($t == "nuevo_evento") {
		
					include 'content/eventos/nuevo_evento.php';
			
				}else if ($t == "nueva_donacion") {
		
					include 'content/recursos/nueva_donacion.php';
			
				}else if ($t == "asignar_recursos") {
		
					include 'content/recursos/asignar_recursos.php';
			
				}else if ($t == "recursos_eventos") {
		
					include 'content/recursos/recursos_eventos.php';
			
				}else if ($t == "ingresar_usuario") {
		
					include 'content/recursos/ingresar_usuario.php';
			
				}else if ($t == "realizar_pago") {
		
					include 'content/recursos/realizar_pago.php';
			
				}else if ($t == "dar_baja_animal") {
		
					include 'content/animal/dar_baja_animal.php';
			
				}else if ($t == "dar_baja_usuario") {
		
					include 'content/usuario/dar_baja_usuario.php';
			
				}else if ($t == "enviar_evento_usuario") {
		
					include 'content/usuario/enviar_evento_usuario.php';
			
				}else if ($t == "enviar_factura_usuario") {
		
					include 'content/usuario/enviar_factura_usuario.php';
			
				}else if ($t == "modificar_adopcion") {
		
					include 'content/adopciones/modificar_adopcion.php';
			
				}else if ($t == "modificar_adopcion") {
		
					include 'content/adopciones/modificar_adopcion.php';
			
				}else if ($t == "modificando") {
		
					include 'content/animal/modificando.php';
			
				}


				



			?>



		
			</div>
		</div>
	
	</body>
</html>
