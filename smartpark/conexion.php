<?php
	class conexion{
		function recuperarDatos(){
			$host = "sql10.freesqldatabase.com";
			$user = "sql10234564";
			$password = "3BAyFI9emu";
			$db = "sql10234564";
			
			/*$host = "localhost";
			$user = "root";
			$password = "";
			$db = "park1";*/

			$conn = mysqli_connect($host, $user, $password,$db) or die ("no se establece la conexión");
//			$conn = new mysqli($host, $user, $password,$db) or die ("no se establece la conexión");

			#$sql = "SELECT * FROM aparcamiento";
			$sql = "SELECT * FROM `aparcamiento` ORDER BY `id` DESC LIMIT 1"; #
			#$sql = "SELECT * FROM `aparcamiento` ORDER BY `id` ASC LIMIT 1"; #
			$resultado = mysqli_query($conn,$sql);

			while ($mostrar = mysqli_fetch_array($resultado)){

				$p1 = "$mostrar[puesto1]<br>"; #echo iimprime nombre de la db
				$p2 = "$mostrar[puesto2]<br>";
				$p3 = "$mostrar[puesto3]<br>";

			}

			if ($p1 == 1):
				echo  "<a href='' class= 'estado rojo p1 '  >puesto1 <br> ocupado</a>";
			elseif ($p1 == 0):
				echo  "<a href='' class= 'estado verde p1 '  >puesto1 <br> libre</a>";
			endif;

			if ($p2 == 1):
				echo  "<a href='' class= 'estado rojo p2'  >puesto2 <br> ocupado</a>";
			elseif ($p2 == 0):
				echo  "<a href='' class= 'estado verde p2'  >puesto2 <br> libre</a>";
			endif;

			if ($p3 == 1):
				echo  "<a href='' class= 'estado rojo p3 '  >puesto3 <br> ocupado</a>";
			elseif ($p3 == 0):
				echo  "<a href='' class= 'estado verde p3'  >puesto3 <br> libre</a>";
			endif;
		}
	}
?>
