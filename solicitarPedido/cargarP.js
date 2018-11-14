efunction cargarPedido(){
	$parametros = {
	        };
    $.ajax({
        url: './controller/cargaPed.php',
        type: 'POST',
        async: true,
        dataType: 'json',
        data: $parametros,
        error: function(arguments,error){
            console.log(error);
        },
        success: function (datos){
			ubigeo=datos;
        	var Distritos2='';
        	var Distritos='';

      	for (var i = 0; i < datos.length; i++) {
        			Distritos='<tr>'+
        						'<td>'+datos[i].fullname+'</td>'+
        						'<td>'+datos[i].fecini+'</td>'+
        						'<td>'+datos[i].fecfin+'</td>'+
        						'<td>'+datos[i].dist+'</td>'+
        						'<td>'+datos[i].provi+'</td>'+
        						'<td>'+datos[i].destinatario+'</td>'+
                                '<td onclick="asignar('+datos[i].ordPed+')" class="asignar">ASIGNAR</td>'+
        					'</tr>';
        			Distritos2=Distritos2+Distritos;
        	}
            console.log(datos)
        	$("#tablaPed").append(Distritos2);

        }
    });	
}

function cargarPedidoAdm(){
  debugger;
  $parametros = {
          };
    $.ajax({
        url: './controller/verPedAdm.php',
        type: 'POST',
        async: true,
        dataType: 'json',
        data: $parametros,
        error: function(arguments,error){
            console.log(error);
        },
        success: function (datos){
      ubigeo=datos;
          var Distritos2='';
          var Distritos='';
          debugger;
        for (var i = 0; i < datos.length; i++) {
              Distritos='<tr>'+
                    '<td>'+datos[i].fullname+'</td>'+
                    '<td>'+datos[i].fecini+'</td>'+
                    '<td>'+datos[i].fecfin+'</td>'+
                    '<td>'+datos[i].dist+'</td>'+
                    '<td>'+datos[i].provi+'</td>'+
                    '<td>'+datos[i].destinatario+'</td>'+
                                '<td onclick="asignar('+datos[i].ordPed+')" class="asignar">VER DETALLES</td>'+
                  '</tr>';
              Distritos2=Distritos2+Distritos;
          }
            console.log(datos)
          $("#tablaPed").append(Distritos2);

        }
    }); 
}


function asignar(codOp){
    sessionStorage.setItem("OP", codOp);
    window.location="verPedido.php";
}


var opi='';

