<?php 
    require '../conn/connection.php';

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html lang='es'>
	<head>
		<title> Registro Virtual </title>
		<meta charset="utf-8"HTTP-EQUIV="REFRESH" CONTENT="5;URL=../Mod/RegistroLibro.php"/>
		<link rel="stylesheet" >	
	</head>
		
	<body >
		<div align="center">
		 	<form>
		 		<img src="../img/Logotipo1.png" >
		 	</form>
		</div>	
<?php

	$carrera = ucwords($_POST['carrera']);

		if ($carrera) {
				 			
		$meter1=@mysql_query('INSERT INTO carrera (carrera ) values ("'.mysql_real_escape_string($carrera).'")');
		
					echo '<p align="center"><font face="arial" size="24" color="green">'.$carrera.'</font></p>';
					echo '<div align="center"><img src = "../img/carrera.png"></div>';

		} 

	mysql_close($con);
				 		
?>
		<div align="right">
		 	<form>
		 		<img src="../img/1libros.jpg" >
		 	</form>
		</div>	
		<script> 
			miFecha = new Date() 
		</script>
	</body>
</html>