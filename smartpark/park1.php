<html>
	<head>
		<title>Park1</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=4"/>
		<meta HTTP-EQUIV="REFRESH" CONTENT="5;URL=park1.php"> 
		<link href='https://fonts.googleapis.com/css?family=Montserrat Alternates' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
	</head>
	<body>

		<div id='contenedor'>
			<header>
				<h1 class="font">
					Aparcamiento:<br>
					Park1
				</h1>				
			</header>
			
			<nav id="navbar">
				<li><a class="active" href="http://localhost/smartpark/inicio.html">Inicio</a></li>
  				<li><a href="http://localhost/smartpark/inicio.html#aparcamientos">aparcamientos</a></li>
			</nav>	

			<section>
				<h2> Aparcamiento: Park1 </h2>
				<p>en este lugar, se puede observar el estado del aparcamiento, en rojo ocupado y verde cuando el lugar esta libre</p>

				<?php
				include("conexion.php");
				$rta = new conexion();
				$rta ->recuperarDatos(); 
				?>
				<img style="vertical-align:center;" src="img/park1.png" >
			</section>

		</div>
	</body>
</html>

