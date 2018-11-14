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
  <a class="active">Acerca de nosotros</a>
  <a style="float: right;" onclick="deslogueo()" class="salir">Salir</a>
</div>

<div style="margin-left:10%;margin-right:10%;margin-top:1.5%;margin-bottom: 2%; color: white;font-size: 25px;">
	<h1 style="text-align:center;margin-top:1%;">REVISAR SOLICITUD DE PEDIDO</h1>

<div style="margin-top:1%;    display: inline-block;">
	<h1 style="margin-top:1%;">DATOS DE ORIGEN</h1>
		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Fecha recojo:
				</div>
				<div style="align:center;"  class="col-md-6">
						<input id="fecRec" type="date" name=""  disabled="disabled"  style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>

		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Distrito:
				</div>
				<div style="align:center;"  class="col-md-6">
						<select id="cboDis"  disabled="disabled"   style="float:right;color:black; width:100%;"></select>				
				</div>
			</div>				
		</div>
		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Referencias:
				</div>
				<div style="align:center;"  class="col-md-6">
						<input id="referencias"  disabled="disabled"  type="text" name="" style="float:right;color:black; width:100%;">
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
						<input id="fecEnt"  disabled="disabled"  type="date" name="" style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>
		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Departamento:
				</div>
				<div style="align:center;"  class="col-md-6">
						<select onchange="cargaProv()" disabled="disabled"  id="cboDep" style="float:right;color:black; width:100%;"></select>				
				</div>
			</div>				
		</div>
		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Provincia:
				</div>
				<div style="align:center;"  class="col-md-6">
						<select id="cboProv" disabled="disabled"  style="float:right;color:black; width:100%;"></select>				
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
						<select onchange="cargaDescCarga()" disabled="disabled"  id="cboTipCar" style="float:right;color:black; width:100%;"></select>
				</div>
			</div>				
		</div>
		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<label id="lblDescCarga" style="color: white;"></label>
		</div>
		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Cantidad:
				</div>
				<div style="align:center;"  class="col-md-6">
						<input id="cant" type="text" name="" disabled="disabled"  style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>

		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Unidad de medida:
				</div>
				<div style="align:center;"  class="col-md-6">
						<select id="cboTipUni"  disabled="disabled" style="float:right;color:black; width:100%;"></select>				
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
						<input id="nomDestinatario" disabled="disabled"  type="text" name="" style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>
		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Apellido paterno:
				</div>
				<div style="align:center;"  class="col-md-6">
						<input id="apepatDest" type="text" disabled="disabled"  name="" style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>

		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Apellido materno:
				</div>
				<div style="align:center;"  class="col-md-6">
						<input id="apematDest" type="text" disabled="disabled"  name="" style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>
		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Telefono 1:
				</div>
				<div style="align:center;"  class="col-md-6">
						<input id="tlf1" type="text" name="" disabled="disabled"  style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>

		<div class="col-md-6" style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Telefono 2:
				</div>
				<div style="align:center;"  class="col-md-6">
						<input id="tlf2" type="text" name="" disabled="disabled"  style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>
</div>



<div  class="col-md-offset-3 col-md-6"  style="margin-top:2%;    display: inline-block;">
	<h1 style="margin-top:1%;margin-bottom: :1%;">DATOS DE COTIZACION</h1>
		<div style="margin-top:1%;    display: inline-block;">
			<div>
				<div class="col-md-6">
					Costo:
				</div>
				<div style="align:center;"  class="col-md-6">
						<input id="costoCalc" type="text" disabled="disabled" name="" style="float:right;color:black; width:100%;">
				</div>
			</div>				
		</div>
</div>


	<div style="margin-top:2%; margin-bottom: :2%;"  class="col-md-12">
		<input type="button" style="border-radius:15px;color:black;" onclick="grabarPedido()" class="col-md-offset-4 col-md-4" name="registrar" value="REALIZAR PEDIDO">
	</div>
	
</div>
    <script type="text/javascript" src="principal/principal.js"></script>
    <script type="text/javascript" src="index/funciones.index.js"></script>
    <script type="text/javascript" src="solicitarPedido/solicitarPedido.js"></script>
  </body>
</html>