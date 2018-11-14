<!DOCTYPE html>
<html lang="es" >
  <head>
    <title>Registrar Cliente</title>

    <!-- Including general head -->
    <?php  include_once("include/head.general.php");?>

    <!--Estilos-->
    <link rel="stylesheet" type="text/css" href="index/style.index.css">
    <link rel="stylesheet" type="text/css" href="principal/principal.css">
    
  </head>
  <body >

<div style="margin-left:10%;margin-right:10%;margin-top:1.5%; color: white;font-size: 25px;">
	<h1 style="text-align:center;margin-top:1%;">INTRODUZCA SUS DATOS PERSONALES</h1>
	<div style="margin-top:1%;    display: inline-block;">
		<div class="col-md-6">
			<div>
				<div class="col-md-6">
					Primer nombre:
				</div>
				<div style="align:center;"  class="col-md-6">
					<input type="text" style="border-radius:15px;float:right;color:black; width:100%;" name="nombres">
				</div>
			</div>				
		</div>
		<div class="col-md-6">
			<div>
				<div class="col-md-6">
					Segundo nombre:
				</div>
				<div style="align:center;"  class="col-md-6">
					<input type="text" style="border-radius:15px;float:right;color:black; width:100%;" name="nombres">
				</div>
			</div>				
		</div>
	</div>	
	<div style="margin-top:1%;    display: inline-block;">
		<div class="col-md-6">
			<div>
				<div class="col-md-6">
					Apellido paterno:
				</div>
				<div style="align:center;"  class="col-md-6">
					<input type="text" style="border-radius:15px;float:right;color:black; width:100%;" name="nombres">
				</div>
			</div>				
		</div>
		<div class="col-md-6">
			<div>
				<div class="col-md-6">
					Apellido materno:
				</div>
				<div style="align:center;"  class="col-md-6">
					<input type="text" style="border-radius:15px;float:right;color:black; width:100%;" name="nombres">
				</div>
			</div>				
		</div>
	</div>
	<div style="margin-top:1%;    display: inline-block;">
		<div class="col-md-6" style="display:block;">
			<div>
				<div class="col-md-6" style="display:block;width:50%;">
					Celular:
				</div>
				<div style="align:center;"  class="col-md-6">
					<input type="text" style="border-radius:15px;float:right;color:black; width:100%;" name="nombres">
				</div>
			</div>				
		</div>
		<div class="col-md-6">
			<div>
				<div class="col-md-6">
					Telefono fijo:
				</div>
				<div style="align:center;"  class="col-md-6">
					<input type="text" style="border-radius:15px;float:right;color:black; width:100%;" name="nombres">
				</div>
			</div>				
		</div>
	</div>
	<div class="col-md-12" style="margin-top:1%;    display: inline-block;">
		<div>
			<div class="col-md-6">
				Dirección:
			</div>
			<div style="align:center;"  class="col-md-6">
				<input type="text" style="border-radius:15px;float:right;color:black; width:100%;" name="nombres">
			</div>
		</div>				
	</div>
	<div class="col-md-12" style="margin-top:2%;    display: inline-block;">
		<div>
			<div class="col-md-6">
				Referencias:
			</div>
			<div style="align:center;"  class="col-md-6">
				<input type="text" style="border-radius:15px;float:right;color:black; width:100%;" name="nombres">
			</div>
		</div>				
	</div>
	<div style="align:center;margin-top:2%;"  class="col-md-12">
		<input type="button" style="border-radius:15px;color:black;" class="col-md-offset-4 col-md-4" name="registrar" value="CREAR CUENTA">
	</div>
	
</div>



    <script type="text/javascript" src="principal/principal.js"></script>
    <script type="text/javascript" src="index/funciones.index.js"></script>
  </body>
</html>


