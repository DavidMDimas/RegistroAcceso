<?php 
    require '../conn/connection.php';

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html lang='es'>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" media="screen" href="../css/Libro.css">
          
	    <!-- Le styles -->
      <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
	
  
        <!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php"> Biblioteca TESi</a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="../index.php"><i class="icon-home icon-white"></i> Inicio</a></li>              
              <li><a href="../Mod/Preregistro.php"><i class="icon-th icon-white"></i> Pre-Registro</a></li>
              <li class="active"><a href="php/Buscador.php"><i class="icon-lock icon-white"></i> Consulta de Libros</a></li>
              <li><a href="../login.html"><i class="icon-user icon-white"></i> Administrador</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>
  <body>
   	<article>
        <div class="Titulo">  
        </div>

      
        <table width="1050" border="5" >
      	<tr>
      		<td width="80">Clave</td>
      		<td width="500">Título</td>
      		<td width="150">Autor</td>
      		<td width="150">Editorial</td>
      		<td width="50">Referencia</td>
      		<td width="50">Ubicación</td>
      	</tr>

<?php
            
  $q=$_POST['clave'];
  $sql="select * from libros where clave='$q' ";
  $res=mysql_query($sql,$con);

  if(mysql_num_rows($res)==0){

   echo '<h1 > <a href="../Mod/RegistroLibro.html "> Ingresar aquí el Libro Nuevo </a> </h1>'; 
   echo '<h2 STYLE="color:#800000"> No hay sugerencias </br> </h1>';

  }
  else{

    while($fila=mysql_fetch_array($res)){
      echo '<tr>';
      echo '<td>'.$fila['clave'].'</td>';
      echo '<td>'.$fila['titulo'].'</td>';
      echo '<td>'.$fila['autor'].'</td>';
      echo '<td>'.$fila['editorial'].'</td>';
      echo '<td>'.$fila['referencia'].'</td>';
      echo '<td>'.$fila['ubicacion'].'</td>';
      }
  }
  mysql_close($con);

?>
    </article>
  </body>
</html>

<?php
      header('Location :../Mod/Bibliotecario.html');
    
?>    