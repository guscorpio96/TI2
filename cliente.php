<!DOCTYPE html>
<html lang="es" >
  <head>
    <title>DISTRIBUIDORA</title>

    <!-- Including general head -->
    <?php  include_once("include/head.general.php");?>
    <!--Estilos-->
    <link rel="stylesheet" type="text/css" href="index/style.index.css">
    <link rel="stylesheet" type="text/css" href="principal/principal.css">
    
  </head>
  <body >


<div class="topnav" id="myTopnav">
  <a>Inicio</a>
  <a>Novedades</a>
  <a>Contactenos</a>
  <a class="active">Acerca de nosotros</a>
  <a style="float: right;" onclick="deslogueo()" class="salir">Salir</a>
</div>

<div style="margin-left:15%;margin-right:15%;margin-top:1.5%; color: white;font-size: 30px;">
	<h1 style="text-align:center;">INTRODUZCA SUS DATOS PERSONALES</h1>
	<div>
		<div class="col-md-6">
			Escoja lugar de partida: 
		</div>
		<div style="align:center;"  class="col-md-6">
			<input type="button" style="border-radius:15px;float:right;width: 200px;height: 50px;" value="Mapa" 
			onclick="window.open('mapaInicio.html','name','width:150px;height:200px;', false)">
		</div>
	</div>
	<div></div>
	<div></div>
	<div></div>
</div>



    <script type="text/javascript" src="principal/principal.js"></script>
    <script type="text/javascript" src="index/funciones.index.js"></script>
  </body>
</html>


