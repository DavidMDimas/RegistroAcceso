<!DOCTYPE html>
<html>
<head>
	<title>Buscador</title>
	<meta charset="utf-8"HTTP-EQUIV="REFRESH" CONTENT="600;URL=../Inicio.html"/>
	<link rel="stylesheet" type="text/css" href="../css/Buscador.css" />
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
  
    <style type="text/css">
      body {
        padding-top: 30px;
      }

      pbfooter {
        position:relative;
      }
    </style>
	<script type="text/javascript" src="ajax.js"></script>
</head>

	<body>

		<script type="text/javascript"> 
		    function inhabilitar () {
			alert ("Funcion Cancelada")
			return false
		    }
		    document.oncontextmenu=inhabilitar
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
              <li><a href="../Mod/Preregistro.php"><i class="icon-th icon-white"></i> Pre-Registro</a></li>
              <li class="active"><a href="Buscador.php"><i class="icon-lock icon-white"></i> Consulta de Libros</a></li>
              <li><a href="../login.html"><i class="icon-user icon-white"></i> Administrador</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

		<center>	
			<h1><b><img src = "../img/consulta.png"height="110" width="300"></b></h1>

			<br>	
		
			Buscar <input type="text" id="bus" name="bus" onkeyup="loadXMLDoc()" required />
		
			<div id="myDiv">
				
			</div>

		</center>
		
		<script> 
			miFecha = new Date() 
		</script>
	<h10>Copyright © all rights reserved by Biblioteca TESi 2017</h10>
	</body>
</html>