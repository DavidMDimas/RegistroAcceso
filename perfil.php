<?php 
    require 'conn/connection.php';

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


    <script type="text/javascript">
        $(document).ready(function() {
                    $('[data-toggle="popover"]').popover({
                                pl

                                <
                                style type = "text/css" >
                                body {
                                    padding - top: 60 px;
                                } <
                                /style>



                                <
                                script type = "text/javascript" >
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
                            <img src="images/perfil.png" alt="Usuario" class="img-rounded"> <a href="#" class="navbar-link">
                            <?php 
                                $nombreuser="";
                                while($row = mysql_fetch_array($resultuser))
                                    {    
                                        echo "<a href=\"admin.php\">".$nombreuser = ($row["nombre"]). "</a>"; } ?>
                            </a>
                            <img src="images/mail.png" alt="Mail" class="img-rounded" href=""><a href="" class="navbar-link">Mensajes</a>
                            <img src="images/config.png" alt="Config" class="img-rounded"><a href="perfil.php" class="navbar-link">Herramientas </a>
                        </div>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
</head>
</br>
</br>
</br>
</br>
<!-- NAVIGATION MENU -->

<body>

    <div class="col-sm-2 col-lg-6">
        <!-- <div class="dash-unit"> -->
        <div class="">

            <dtitle>Configuracion del documento</dtitle>
            <hr>
            <div class="cont">
                <form action="registro.php" method="POST" id="contact">
                    <input type="text" id="nempleado" name="nempleado" placeholder="N° Empleado">
                    <input type="text" id="contactname" name="contactname" placeholder="Nombre">
                    <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos">
                    <input type="text" id="cargo" name="cargo" placeholder="Cargo"> Semanal: <input type="radio" id="rsemanal" name="reporte" checked="checked"> Mensual:
                    <input type="radio" id="rmensual" name="reporte"> Bimestral:
                    <input type="radio" id="rbimestral" name="reporte"> Semestral: <input type="radio" id="rsemestral" name="reporte"> Anual:
                    <input type="radio" id="ranual" name="reporte">
                    <input type="text" id="ndepartamento" name="ndepartamento" placeholder="Nombre del departamento">
                    <input type="text" id="nencargado" name="nencargado" placeholder="Nombre del encargado">
                    <input type="text" id="nlibro" name="nlibro" placeholder="Nombre del alumno">
                    <input type="text" id="nalumnolibro" name="nalumnolibro" placeholder="Nombre del libro">
                    <input type="text" id="nautor" name="nautor" placeholder="Nombre del autor">
                    <input type="text" id="neditorial" name="neditorial" placeholder="Nombre del Editorial">
                    <input type="submit" id="submit" name="submit" value="Actualizar">
                </form>
            </div>
        </div>
    </div>


    <!-- SECOND ROW OF BLOCKS -->

    <div class="col-sm-2 col-lg-6">
        <div class="dash-unit">
            <!-- MAIL BLOCK -->
            <!-- <div class="dash-unit"> -->
            <?php
                $query = "SELECT matricula, Nombre, Carrera, Mensaje from correo where id_correo='1'";
                $result = mysql_query($query);
                $numero = 0;
            ?>
                <dtitle>Mensajes</dtitle>
                <hr>
                <div class="framemail">
                    <div class="window">
                        <ul class="mail">
                            <li>
                                <i class="unread"></i>
                                <img class="avatar" src="images/photo02.jpg" alt="avatar">
                                <p class="sender">Cristina Hernandez</p>
                                <p class="message" data-toggle="popover" title="Cristina Hernandez" data-content="Autor: Pepe el toro"><strong>Informatica</strong> -
                                    <?php echo 'admin'; ?>
                                </p>
                                <div class="actions">
                                </div>
                            </li>
                            <li>
                                <i class="read"></i>
                                <img class="avatar" src="images/photo03.jpg" alt="avatar">

                                <?php 
            
                                        $id_correo="";
                                        $Nombre="";
                                        $Mensaje="";
                                        $matricula="";
                                        $Carrera="";
                                        $Fecha="";

                                      while($row = mysql_fetch_array($result))
                                      {    
                                        echo "<p class=\"sender\"> ". 
                                           $Nombre = ($row["Nombre"]). "</p>";

                                          echo "<p class=\"message\"  data-toggle=\"popover\" title=". 
                                           $Carrera = ($row["Carrera"]). " data-content=". 
                                           $Mensaje = ($row["Mensaje"]).">";

                                          echo "<strong></strong>" . 
                                           $Mensaje = ($row["Mensaje"])."</p>";
                                        $numero++;
                                      }
                ?>
                                <!-- <p class="sender">Che de la Luz</p> 
                                    <p class="message" data-toggle="popover" title="Che de la Luz Biblioteca" data-content="Autor: Pepe el toro">-->
                                <!--<strong>Biomedica</strong> - Ciencias de ...</p> -->
                                <div class="actions">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
        <!-- /dash-unit -->
    </div>
    <!-- /span3 -->

    <script type="text/javascript">
        $(document).ready(function() {

            $('[data-toggle="popover"]').popover({
                placement: 'top',
                trigger: 'hover'
            });
        });

    </script>

</body>


<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt">

    <?php 
                    $query = "SELECT matricula, Nombre, Carrera, Mensaje from correo";
                      $result = mysql_query($query);
                      $numero = 0;
            
            $id_correo="";
            $Nombre="";
            
                      while($row = mysql_fetch_array($result))
                      {    
                        echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
                           $id_correo = ($row["matricula"]) . "</font></td>";
                        echo "<td width=\"25%\"><font face=\"verdana\">" . 
                           $Nombre= ($row["Nombre"]) . "</font></td>";
                        echo "<td width=\"25%\"><font face=\"verdana\">" . 
                            $row["Carrera"] . "</font></td>";
                        echo "<td width=\"25%\"><font face=\"verdana\">" . 
                            $row["Mensaje"]. "</font></td></tr>";    
                        $numero++;
                      }
                ?>



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


</html>
