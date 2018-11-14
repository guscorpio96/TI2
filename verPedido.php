
<?php 
session_start();
?>

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
  <body onload="verPedi()" style="">

<div class="topnav" id="myTopnav">
  <a>Inicio</a>
  <a>Novedades</a>
  <a>Contactenos</a>
  <a">Acerca de nosotros</a>
  <a>Portal del trabajador</a>
  <a href="jefeCarga.php"  class="active">Verificar pedidos</a>
  <a>Usuario: <?php echo $_SESSION['usuario']; ?></a>
  <a style="float: right;" onclick="deslogueo()" class="salir">Salir</a>
</div>

<div style="margin-left: 5%;margin-right: 5%; width: 90%; color:white;">
    <h1 style="color:white; text-align: center;">Pedidos pendientes</h1>
    <div class="col-md-12 col-xs-12" style="color:white;display: inline-block;" > 

      <div id="detPedido" style="width: 100%;margin-bottom: 3%;">


      </div>
      
    </div>

    <div  style="margin-top:2%; margin-top:2%; color: white;"  class="col-md-6">
        <div class="col-md-6" style="">Chofer:</div>
        <select id="cboChofer" class="col-md-6" style="float:right;color:black;display: inline-block;">
          
        </select> 
    </div>
    <div  style="margin-top:2%; margin-bottom:2%;"  class="col-md-6">
        <div class="col-md-6" style="">Vehiculo:</div>
        <select id="cboVehiculo" class="col-md-6" style="float:right;color:black;display: inline-block;">
          
        </select>
    </div>
    <div style="margin-top:2%; margin-bottom: 2%;"  class="col-md-12">
    <input type="button" style="border-radius:15px;color:black;" onclick="grabarGR()" class="col-md-offset-5 col-md-2" name="registrar" value="ASIGNAR">
  </div>
</div>



    <script type="text/javascript" src="principal/principal.js"></script>
    <script type="text/javascript" src="index/funciones.index.js"></script>
    <script type="text/javascript" src="solicitarPedido/cargarP.js"></script>
  </body>
</html>

