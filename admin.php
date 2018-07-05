<?php 
    require 'conn/connection.php';

?>

<?php
	
session_start();
	if (isset($_SESSION['usuario'])) {
		
		header('Location : php/admin.php');
	}

	else  {
?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Administrador TESi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="TESi">

        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

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
                padding-top: 60px;
            }

        </style>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


        <!-- Google Fonts call. Font Used Open Sans & Raleway -->
        <link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

        <script type="text/javascript">
            $(document).ready(function() {

                $("#btn-blog-next").click(function() {
                    $('#blogCarousel').carousel('next')
                });
                $("#btn-blog-prev").click(function() {
                    $('#blogCarousel').carousel('prev')
                });

                $("#btn-client-next").click(function() {
                    $('#clientCarousel').carousel('next')
                });
                $("#btn-client-prev").click(function() {
                    $('#clientCarousel').carousel('prev')
                });

            });

            $(window).load(function() {

                $('.flexslider').flexslider({
                    animation: "slide",
                    slideshow: true,
                    start: function(slider) {
                        $('body').removeClass('loading');
                    }
                });
            });

        </script>



        <!--   LocalTime Script-->
        <script type="text/javascript">
            function display_c() {
                var refresh = 1000; // Refresh rate in milli seconds
                mytime = setTimeout('display_ct()', refresh)
            }

            function display_ct() {
                var strcount
                var x = new Date()
                document.getElementById('ct').innerHTML = x;
                tt = display_c();
            }

        </script>
    </head>

    <body>

        <!-- NAVIGATION MENU -->

        <?php
                $queryuser = "SELECT nombre from usuario where id = '3'";
                $resultuser = mysql_query($queryuser);
                $numero = 0;
            ?>
            <div class="navbar-nav navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                        <!-- <a class="navbar-brand" href="Inicio.html"><img src="images/logo30.png" alt=""> Biblioteca TESi</a>  -->
                        <a class="navbar-brand" href="index.php"> Biblioteca TESi</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php"><i class="icon-home icon-white"></i> Inicio</a></li>
                            <li><a href="Mod/Preregistro.php"><i class="icon-th icon-white"></i> Pre-Registro</a></li>
                            <li class="active"><a href="php/Buscador.php"><i class="icon-lock icon-white"></i> Consulta de Libros</a></li>
                            <li><a href="login.html"><i class="icon-user icon-white"></i> Administrador</a></li>
                            <div class="navbar-text pull-right">
                                <img src="images/user.png" alt="Usuario" class="img-rounded" href="perfil.php"> <a href="perfil.php" class="navbar-link">
                            <?php 
                                $nombreuser="";
                                while($row = mysql_fetch_array($resultuser))
                                    {    
                                        echo "<a href=\"admin.php\">".$nombreuser = ($row["nombre"]). "</a>"; 
                                    } 
                                ?>
                                </a>
                                <section>
                                <option></option>
                                </section>
                                <img src="images/mail.png" alt="Mail" class="img-rounded" href=""> Mensajes
                                <a href="" class="navbar-link"></a>
                                <img src="images/config.png" alt="Config" class="img-rounded"><a href="perfil.php" class="navbar-link">Herramientas </a>
                            </div>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
            </head>
            <br>
            <br>
            <br>
            <br>
            <!-- NAVIGATION MENU -->

            <div class="container">

                <!-- FIRST ROW OF BLOCKS -->
                <div class="row">

                    <!-- GRAPH CHART - lineandbars.js file -->
                    <div class="col-sm-3 col-lg-3">
                        <div class="dash-unit">
                            <dtitle>Estadisticas</dtitle>
                            <hr>
                            <div class="section-graph">
                                <div id="importantchart"></div>
                                <br>
                                <div class="graph-info">
                                    <i class="graph-arrow"></i>
                                    <span class="graph-info-big">Usuarios</span>
                                    <span class="graph-info-small">Promedio:</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- DONUT CHART BLOCK -->
                    <div class="col-sm-3 col-lg-3">
                        <div class="dash-unit">
                            <dtitle>Hombres</dtitle>
                            <hr>
                            <div id="load"></div>
                            <h3>Alumnos / Docentes</h3>
                        </div>
                    </div>

                    <!-- DONUT CHART BLOCK -->
                    <div class="col-sm-3 col-lg-3">
                        <div class="dash-unit">
                            <dtitle>Mujeres</dtitle>
                            <hr>
                            <div id="space"></div>
                            <h3>Alumnas / Docentes</h3>
                        </div>
                    </div>

                    
                                        <div class="col-sm-3 col-lg-3">

                        <!-- BARS CHART - lineandbars.js file -->
                        <div class="half-unit">
                            <dtitle>Usuarios por mes</dtitle>
                            <hr>
                            <div class="cont">
                                <div class="info-aapl">
                                    <h4>Meses</h4>
                                    <ul>
                                        <li><span class="orange" style="height: 37.5%"></span></li>
                                        <li><span class="green" style="height: 47.5%"></span></li>
                                        <li><span class="blue" style="height: 70%"></span></li>
                                        <li><span class="gray" style="height: 85%"></span></li>
                                        <li><span class="magenta" style="height: 75%"></span></li>
                                        <li><span class="greenbl" style="height: 50%"></span></li>
                                        <li><span class="red" style="height: 15%"></span></li>
                                        <li><span class="fuchsia" style="height: 15%"></span></li>
                                        <li><span class="black" style="height: 15%"></span></li>
                                        <li><span class="white" style="height: 15%"></span></li>
                                        <li><span class="blues" style="height: 15%"></span></li>
                                        <li><span class="brown" style="height: 15%"></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- TO DO LIST -->
                        <div class="half-unit">
                            <dtitle>Usuarios anuales</dtitle>
                            <hr>
                            <div class="cont">
                                <p>
                                    <bold>
                                        <?php  
                                          //  $selec="SELECT COUNT(*) FROM registro_doc WHERE fecha = 2017-02-02 UNION SELECT COUNT(*) FROM registro_alu  WHERE fecha = 2017-02-02";
        
                                    $selec="SELECT * FROM registro_doc where fecha BETWEEN '2017-01-01' AND '2017-12-31'";
                                    $selec2="SELECT * FROM registro_alu where fecha BETWEEN '2017-01-01' AND '2017-12-31'";


                                            $res=mysql_query($selec) or die (mysql_error());
                                            $res2=mysql_query($selec2) or die (mysql_error());
                                            $num =mysql_num_rows($res);
                                            $num2 =mysql_num_rows($res2);
                                            echo '<p><font face="arial" size="4" color="gray">Alumnos '.$num. ' <br> Docentes ' .$num2.'  </font></p>';
                            ?>
                                    </bold>
                                </p>
                            </div>
                            <!-- <div class="progress">
                      <?php 
                        //    echo '<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"20000\" style=\"width:'.$num.'%'.'><span class=\"sr-only\">Complete</span>'
                        ?> 
                        </div> -->
                        </div>
                    </div>
                </div>
                <!-- /row -->




                <!-- THIRD ROW OF BLOCKS -->
                <div class="row">
           

                    <div class="col-sm-3 col-lg-3">

                        <!-- LIVE VISITORS BLOCK -->
                        <div class="half-unit">
                            <dtitle>Total alumnos</dtitle>
                            <hr>
                            <div class="cont">
                                <p>
                                    <bold>
                                        <?php  
                        $selec="SELECT id  FROM registro_alumnos where sexo='hombre'";
                        $selec2="SELECT id  FROM registro_alumnos where sexo='mujer'";
                        $selec3="SELECT id FROM registro_alumnos";
                        $res=mysql_query($selec) or die (mysql_error());
                        $res2=mysql_query($selec2) or die (mysql_error());
                        $res3=mysql_query($selec3) or die (mysql_error());
                        $num =mysql_num_rows($res);
                        $num2 =mysql_num_rows($res2);
                        $num3 =mysql_num_rows($res3);
                        echo '<p><font face="arial" size="4" color="gray">'.$num3.' Total</font></p>';
                        echo '<p><font face="arial" size="2" color="gray">Hombres <img src="images/up-small.png" alt=""> '.$num.' - '.$num2.' <img src="images/down-small.png" alt=""> Mujeres </font></p>';
                    ?>
                                    </bold>
                                </p>
                            </div>
                        </div>

                        <!-- PAGE VIEWS BLOCK -->
                        <div class="half-unit">
                            <dtitle>Total docentes</dtitle>
                            <hr>
                            <div class="cont">
                                <p>
                                    <bold>
                                        <?php  
                $selec="SELECT id  FROM registro_docente where sexo='hombre'";
                $selec2="SELECT id  FROM registro_docente where sexo='mujer'";
                $selec3="SELECT id FROM registro_docente";
                $res=mysql_query($selec) or die (mysql_error());
                $res2=mysql_query($selec2) or die (mysql_error());
                $res3=mysql_query($selec3) or die (mysql_error());
                $num =mysql_num_rows($res);
                $num2 =mysql_num_rows($res2);
                $num3 =mysql_num_rows($res3);
                echo '<p><font face="arial" size="4" color="gray">'.$num3.' Total</font></p>';
                echo '<p><font face="arial" size="2" color="gray">Hombres <img src="images/up-small.png" alt=""> '.$num.' - '.$num2.' <img src="images/down-small.png" alt=""> Mujeres </font></p>';
                ?>
                                    </bold>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-3">
                        <!-- TOTAL SUBSCRIBERS BLOCK -->
                        <div class="half-unit">
                            <dtitle>Total libros</dtitle>
                            <hr>
                            <div class="cont">
                                <p>
                                    <bold>
                                        <?php 
                        $selec="SELECT id  FROM libros";
                        $res=mysql_query($selec) or die (mysql_error());
                        $num =mysql_num_rows($res);
                        echo '<p><font face="arial" size="6" color="gray">'.$num.'</font></p>';
                ?>
                                    </bold>
                                </p>
                                <p>General</p>
                            </div>
                        </div>

                        <!-- FOLLOWERS BLOCK -->
                        <div class="half-unit">
                            <dtitle>Lectura general</dtitle>
                            <hr>
                            <div class="cont">
                                <p>
                                    <bold>17</bold>
                                </p>
                                <p>Otros</p>
                            </div>
                        </div>
                    </div>

                    <!-- LATEST NEWS BLOCK -->
                    <div class="col-sm-3 col-lg-3">
                        <div class="dash-unit">
                            <dtitle>Notificaciones</dtitle>
                            <hr>
                            <div class="info-user">
                                <span aria-hidden="true" class="li_news fs2"></span>
                            </div>
                            <br>
                            <div class="text">
                                <p><b>Reporte</b> Reporte semanal asistencia Urgente</p>
                                <p>
                                    <grey>Last Update: 5 minutes ago.</grey>
                                </p>
                            </div>
                        </div>
                    </div>

                        <!-- ACCORDION BLOCK -->
                        <div class="col-sm-3 col-lg-3">
                            <div class="dash-unit">
                                <dtitle>Direcciones</dtitle>
                                <hr>
                                <div class="accordion" id="accordion2">
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
		                        Correos electronicos
		                        </a>
                                        </div>
                                        <div id="collapseOne" class="accordion-body collapse in">
                                            <div class="accordion-inner">
                                                biblioteca@biblioteca.com
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
		                        Telefonos TESi
		                        </a>
                                        </div>
                                        <div id="collapseTwo" class="accordion-body collapse in">
                                            <div class="accordion-inner">
                                                ( 055 ) 13148150 ext. 124.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
		                        Telefonos emergencia
		                        </a>
                                        </div>
                                        <div id="collapseThree" class="accordion-body collapse in">
                                            <div class="accordion-inner">
                                                Emergencias | 066 <br>
                                                Cruz Roja | 065 <br>
                                                Denuncia Anónima | 089 <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/accordion -->
                            </div>
                        </div>
                </div>
                <!-- /row -->

                <!-- FOURTH ROW OF BLOCKS -->
                <div class="row">



                    <!-- FOURTH ROW OF BLOCKS -->
                    <div class="row">

                        <div class="col-sm-3 col-lg-3">

                            <!-- LAST USER BLOCK -->
                            <div class="half-unit">
                                <dtitle>Añadir nuevo usuario</dtitle>
                                <hr>
                                <div class="cont">
                                    <a href="#" role="button" class="btnnew" data-toggle="modal">Registrar Usuario</a>
                                </div>
                            </div>

                            <!-- MODAL BLOCK -->
                            <div class="half-unit">
                                <dtitle>Añadir nuevo libro</dtitle>
                                <hr>
                                <div class="cont">
                                    <a href="Mod/RegistroLibro.html" role="button" class="btnnew" data-toggle="modal">Registrar libro</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-3 col-lg-3">
                            <div class="dash-unit">
                                <dtitle>Enviar correo</dtitle>
                                <hr>
                                <div class="cont">
                                    <form action="#get-in-touch" method="POST" id="contact">
                                        <input type="text" id="contactname" name="contactname" placeholder="Name">
                                        <input type="text" id="email" name="email" placeholder="Email">
                                        <div class="textarea-container"><textarea id="message" name="message" placeholder="Message"></textarea></div>
                                        <input type="submit" id="submit" name="submit" value="Send">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- INFORMATION BLOCK -->
                        <div class="col-sm-3 col-lg-3">
                            <div class="dash-unit">
                                <dtitle>Generar reporte</dtitle>
                                <hr>
                                <div class="info-user">
                                    <span aria-hidden="true" class="li_display fs2"></span>
                                </div>
                                <br>
                                <form class="contact_form6" action="php/php-mysql.php" method="POST" target="_blank">
                                    <center> <label for="Clave"><font color="black"><h3>Reporte PDF de Entrada del Usuario</h3></label>
                                        <br>D:
                                        <input type="date" name="fecha1" placeholder='HOY' required/><br>
                                        <br> A:
                                        <input type="date" name="fecha2" placeholder='HOY' required/><br><br> </center>
                                    <center><button class="btnnew" role="button" data-toggle="modal" type="submit">Reporte PDF</button></center>
                                </form>

                            </div>
                        </div>

                    </div>
                    <!--/row -->

                </div>
                <!-- /container -->
                <div id="footerwrap">
                    <footer class="clearfix"></footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-lg-12">
                                <p>Copyright © all rights reserved by Biblioteca TESi 2017</p>
                            </div>

                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /container -->
                </div>
                <!-- /footerwrap -->

                </body>
                <?php
    }

    
?>

    </html>
