<?php 
    require '../conn/connection.php';

?>
<!DOCETYPE html/>
<html>
<head>
	<title> Login </title>
	<meta charset="utf-8"HTTP-EQUIV="REFRESH" CONTENT="0;URL=../login.html"/>
	<link rel="stylesheet" >	
</head>	
	<body>

<?php

	session_start();
	$nombre =$_POST['nombre'];
	$pass = $_POST['pass'];
		 			
	$query =@mysql_query("SELECT * FROM usuario WHERE nombre ='$nombre' AND pass ='$pass' ");
	
	if ($existe= @mysql_fetch_object($query)) {
		$_SESSION['nombre']= $nombre;
	echo '<script>location.href="../admin.php";</script>';
	
	}
	
	else{
	echo '<script> miFecha = new Date() </script>';					
	}
				 
	mysql_close($con); 

?>

	</body>
</html>
