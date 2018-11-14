
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
  <body onload="cargarSolPed()">

<div class="topnav" id="myTopnav">
  <a>Inicio</a>
  <a>Novedades</a>
  <a>Contactenos</a>
  <a  href="principal.php">Acerca de nosotros</a>
    <a  class="active" href="solictarPedido.php">Realizar pedido</a>
  <a>Usuario: <?php echo $_SESSION['usuario']; ?></a>
  <a style="float: right;" onclick="deslogueo()" class="salir">Salir</a>
</div>

<div style="margin-left:10%;margin-right:10%;margin-top:1.5%;margin-bottom: 2%; color: white;font-size: 25px;">
	<h1 style="text-align:center;margin-top:1%;">REALIZAR SOLICITUD DE PEDIDO</h1>

<div style="margin-top:1%;    display: inline-block;">
	<h1 style="margin-top:1%;">DATOS DE ORIGEN</h1>
		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Fecha recojo:
				</div>
				<div style="align:center;"  class="col-md-6">
						<input id="fecRec" type="date" name="" style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>

		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Distrito:
				</div>
				<div style="align:center;"  class="col-md-6">
						<select id="cboDis" style="float:right;color:black; width:100%;"></select>				
				</div>
			</div>				
		</div>
		<div class="col-md-12" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-3">
					Referencias:
				</div>
				<div style="align:center;"  class="col-md-9">
						<textarea id="referencias"  style="float:right;color:black; width:100%;"></textarea>
				</div>
			</div>				
		</div>
</div>



<div style="margin-top:1%;    display: inline-block;">
	<h1 style="margin-top:1%;">DATOS DE DESTINO</h1>
		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Fecha entrega:
				</div>
				<div style="align:center;"  class="col-md-6">
						<input id="fecEnt" type="date" name="" style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>
		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Departamento:
				</div>
				<div style="align:center;"  class="col-md-6">
						<select onchange="cargaProv()" id="cboDep" style="float:right;color:black; width:100%;"></select>				
				</div>
			</div>				
		</div>
		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Provincia:
				</div>
				<div style="align:center;"  class="col-md-6">
						<select id="cboProv" style="float:right;color:black; width:100%;"></select>				
				</div>
			</div>				
		</div>
		<div class="col-md-12" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-3">
					Referencias:
				</div>
				<div style="align:center;"  class="col-md-9">
						<textarea id="referenciasDest"  style="float:right;color:black; width:100%;"></textarea>
				</div>
			</div>				
		</div>
</div>


<div style="margin-top:1%;    display: inline-block;">
	<h1 style="margin-top:1%;margin-bottom: :1%;">DATOS DE CARGA</h1>
		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Tipo de carga:
				</div>
				<div style="align:center;"  class="col-md-6">
						<select onchange="cargaDescCarga()" id="cboTipCar" style="float:right;color:black; width:100%;"></select>
				</div>
			</div>				
		</div>

		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Cantidad:
				</div>
				<div style="align:center;"  class="col-md-6">
						<input id="cant" type="text" name="" style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>

		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Unidad de medida:
				</div>
				<div style="align:center;"  class="col-md-6">
						<select id="cboTipUni" style="float:right;color:black; width:100%;"></select>				
				</div>
			</div>				
		</div>
				<div class="col-md-12" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-3">
					Detalles	de carga:
				</div>
				<div style="align:center;"  class="col-md-9	">
						<textarea id="detCarga" type="text" name="" style="float:right;color:black; width:100%;"></textarea>
				</div>
			</div>				
		</div>
</div>





<div style="margin-top:1%;    display: inline-block;">
	<h1 style="margin-top:1%;margin-bottom: :1%;">DATOS DEL CLIENTE DESTINATARIO</h1>
		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Nombres:
				</div>
				<div style="align:center;"  class="col-md-6">
						<input id="nomDestinatario" type="text" name="" style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>
		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Apellido paterno:
				</div>
				<div style="align:center;"  class="col-md-6">
						<input id="apepatDest" type="text" name="" style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>

		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Apellido materno:
				</div>
				<div style="align:center;"  class="col-md-6">
						<input id="apematDest" type="text" name="" style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>
		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Telefono 1:
				</div>
				<div style="align:center;"  class="col-md-6">
						<input id="tlf1" type="text" name="" style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>

		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Telefono 2:
				</div>
				<div style="align:center;"  class="col-md-6">
						<input id="tlf2" type="text" name="" style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>
</div>

	<div style="margin-top:2%; margin-bottom: 2%;"  class="col-md-12">
		<input type="button" style="border-radius:15px;color:black;" onclick="grabarPedido()" class="col-md-offset-4 col-md-4" name="registrar" value="REALIZAR COTIZACION">
	</div>

<div id="dataCotiza" class="col-md-offset-3 col-md-6"  style="margin-top:2%;    display: inline-block;">
	<h1 style="margin-top:1%;margin-bottom: :1%;">DATOS DE COTIZACION</h1>
		<div style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Costo:
				</div>
				<div style="align:center;"  class="col-md-6">
						<input id="costoCalc" type="text" name="" style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>
</div>

	<div id="btnRpedido" style="margin-top:2%; margin-bottom: 2%;"  class="col-md-12">
		<input type="button" style="border-radius:15px;color:black;" onclick="verPago()" class="col-md-offset-4 col-md-4" name="registrar" value="REALIZAR PEDIDO">
	</div>

<div id="dataTarje" style="margin-top:1%;    display: inline-block;">
	<h1 style="margin-top:1%;">DATOS DE TARJETA</h1>
		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Numero de tarjeta:
				</div>
				<div style="align:center;"  class="col-md-6">
						<input id="numTar" type="text" name="" style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>

		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Fecha de caducidad:
				</div>
				<div style="align:center;"  class="col-md-6">
						<input id="fecCad" type="text" name="" style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>
		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Codigo:
				</div>
				<div style="align:center;"  class="col-md-6">
						<input id="codVer" type="text" name="" style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>
</div>


	<div id="btnRP" style="margin-top:2%; margin-bottom:2%;"  class="col-md-12">
		<input type="button" style="border-radius:15px;color:black;" onclick="guardarPedido()" class="col-md-offset-4 col-md-4" name="registrar" value="REALIZAR PAGO">
	</div>
	
</div>
    <script type="text/javascript" src="principal/principal.js"></script>
    <script type="text/javascript" src="index/funciones.index.js"></script>
    <script type="text/javascript" src="solicitarPedido/solicitarPedido.js"></script>
  </body>
</html>