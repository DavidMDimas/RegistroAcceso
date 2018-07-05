<?php 
    require '../conn/connection.php';

?>
<!DOCETYPE html/>
<html>
	<head>
		<meta charset="utf-8"HTTP-EQUIV="REFRESH" CONTENT="3;URL=../Inicio.html"/>
		<link rel="stylesheet">
		<title> Registro Virtual </title>	
	</head>
		
	<body>
		<div align="center">
		 	<form>
		 		<img src="../img/Logotipo1.png" >
		 	</form>
		</div>	


<?php


	$nombre = ucwords ($_POST['nombre']);
	$apellido= ucwords($_POST['apellido']); 
	$matricula = strip_tags($_POST['matricula']);
	$carrera= strip_tags($_POST['carrera']);
	$sexo= strip_tags($_POST['sexo']);

	$maximoscaracteres=9; 


	if (preg_match("/[^0-9]+/",$_POST['matricula']) or strlen($_POST["matricula"])!=$maximoscaracteres) {
	echo '<div align="center"><img src = "../img/ingresa.png"></div>';
	}
	else{

  $matricula=$_POST['matricula'];



	$query =@mysql_query('SELECT * FROM registro_alumnos WHERE matricula="'.mysql_real_escape_string($matricula).'"');
		if ($existe= @mysql_fetch_object($query)) {

			echo '<div align="center"><img src = "../img/yaexiste.png"></div>';

		} 
		else{	

			$meter1= @mysql_query('INSERT INTO registro_alumnos(nombre, apellido, matricula ,carrera, sexo) values ("'.mysql_real_escape_string($nombre).'", "'.mysql_real_escape_string($apellido).'", "'.mysql_real_escape_string($matricula).'","'.mysql_real_escape_string($carrera).'",  "'.mysql_real_escape_string($sexo).'")');

			
				
				if ($meter1) {					
					echo '<div align="center"><img src = "../img/registro.png"></div>';
					mysql_close($con);
				}
				else { 
					echo ' Hubo un error en tus datos';
				}
		}
	}

?>
		<div align="center">
		 	<form>
		 		<img src="../img/libro.jpg" >

		 	</form>
		</div>	
		<script> 
				miFecha = new Date() 
		</script>
	</body>
</html>
