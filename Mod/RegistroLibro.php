
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
      <META HTTP-EQUIV="REFRESH" CONTENT="100;URL=RegistroLibro.php"> </head>
    <link rel="stylesheet" media="screen" href="../css/Libro.css">
    <meta name="description" content="website description">
    <meta name="keywords" content="website keywords, website keywords">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>


  </head>

  <body>

	<script type="text/javascript"> 
	    function inhabilitar () {
		alert ("funcion cancelada")
		return false
	    }
	    document.oncontextmenu=inhabilitar

	</script>

	  <article>
        <div class="Titulo">  </div>
         
           <div class="Link"> 
              <ul>
              	<li> <a href="../php/logout.php">SALIR</a></li>
              </ul>


          <div class="form5">
                <form class="contact_form5" action="../php/Busclave.php" method="POST"> 
                    <label for="Clave" ><font color="red"><h3>Ingreso de Libro Nuevo:</h3></label> </br></br>
                    <input type="text" name="clave" placeholder="Ingresa la Clave" required="" > <br> <br> 
                    <button class="submit" type="submit">Enviar</button> 
                </form>
              </div>

          <div class="form4">
            <form class="contact_form4" action="../php/Carreras.php" method="POST"> 
                <label for="Clave"><font color="red"><h3>Nueva Carrera:</h3></label></br></br>
                <input type="text" name="carrera" placeholder="Carrera nueva en el TESI" required="" class="mayusculas" > <br> <br> 
                <button class="submit" type="submit">Enviar</button> 
            </form>
          </div>
 
 	      	<div class="form6"><!-- A quin las Fechas dentro de este form-->
	            <form class="contact_form6" action="../php/php-mysql.php" method="POST" target="_blank">    
                  <label for="Clave"><font color="red"><h3>Reporte PDF de Entrada del Usuario</h3></label>   
                  </br></br></br>
                  Del:
                      <input type="date" name="fecha1"  placeholder='HOY' required/><br>
                    </br></br> A:
                      <input type="date" name="fecha2"  placeholder='HOY' required/><br><br>                
	                <button class="submit" type="submit" >Reporte PDF</button> 
	            </form> 
          </div>
          
          <div class="form3">
              <label><font face="arial" size="5" color="red">Total de Libros</label>
               <?php 
                $con=mysql_connect("localhost","root","205BB10300" ) or die(mysql_error()); 
                mysql_select_db("biblioteca",$con) or die (mysql_error());
               
                $selec="SELECT id  FROM libros";
                $res=mysql_query($selec) or die (mysql_error());
                $num =mysql_num_rows($res);
                echo '<p><font face="arial" size="6" color="gray">'.$num.'</font></p>';
                ?>
          </div>


         <div class="form10">
                <form class="contact_form10" action="../php/Adeudo.php" method="POST"> 
                    <label for="Clave" ><font color="red"><h3>Matricula de Adeudo</h3></label> </br></br>
                    <input type="text" name="matricula" placeholder="Ingresa la Matricula" required="" > <br> <br> 
                    <button class="submit" type="submit">Enviar</button> 
                </form>
              </div>
   
        <div class="Graficos">
            <form class="graficoslive">
                <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                <style type="text/css">
            </form>
            <script>
                miFecha = new Date()
                document.write(miFecha.getHours() + ":" + miFecha.getMinutes() + ":" + miFecha.getSeconds())
            </script>
        </div>

           <div class="pie"><h2>Copyright © all rights reserved by Ingenieros en Sistemas Computacionales Fidel Delgado,Enrico Navarro,Fernando Patron,Ramiro Luna </h2>
       </div>

		</script>
	</head>
	<body>
<script src="../graficos/code/highcharts.js"></script>
<script src="../graficos/code/modules/exporting.js"></script>


          
    </article>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
  </body>
</html>
    <?php

      header('Location :../login.html');
    
?>

