<!DOCTYPE html>
<html lang="es" >
  <head>
    <title>DISTRIBUIDORA</title>

    <!-- Including general head -->
    <?php  include_once("include/head.general.php");?>
    <!--Estilos-->
    <link rel="stylesheet" type="text/css" href="index/style.index.css">
    
  </head>
  <body >
    <div id="o-wrapper" class="o-wrapper">
        <div class="Login">
            <img src="img/logo.png">
            <div id="NombreEmpresa">Lamborggini S.A.C. </div>
            <form id="formulario" method="post">
            <div class="BoxLogin" ><i class="fa fa-user" aria-hidden="true"></i><input id="username" name="_username"  type="text" placeholder="Usuario"></div>
            <div class="BoxLogin" ><i class="fa fa-lock " aria-hidden="true"></i><input id="password" type="password" name="_password" placeholder="Contraseña"></div>
            <input  type="button" onclick="validar()" class="ButtonEnter" value="Ingresar">
            </form>
            <div class=LoginInfo>
                <input class="botonAyuda" type="button" onclick="irHtml('registroCliente.html')" value="Olvide mi contraseña">
                <input class="botonAyuda" type="button" onclick="irHtml('recuperaContra.html')" value="Necesito una cuenta">
                <div class='Respuesta' id="respuesta">
                </div>
            </div>
        </div>
    </div>     
    <script type="text/javascript" src="index/funciones.index.js"></script>
  </body>
</html>