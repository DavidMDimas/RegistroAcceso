<?php 
    require '../conn/connection.php';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" HTTP-EQUIV="REFRESH" CONTENT="150;URL=Preregistro.php" />
    <meta name="description" content="website description">
    <meta name="keywords" content="website keywords, website keywords">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registro Virtual </title>


    <!-- Le styles -->
    <link href="../css/Preregistro.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />

    <link href="css/main.css" rel="stylesheet">
    <link href="css/font-style.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/lineandbars.js"></script>

    <script type="text/javascript" src="js/dash-charts.js"></script>
    <script type="text/javascript" src="js/gauge.js"></script>

    <!-- NOTY JAVASCRIPT -->
    <script type="text/javascript" src="js/noty/jquery.noty.js"></script>
    <script type="text/javascript" src="js/noty/layouts/top.js"></script>
    <script type="text/javascript" src="js/noty/layouts/topLeft.js"></script>
    <script type="text/javascript" src="js/noty/layouts/topRight.js"></script>
    <script type="text/javascript" src="js/noty/layouts/topCenter.js"></script>

    <!-- You can add more layouts if you want -->
    <script type="text/javascript" src="js/noty/themes/default.js"></script>
    <script type="text/javascript" src="assets/js/dash-noty.js"></script>
    <script type="text/javascript" src="js/high.js"></script>
    <script src="js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src="js/admin.js"></script>

    <!-- pop hover  -->
    <link rel="stylesheet" href="css/boostrapteme.css">
    <script src="js/jquerypophover.js"></script>
    <script src="js/bootstrappophover.js"></script>



    <style type="text/css">
        body {
            padding-top: 30px;
        }
        
        pbfooter {
            position: relative;
        }

    </style>

</head>

<body>
    <script type="text/javascript">
        function valida(e) {
            tecla = (document.all) ? e.keyCode : e.which;
            if (tecla == 8 || tecla == 13 || tecla == 32) {
                return true;
            }
            patron = /[a-zA-ZñÑ]/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final);
        }

        function validanum(e) {
            tecla = (document.all) ? e.keyCode : e.which;
            if (tecla == 8 || tecla == 13 || tecla == 32) {
                return true;
            }
            patron = /[0-9]/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final);
        }

        function inhabilitar() {
            alert("Funcion Cancelada")
            return false
        }
        document.oncontextmenu = inhabilitar

    </script>



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
                    <li><a href="Preregistro.php"><i class="icon-th icon-white"></i> Pre-Registro</a></li>
                    <li class="active"><a href="../php/Buscador.php"><i class="icon-lock icon-white"></i> Consulta de Libros</a></li>
                    <li><a href="../login.html"><i class="icon-user icon-white"></i> Administrador</a></li>

                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>




    <div class="Cuerpo">
        <article>

            <div class="Titulo">
                <h2></h2>
            </div>

            <section>

                <div class="form">
                    <form class="contact_form" action="../php/RegistroDoce.php" method="POST" autocomplete="off">
                        <h2 size="20">Registro Docente o Administrativo..</h2><br>
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" placeholder="Nombre Completo" required="" class="mayusculas" onkeypress="return valida(event)"> <br> <br>
                        <label for="apellido">Apellidos:</label>
                        <input type="text" name="apellido" placeholder="Apellidos" required="" class="mayusculas" onkeypress="return valida(event)"> <br> <br>
                        <label for="trabajador">N° de Trabajador:</label>
                        <input type="text" name="matricula" placeholder="N°" required="" onkeypress="return validanum(event)"> <br>
                        <br>
                        <input name="sexo" type="radio" value="hombre" checked="checked" /><label>Hombre:</label>
                        <br />
                        <input name="sexo" type="radio" value="mujer" /><label>Mujer:</label>

                        <button class="submit" type="submit">Registrar</button>
                        <button class="submit" type="reset">Limpiar</button>
                    </form>
                </div>
            </section>

            <section>
                <div class="dash-unit">
                    <div class="alumno">
                        <form class="regi_alumno" action="../php/RegistroAlu.php" method="POST" autocomplete="off">
                            <h2 size="20">Registro del Alumno..</h2><br>
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" placeholder="Nombre Completo" required="" class="mayusculas" onkeypress="return valida(event)"> <br> <br>
                            <label for="apellidos">Apellidos:</label>
                            <input type="text" name="apellido" placeholder="Apellidos" required="" class="mayusculas" onkeypress="return valida(event)"> <br> <br>
                            <label for="matriculas">Matricula:</label>
                            <input type="text" name="matricula" placeholder="Matricula" required="" onkeypress="return validanum(event)"> <br> <br>
                            <label for="carrera">Carrera:</label>

                            <div class="select">
                                <select name="carrera">

		    						 
		    						 <?php 
										$selec="SELECT *  FROM carrera";
										$res=mysql_query($selec) or die (mysql_error());
										$num =mysql_num_rows($res);
		    						 	if($num > 0){
		    						 		while ($inf=mysql_fetch_array($res)) {
		    						 ?>
		    						<option value="<?php echo $inf['carrera'];?>" required="" > <?php echo $inf['carrera'];?> </option>  	 	
	    						 	<?php
	    						 			}
	    						 	  	 }
	    						 	?>	    						
								</select>
                            </div> 
                            <div class="radbtn">
                                <input name="sexo" type="radio" value="hombre" checked="checked"/>
                                <label>Hombre:</label>
                                <br />
                                <input name="sexo" type="radio" value="mujer" />
                                <label>Mujer:</label>
                            </div>

                            <button class="submit" type="submit">Registrar</button>
                            <button class="submit" type="reset">Limpiar</button>
                        </form>
                    </div>
                </div>
            </section>



        </article>

        <script>
            miFecha = new Date()

        </script>
    </div>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
</body>

</html>
