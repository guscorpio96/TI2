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
  <body onload="cargarUser()">

<div class="topnav" id="myTopnav">
  <a>Inicio</a>
  <a>Novedades</a>
  <a>Contactenos</a>
  <a>Acerca de nosotros</a>
  <a href="solictarPedido.php">Realizar pedido</a>
  <a class="active" href="editUsuario.php">Usuario: <?php echo $_SESSION['usuario']; ?></a>
  <a style="float: right;" onclick="deslogueo()" class="salir">Salir</a>
</div>

<div style="margin-left:10%;margin-right:10%;margin-top:1.5%;margin-bottom: 2%; color: white;font-size: 25px;">
  <h1 style="color:white; text-align: center;">Mi Perfil</h1>

  <div class="col-md-12 col-xs-12" style="color:white;" >
  <h1 style="color:white ">Datos de cuenta</h1>

    <div class="col-md-6" style="margin-top:1%;    display: inline-block;">
      <div class="col-md-6">
        Alias de usuario:
      </div>
      <div style="align:center;"  class="col-md-6">
          <input id="usuario" type="text" name="" style="float:right;color:black; width:100%;">
      </div>
    </div>

    <div class="col-md-6" style="margin-top:1%;    display: inline-block;">
      <div class="col-md-6">
        Tipo de cuenta:
      </div>
      <div style="align:center;"  class="col-md-6">
          <input id="tipoCuenta" type="text" name="" style="float:right;color:black; width:100%;">
      </div>
    </div>

    <div class="col-md-6" style="margin-top:1%;    display: inline-block;">
      <div class="col-md-6">
        Nueva contraseña:
      </div>
      <div style="align:center;"  class="col-md-6">
          <input id="contra1" placeholder="Nueva contraseña" type="text" name="" style="float:right;color:black; width:100%;">
      </div>
    </div>

    <div class="col-md-6" style="margin-top:1%;    display: inline-block;">
      <div class="col-md-6">
        Nueva contraseña::
      </div>
      <div style="align:center;"  class="col-md-6">
          <input id="contra2" placeholder="Repita contraseña" type="text" name="" style="float:right;color:black; width:100%;">
      </div>
    </div>
  </div>

  <div class="col-md-12 col-xs-12" style="color:white;" >
  <h1 style="color:white ">Datos personales</h1>

    <div class="col-md-6" style="margin-top:1%;    display: inline-block;">
      <div class="col-md-6">
        Nombres:
      </div>
      <div style="align:center;"  class="col-md-6">
          <input id="nombres" type="text" name="" style="float:right;color:black; width:100%;">
      </div>
    </div>

    <div class="col-md-6" style="margin-top:1%;    display: inline-block;">
      <div class="col-md-6">
        Apellido paterno:
      </div>
      <div style="align:center;"  class="col-md-6">
          <input id="paterno" type="text" name="" style="float:right;color:black; width:100%;">
      </div>
    </div>

    <div class="col-md-6" style="margin-top:1%;    display: inline-block;">
      <div class="col-md-6">
        Apellido materno:
      </div>
      <div style="align:center;"  class="col-md-6">
          <input id="materno" type="text" name="" style="float:right;color:black; width:100%;">
      </div>
    </div>

    <div class="col-md-6" style="margin-top:1%;    display: inline-block;">
      <div class="col-md-6">
        Telefono:
      </div>
      <div style="align:center;"  class="col-md-6">
          <input id="telefono" type="text" name="" style="float:right;color:black; width:100%;">
      </div>
    </div>

    <div class="col-md-6" style="margin-top:1%;    display: inline-block;">
      <div class="col-md-6">
        Tipo de Documento:
      </div>
      <div style="align:center;"  class="col-md-6">
          <input id="tipoDoc" type="text" name="" style="float:right;color:black; width:100%;">
      </div>
    </div>

    <div class="col-md-6" style="margin-top:1%;    display: inline-block;">
      <div class="col-md-6">
        Numero de documento:
      </div>
      <div style="align:center;"  class="col-md-6">
          <input id="numDoc" type="text" name="" style="float:right;color:black; width:100%;">
      </div>
    </div>

    <div class="col-md-6" style="margin-top:1%;    display: inline-block;">
      <div class="col-md-6">
        Razon Social:
      </div>
      <div style="align:center;"  class="col-md-6">
          <input id="razonSocial" type="text" name="" style="float:right;color:black; width:100%;">
      </div>
    </div>

    <div class="col-md-6" style="margin-top:1%;    display: inline-block;">
      <div class="col-md-6">
        E-mail:
      </div>  
      <div style="align:center;"  class="col-md-6">
          <input id="email" type="text" name="" style="float:right;color:black; width:100%;">
      </div>
    </div>

    <div class="col-md-12" style="margin-top:1%;    display: inline-block;">
      <div class="col-md-3">
        Direccion:
      </div>
      <div style="align:center;"  class="col-md-9">
          <textarea  id="direccion" style="float:right;color:black; width:100%;"></textarea>
      </div>
    </div>
  </div>

  <div style="margin-top:2%; margin-bottom:2%;"  class="col-md-12">
    <input type="button" style="border-radius:15px;color:black;" onclick="guardarPedido()" class="col-md-offset-4 col-md-4" name="registrar" value="GUARDAR CAMBIOS">
  </div>  

</div>
    <script type="text/javascript" src="principal/principal.js"></script>
    <script type="text/javascript" src="solicitarPedido/usuario.js"></script>
    <script type="text/javascript" src="index/funciones.index.js"></script>
  </body>
</html>
