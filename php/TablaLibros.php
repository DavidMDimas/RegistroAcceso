<?php 
    require '../conn/connection.php';

?>

<style type="text/css">
  table {
    border-collapse: collapse;
    border: 1px solid #666666;
    font: normal 15px verdana, arial, helvetica, sans-serif;
    color: #363636;
    background: #f6f6f6;
    text-align:left;
    }
  caption {
    text-align: center;
    font: bold 20px arial, helvetica, sans-serif;
    background: transparent;
    padding:6px 4px 8px 0px;
    color: #CC00FF;
    text-transform: uppercase;
  }
  thead, tfoot {
  background:url(bg1.png) repeat-x;
  text-align:left;
  height:30px;
  }
  thead th, tfoot th {
  padding:5px;
  }
  table a {
  color: #333333;
  text-decoration:none;
  }
  table a:hover {
  text-decoration:underline;
  }
  tr.odd {
  background: #f1f1f1;
  }
  tbody th, tbody td {
  padding:5px;
  }
</style>

<table width="1050" border="5">
	<tr>
		<td width="80">Clave</td>
		<td width="500">Titulo</td>
		<td width="150">Autor</td>
		<td width="150">Editorial</td>
		<td width="50">Referencia</td>
		<td width="50">Ubicación</td>
	</tr>
<?php


$_MensajeError="Caracter Invalido";
if (preg_match("/[^A-Za-z0-9ñÑ]+/",$_POST['q'])) {
echo $_MensajeError;
}
else{

  $q=$_POST['q'];
  
  $sql="select * from libros where titulo LIKE '%".$q."%'";
  $res=mysql_query($sql,$con);
  mysql_query("SET NAMES 'utf8'");
  
  if(mysql_num_rows($res)==0){
     echo '<b>No hay sugerencias</b>';
  }
  else{
    echo '<br>';

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
}
  mysql_close($con);
?>