function verPedi(){

var chofer;

chofer='<option>Julio</option>';

var vehiculo;

vehiculo='<option>Susuki Ertiga</option>';

$("#cboChofer").html(chofer);
$("#cboVehiculo").html(vehiculo);

    opi=sessionStorage.getItem("OP");
    console.log(opi)
    $parametros = {
        '_opi':opi
            };
    $.ajax({
        url: './controller/verDetallePedido.php',
        type: 'POST',
        async: true,
        dataType: 'json',
        data: $parametros,
        error: function(arguments,error){
            debugger;
            console.log(error);
        },
        success: function (datos){
            //console.log(datos);

var data='';
data='<div class="col-md-6" style="display: inline-block;    margin-top: 1.5%;">'+
        '<div class="col-md-5">Nombre de cliente</div>'+
        '<div class="col-md-1">:</div>'+
        '<div class="col-md-5">'+datos[0].fullname+'</div>'+
      '</div>'+

      '<div class="col-md-6" style="display: inline-block;    margin-top: 1.5%;">'+
        '<div class="col-md-5">Codigo de pedido</div>'+
        '<div class="col-md-1">:</div>'+
        '<div class="col-md-5">'+datos[0].ordPed+'</div>'+
      '</div>'+

      '<div class="col-md-6" style="display: inline-block;    margin-top: 1.5%;">'+
        '<div class="col-md-5">Fecha de recojo</div>'+
        '<div class="col-md-1">:</div>'+
        '<div class="col-md-5">'+datos[0].fecini+'</div>'+
      '</div>'+

      '<div class="col-md-6" style="display: inline-block;    margin-top: 1.5%;">'+
        '<div class="col-md-5">Fecha de entrega</div>'+
        '<div class="col-md-1">:</div>'+
        '<div class="col-md-5">'+datos[0].fecfin+'</div>'+
      '</div>'+

      '<div class="col-md-6" style="display: inline-block;    margin-top: 1.5%;"">'+
        '<div class="col-md-5">Distrito de recojo</div>'+
        '<div class="col-md-1">:</div>'+
        '<div class="col-md-5">'+datos[0].dist+'</div>'+
      '</div>'+

      '<div class="col-md-6" style="display: inline-block;    margin-top: 1.5%;"">'+
        '<div class="col-md-5">Departamento de destino</div>'+
        '<div class="col-md-1">:</div>'+
        '<div class="col-md-5">'+datos[0].provi+'</div>'+
      '</div>'+

      '<div class="col-md-6" style="display: inline-block;    margin-top: 1.5%;"">'+
        '<div class="col-md-5">Provincia de destino</div>'+
        '<div class="col-md-1">:</div>'+
        '<div class="col-md-5">'+datos[0].provi+'</div>'+
      '</div>'+

      '<div class="col-md-6" style="display: inline-block;    margin-top: 1.5%;"">'+
        '<div class="col-md-5">Nombre de destinatario</div>'+
        '<div class="col-md-1">:</div>'+
        '<div class="col-md-5">'+datos[0].destinatario+'</div>'+
      '</div>'+

      '<div class="col-md-6" style="display: inline-block;    margin-top: 1.5%;"">'+
        '<div class="col-md-5">Telefono 1</div>'+
        '<div class="col-md-1">:</div>'+
        '<div class="col-md-5">'+datos[0].tlf1+'</div>'+
      '</div>'+

      '<div class="col-md-6" style="display: inline-block;    margin-top: 1.5%;"">'+
        '<div class="col-md-5">Telefono 2</div>'+
        '<div class="col-md-1">:</div>'+
        '<div class="col-md-5">'+datos[0].tlf2+'</div>'+
      '</div>'+

      '<div class="col-md-6" style="display: inline-block;    margin-top: 1.5%;"">'+
        '<div class="col-md-5">Descripcion de bien</div>'+
        '<div class="col-md-1">:</div>'+
        '<div class="col-md-5">'+datos[0].descrip+'</div>'+
      '</div>'+

      '<div class="col-md-6" style="display: inline-block;    margin-top: 1.5%;"">'+
        '<div class="col-md-5">Cantidad</div>'+
        '<div class="col-md-1">:</div>'+
        '<div class="col-md-5">'+datos[0].canti+'</div>'+
      '</div>'+

      '<div class="col-md-6" style="display: inline-block;    margin-top: 1.5%;"">'+
        '<div class="col-md-5">Unidad de medida</div>'+
        '<div class="col-md-1">:</div>'+
        '<div class="col-md-5">'+datos[0].unime+'</div>'+
      '</div>';


      $('#detPedido').html(data);

        }
    }); 
    verChofer()
    verVehiculo()
}

function verChofer(){
  $parametros = {
          };
    $.ajax({
        url: './controller/verChofer.php',
        type: 'POST',
        async: true,
        dataType: 'json',
        data: $parametros,
        error: function(arguments,error){
            console.log(error);
        },
        success: function (datos){
         // console.log(datos);
          var chofer='';
          var chofer2='';

          for (var i = 0; i < datos.length; i++) {
              chofer='<option value="'+datos[i].cv+'">'+datos[i].vehic+'</option>';
              chofer2=chofer2+chofer;           
          }
          $("#cboVehiculo").html(chofer2);

        }
    }); 
}

function verVehiculo(){
  $parametros = {
          };
    $.ajax({
        url: './controller/verVehiculo.php',
        type: 'POST',
        async: true,
        dataType: 'json',
        data: $parametros,
        error: function(arguments,error){
            console.log(error);
        },
        success: function (datos){
          //console.log(datos);
          var chofer='';
          var chofer2='';

          for (var i = 0; i < datos.length; i++) {
              chofer='<option value="'+datos[i].cc+'">'+datos[i].chof+'</option>';
              chofer2=chofer2+chofer;           
          }
          $("#cboChofer").html(chofer2);

        }
    }); 
}


var codv='';
var codop='';
var codc='';


function grabarGR(){

codv=document.getElementById('cboVehiculo').value;
codop=opi;
codc=document.getElementById('cboChofer').value;



  $parametros = {

'_COD_V':codv,
'_COD_OP':codop,
'_COD_C':codc

          };
    $.ajax({
        url: './controller/generarGR.php',
        type: 'POST',
        async: true,
        dataType: 'json',
        data: $parametros,
        error: function(arguments,error){
            console.log(error);
        },
        success: function (datos){
          /*console.log(datos);
console.log(opi);
console.log(codv);
console.log(codc);*/
debugger;
if(datos='true'){
window.location='jefeCarga.php'
}
else{
  alert('Sucedio un error al grabar, favor comunicarse con el administrador.')

}
        }
    }); 

}