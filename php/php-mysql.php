<?php 
    require '../conn/connection.php';

?>


<?php

require_once('class.ezpdf.php');
$pdf = new Cezpdf('a4',"landscape");
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

$fecha1=strip_tags($_POST['fecha1']);
$fecha2=strip_tags($_POST['fecha2']);

$queEmp = "SELECT * FROM registro_doc WHERE fecha BETWEEN '$fecha1' AND '$fecha2' UNION SELECT * FROM registro_alu  WHERE fecha BETWEEN '$fecha1' AND '$fecha2';";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$ixx = 0;

	while($datatmp = mysql_fetch_assoc($resEmp)) { 
		$ixx = $ixx+1;
		$data[] = array_merge($datatmp, array('num'=>$ixx));
	}
	$titles = array(
		            'nombre'=>'<b>Nombre</b>',
		            'apellido'=>'<b>Apellidos</b>',
					'matricula'=>'<b>Matricula o No. Trabajador</b>',
					'carrera'=>'<b>Carrera o Docente</b>',
					'fecha'=>'<b>Fecha</b>',
					'sexo'=>'<b>Sexo</b>',
					
					
				);

	$options = array(
					'shadeCol'=>array(0.9,0.9,0.9),
					'xOrientation'=>'center',
					'width'=>560
				);



$txttit = "<b></b>\n";
$pdf->ezImage("../img/Registropdf1.jpg", 0, 420, 'none', 'center');
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"));
$pdf->ezText("\n\n\n", 10);
$pdf->ezTable($data,$titles,$options);
$pdf->ezText("\n\n\n\n\n\n", 10);
ob_end_clean();
$pdf->ezStream();
mysql_close($conexion);
?>