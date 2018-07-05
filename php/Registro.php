<?php 
    require '../conn/connection.php';

?>

<!DOCETYPE html/>

<html>

<head>
    <title> Registro Virtual </title>
    <meta charset="utf-8" HTTP-EQUIV="REFRESH" CONTENT="1;URL=../index.php" />
    <link rel="stylesheet">
</head>

<body>
    <div align="center">
        <form>
            <img src="../img/Logotipo1.png">
        </form>
    </div>
    <embed src="../sonido/bien.mp3" autostart="true" width="3" height="3">
    <?php
        
	if($matricula = isset($_POST['matricula'])){  
	$matricula = strip_tags($_POST['matricula']);
	
	 	if ($matricula) {
	  			 			
			$query =@mysql_query('SELECT * FROM registro_alumnos WHERE matricula ="'.mysql_real_escape_string($matricula).'"');
		
	 		if ($existe= @mysql_fetch_object($query)) {

	 				$query_tb =@mysql_query('SELECT nombre, apellido, carrera, sexo FROM registro_alumnos WHERE matricula ="'.mysql_real_escape_string($matricula).'"'); 
				
					$nombre="";
					$apellido="";
					$carrera="";
                    $dia ="";
                    $nsemana="";
                    $mes="";
                    $anio="";
						
					while ($row_tb=mysql_fetch_assoc($query_tb)) {  
						$nombre = ($row_tb['nombre']."");
						$apellido = ($row_tb['apellido']."");
						$carrera = ($row_tb['carrera'].""); 
                        $sexo = ($row_tb['sexo']."");

					} 

					echo '<p align="center"><font face="arial" size="24" color="green">'.$nombre.'</font></p>';
					echo '<embed src="../sonido/bien.wav" width="32" height="32"hidden="true" autostart="true" loop="2">';

					
	 				$meter1=@mysql_query('INSERT INTO registro_alu(nombre, apellido, matricula, carrera, sexo ) values ("'.mysql_real_escape_string($nombre).'","'.mysql_real_escape_string($apellido).'","'.mysql_real_escape_string($matricula).'","'.mysql_real_escape_string($carrera).'","'.mysql_real_escape_string($sexo).'","'.mysql_real_escape_string($dia).'","'.mysql_real_escape_string($nsemana).'","'.mysql_real_escape_string($mes).'","'.mysql_real_escape_string($anio).'")');
	 	
	 				echo '<div align="center"><img src = "../img/bienvenido.PNG"></div>';
	 
		}

			else {

				$quer =@mysql_query('SELECT * FROM registro_docente WHERE matricula ="'.mysql_real_escape_string($matricula).'"');
	 					
	 			if ($exist= @mysql_fetch_object($quer)) {

						$query_tb =@mysql_query('SELECT nombre, apellido, sexo FROM registro_docente WHERE matricula ="'.mysql_real_escape_string($matricula).'"'); 
		
					$nombre="";
					$apellido="";  
                    $sexo ="";
                  
                    
 
		
					while ($row_tb=mysql_fetch_assoc($query_tb)) {  
						
						$nombre = ($row_tb['nombre']."");
						$apellido = ($row_tb['apellido']."");  
                        $sexo = ($row_tb['sexo']."");
                        
    
					} 

					echo '<p align="center"><font face="arial" size="24" color="green">'.$nombre.'</font></p>';
	 				
	 				$meter=@mysql_query('INSERT INTO registro_doc( nombre, apellido, matricula, sexo, dia, nsemana, mes, anio) values ("'.mysql_real_escape_string($nombre).'","'.mysql_real_escape_string($apellido).'","'.mysql_real_escape_string($matricula).'","'.mysql_real_escape_string($sexo).'","'.mysql_real_escape_string($dia).'","'.mysql_real_escape_string($nsemana).'","'.mysql_real_escape_string($mes).'","'.mysql_real_escape_string($anio).'")');
	 					
	 				echo '<div align="center"><img src = "../img/bienvenido.PNG"></div>';
					echo '<embed src="../sonido/bien.wav" width="32" height="32"hidden="true" autostart="true" loop="2">';


	 				mysql_close($con);
				}
						else { 
				 	 	echo '<div align="center"><img src = "../img/ingresa.png"></div>';
				 	 	echo '<embed src="../sonido/error.wav" width="32" height="32"hidden="true" autostart="true" loop="2">';
				 	 }
			}	
	}
}
		
?>
        <div align="right">
            <form>
                <img src="../img/1libros.jpg">
            </form>
        </div>
        <script>
            miFecha = new Date()

        </script>
</body>

</html>
