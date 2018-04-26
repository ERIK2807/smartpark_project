<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3"/>
	<title>Smartpark</title>
	<link href='https://fonts.googleapis.com/css?family=Merienda One' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat Alternates' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="css/estilo_index.css">
</head>
<body>
	<div id="contenedor"> 
		<header>
			 <video 
		       src="video/smartpark_1.mp4" autoplay loop poster="img/poster.png"/>
			</video>
			<!--<h2> Smartpark</h2>
			<h3 > sistema de aparcamiento inteligente</h3>-->
		</header>
		<nav id="navbar">
			<li><a class="active" href="http://localhost/smartpark/inicio.html">Inicio</a></li>
  			<li><a href="#aparcamientos">aparcamientos</a></li>
  			<li><a href="#comentarios">comentarios</a></li>
  			<li><a href="#equipo">Colaboradores</a></li>
		</nav>	

		<section>
			<h2 id="aparcamientos">seleccionar aparcamiento</h2>
			<a href='park1.php' class= 'estado font' >aparcamiento: park1</a>
			<a href='#' class= 'estado font' >aparcamiento: park2</a>
			<a href='#' class= 'estado font' >aparcamiento: park3</a>
			<a href='#' class= 'estado font' >aparcamiento: park4</a>
			<h3 class="caja position1 font">
				En esta sección, se encuentran las zonas de aparcamiento que estan siendo monitorizadas con cámaras para la respectiva identificación de puestos los cuales se indicarán si se encuentran libres u ocupados. <br> 
			</h3>

		</section>
		<aside>
			<h2 id='equipo' class="font">Colaboradores</h2>
			
			<div>
			<img style="vertical-align:top;" src="img/Barrero.jpg" >
			<p class="caja2 font"> 
				Director de trabajo de grado: Jaime Guillermo Barrero Perez<br>
				Magister Universidad Industrial de Santander-UIS, maestria en ingeniería area de electrónica Enero de 1990 - de 1995. Tarjeta de Control Digital en Lazo Cerrado Especialización Universidad Industrial de Santander-UIS Especialización En Docencia Universitaria Enerode1993 - de 2002. Actualmente, profesor planta de la Universidad Industrial de Santander-UIS y miembro del grupo de investigación CEMOS-UIS.
			</p>
			</div>
			
			<div>
			<img style="vertical-align:top;" src="img/Erik.jpg" >
			<p class="caja2 font"> 
				Estudiante ingeniería electrónica: Erik Fabian Vera Ortiz<br>
				Actualmente, estudiante de pregrado en la Universidad Industrial de Santander-UIS, encargado del desarrollo del presente proyecto que se realiza en el grupo de investigación CEMOS-UIS. 
			</p>
			</div>
			

		</aside>
		<footer>
			<h2 class="font">
			Todos los derechos reservados<br>
			Copyright © 2018 | Erik Fabian Vera Ortiz
			</h2>
		</footer>
	</div>

	<!-- CODIGO EN JAVA Script para efecto pegajoso-->
		<script>
		window.onscroll = function() {myFunction()};

		var navbar = document.getElementById("navbar");
		var sticky = navbar.offsetTop;
			
		function myFunction() {
  		if (window.pageYOffset >= sticky) {
    		navbar.classList.add("sticky")
  		} else {
    		navbar.classList.remove("sticky");
  		}
		}
		</script>
	
</body>
</html>
