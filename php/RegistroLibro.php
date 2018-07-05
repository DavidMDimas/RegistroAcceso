<?php 
    require '../conn/connection.php';

?>

<!DOCETYPE html/>
<html>
	<head>
		<title> Registro Virtual </title>
		<meta charset="utf-8"HTTP-EQUIV="REFRESH" CONTENT="1;URL=../Mod/RegistroLibro.php"/>
		<link rel="stylesheet" >	
	</head>
			
	<body >

<?php


	$clave = strip_tags($_POST['clave']);
	$titulo = strip_tags($_POST['titulo']);
	$autor = strip_tags($_POST['autor']);
	$editorial = strip_tags($_POST['editorial']);
	$referencia = strip_tags($_POST['referencia']);
	$ubicacion = strip_tags($_POST['ubicacion']); 			
			
	$query =@mysql_query('SELECT * FROM libros WHERE clave ="'.mysql_real_escape_string($clave).'"');
		
		if ($existe= @mysql_fetch_object($query)) {
				echo ' <div align="center"><img src = "../img/existente.png"></div>';
		}
		else {

			$meter1=@mysql_query('INSERT INTO libros (clave,titulo,autor,editorial,referencia,ubicacion ) values ("'.mysql_real_escape_string($clave).'","'.mysql_real_escape_string($titulo).'","'.mysql_real_escape_string($autor).'","'.mysql_real_escape_string($editorial).'","'.mysql_real_escape_string($referencia).'","'.mysql_real_escape_string($ubicacion).'")');

			echo ' <div align="center"><img src = "../img/libross.png"></div>';
		 }
	mysql_close($con);
?>

		<div align="center">
		 	<form>
		 		<img src="../img/registro.jpg" >

		 	</form>
		</div>	
		<script> 
			miFecha = new Date() 
		</script>
	</body>
</html>