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
  <body >

<div class="topnav" id="myTopnav">
  <a>Inicio</a>
  <a>Novedades</a>
  <a>Contactenos</a>
  <a class="active">Acerca de nosotros</a>
  <a href="solictarPedido.php">Realizar pedido</a>
  <a href="editUsuario.php">Usuario: <?php echo $_SESSION['usuario']; ?></a>
  <a style="float: right;" onclick="deslogueo()" class="salir">Salir</a>
</div>

<div>
  <h1 style="color:white; text-align: center;">Distribuidora Lamborggini</h1>
  <div class="col-md-6 col-xs-12" style="height: 550px; color:white;" >    
    <div style="margin-left: 50px;text-align: justify;">
    <h1>Misión</h1>
    Crear un buen ambiente organizacional, dar un buen servicio a nuestros clientes, ser puntuales con las entregas establecidas y tener un buen impacto ambiental.
    <h1>Visión</h1>
    Ser una de las mejores empresas distribuidoras a nivel nacional, ofreciendo servicios de calidad en un marco de responsabilidad, respeto y profesionalismo, cumpliento siempre las más altas expectativas de nuestros clientes.
    </div>
  </div>
  <div class="col-md-6 col-xs-12" style="height: 550px " >
    <img src="img/logo.png" style="float: right; align-items: center; margin-right: 220px; margin-top: 50px;">
  </div>
</div>
    <script type="text/javascript" src="principal/principal.js"></script>
    <script type="text/javascript" src="index/funciones.index.js"></script>
  </body>
</html>
