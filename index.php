<?php 
    require 'conn/connection.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Inicio.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider/demo/style.css" type="text/css" media="screen" />
    <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

    <style type="text/css">
        body {
            padding-top: 30px;
        }
        
        pbfooter {
            position: relative;
        }

    </style>
    <title> Registro Virtual </title>
</head>

<body oncontextmenu="return false">
    <script>
        function valida(e) {
            tecla = (document.all) ? e.keyCode : e.which;
            if (tecla == 8 || tecla == 13) {
                return true;
            }

            patron = /[0-9]/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final);
        }

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
                <a class="navbar-brand" href="index.php"> Biblioteca TESi</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php"><i class="icon-home icon-white"></i> Inicio</a></li>
                    <li><a href="Mod/Preregistro.php"><i class="icon-th icon-white"></i> Pre-Registro</a></li>
                    <li class="active"><a href="php/Buscador.php"><i class="icon-lock icon-white"></i> Consulta de Libros</a></li>
                    <li><a href="login.html"><i class="icon-user icon-white"></i> Administrador</a></li>

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

                <div id='Principal' align="center">
                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">
                            <img src="images/biblioteca/img1.JPG" data-thumb="" alt="" title="Bienvenido"/>
                            <img src="images/biblioteca/img2.JPG" data-thumb="" alt="" />
                            <img src="images/biblioteca/img3.JPG" data-thumb="" alt="" title="" />
                            <img src="images/biblioteca/img4.JPG" data-thumb="" data-transition="slideInLeft" />
                        </div>
                    </div>
                </div>

                <script type="text/javascript" src="nivo-slider/demo/scripts/jquery-1.9.0.min.js"></script>
                <script type="text/javascript" src="nivo-slider/jquery.nivo.slider.js"></script>
                <script type="text/javascript">
                    $(window).load(function() {
                        $('#slider').nivoSlider();
                    });

                </script>  

            </section>






            <section>
                <div class="form">
                    <div class="contact_form">
                        <h2 size="20">Registro </h2><br>
                    </div>

                    <form class="contact_form" action="php/Registro.php" method="POST" autocomplete="off">
                        <label for="Matricula">Matricula o Clave:</label>
                        <input type="text" name="matricula" placeholder='Matricula porfavor' required="" onkeypress="return valida(event)" /><br><br>
                      <!--  <center><div class="select">
                            <select name="nsemana">
                            <option value="1">1</option> 
                            <option value="2">2</option> 
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option> 
                            </select>
                            <select name="dia">

		    						 <?php 
						/*				$selec="SELECT *  FROM dia";
										$res=mysql_query($selec) or die (mysql_error());
										$num =mysql_num_rows($res);
		    						 	if($num > 0){
		    						 		while ($inf=mysql_fetch_array($res)) {
		    						 ?>
		    						<option value="<?php echo $inf['nombredia'];?>" required="" > <?php echo $inf['nombredia'];?> </option>  	 	
	    						 	<?php
	    						 			}
	    						 	  	 }
	    						 	?>	    						
								</select>
                            <select name="mes">

		    						 <?php 
										$selec="SELECT *  FROM mes";
										$res=mysql_query($selec) or die (mysql_error());
										$num =mysql_num_rows($res);
		    						 	if($num > 0){
		    						 		while ($inf=mysql_fetch_array($res)) {
		    						 ?>
		    						<option value="<?php echo $inf['mes'];?>" required="" > <?php echo $inf['mes'];?> </option>  	 	
	    						 	<?php
	    						 			}
	    						 	  	 }
	    						*/ 	?>	    						
								</select>
                            <select name="anio">
                            <option value="2017">2017</option> 
                            <option value="2018">2018</option> 
                            <option value="2019">2019</option>
                            <option value="2020">2020</option> 
                            </select>
                       </div></center> -->
                        <br>
                        <button class="submit" type="submit">Enviar</button>
                        <button class="submit" type="reset">Limpiar</button>
                    </form>
                </div>
            </section>

           


        </article>
    </div>
    <script type="text/javascript" src="js/bootstrap.js"></script>
        <!--header end here-->
    <div class="copyright">
        <p>Copyright © all rights reserved by Biblioteca TESi 2017</p>
        <center><img src="img/Imagen4.png" height="50" alt="50"></center>
    </div>
    <!--footer end here-->
</body>

</html>
