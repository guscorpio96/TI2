
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
    <link rel="stylesheet" type="text/css" href="solicitarPedido/cargarP.css">
    
  </head>
  <body onload="cargarPedido()">

<div class="topnav" id="myTopnav">
  <a>Inicio</a>
  <a>Novedades</a>
  <a>Contactenos</a>
  <a">Acerca de nosotros</a>
  <a>Portal del trabajador</a>
  <a class="active"  href="jefeCarga.php">Verificar pedidos</a>
  <a>Usuario: <?php echo $_SESSION['usuario']; ?></a>
  <a style="float: right;" onclick="deslogueo()" class="salir">Salir</a>
</div>

<div>
  <h1 style="color:white; text-align: center;">Distribuidora Lamborggini</h1>
  <table id="tablaPed" class="col-md-6 col-xs- table table-hover"" style="margin-left: 5%;margin-right: 5%; width: 90%; color:white;" >    
    <tr>
      <th>Nombre Cliente</th>
      <th>Fecha de recojo</th>
      <th>Fecha de entrega</th>
      <th>Distrito de recojo</th>
      <th>Provincia de destino</th>
      <th>Nombre de destinatario</th><th>ASIGNAR</th>
    </tr>
  </table>
</div>
    <script type="text/javascript" src="principal/principal.js"></script>
    <script type="text/javascript" src="solicitarPedido/cargarP.js"></script>
    <script type="text/javascript" src="index/funciones.index.js"></script>
  </body>
</html>
