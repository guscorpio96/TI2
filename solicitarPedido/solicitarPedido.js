var Distritos='';
var Distritos2='';
var Dep='';
var Dep2='';
var Prov='';
var Prov2='';
var ubigeo='';
var tipCar='';
var tipCar2='';
var Carga='';
var uM='';
var uM2='';

//var vCOD_OP ='';
var vCOD_OP='';         
var vCOD_CLI='';
var vFEC_INI_TRASLADO ='';
var vCOD_DIST_ORIGEN='';
var vDES_DIR_RECOJO='';
var vFEC_FIN_TRASLADO ='';
var vCOD_PROV_DESTINO ='';
var vDES_DIR_DESTINO  ='';
var vDES_BIEN='';
var vNUM_CANTIDAD='';
var vDES_UNIDAD_MEDIDA='';
var vDES_PESO='';
var vIND_OP='';


function cargarSolPed(){
    debugger;
    $('#dataCotiza').hide();
$('#dataTarje').hide();   
 $('#btnRP').hide();
$('#btnCPN').hide();
$('#btnRpedido').hide();
	$parametros = {
	        };
    $.ajax({
        url: './controller/ubigeo_distrito.php',
        type: 'POST',
        async: true,
        dataType: 'json',
        data: $parametros,
        error: function(arguments,error){

            console.log(error);
        },
        success: function (datos){
//        	debugger;
			ubigeo=datos;
        	//console.log(datos[0].cod_ubigeo.substr(0,2))
        	var Distritos='';
        	var cad2='';
        	for (var i = 0; i < datos.length; i++) {
        			Distritos='<option value="'+datos[i].idDist+'">'+datos[i].distrito+'</option>';
        			Distritos2=Distritos2+Distritos;
        	}
            CargaDpto()
        	$("#cboDis").html(Distritos2);
        	$("#cboDep").html(Dep2);
        	TipoCarga()
        	Unidad()
        }
    });	
}

function CargaDpto(){
    $parametros = {
            };
    $.ajax({
        url: './controller/ubigeo_dpto.php',
        type: 'POST',
        async: true,
        dataType: 'json',
        data: $parametros,
        error: function(arguments,error){

            console.log(error);
        },
        success: function (datos){
//          debugger;
            ubigeo=datos;
            //console.log(datos[0].cod_ubigeo.substr(0,2))
            var Distritos='';
            var cad2='';
            for (var i = 0; i < datos.length; i++) {
                    Distritos='<option value="'+datos[i].idDepa+'">'+datos[i].departamento+'</option>';
                    Dep2=Dep2+Distritos;
            }
            $("#cboDep").html(Dep2);
        }
    }); 
}

function cargaProv(){
	var depar=document.getElementById('cboDep').value;
	
    $parametros = {
        '_id_dpto'           :   depar
            };
    $.ajax({
        url: './controller/ubigeo_prov.php',
        type: 'POST',
        async: true,
        dataType: 'json',
        data: $parametros,
        error: function(arguments,error){
debugger;
            console.log(error);
        },
        success: function (datos){
//          debugger;
            ubigeo=datos;
            //console.log(datos[0].cod_ubigeo.substr(0,2))
            Prov2=''
            for (var i = 0; i < ubigeo.length; i++) {               
                    Prov='<option value="'+ubigeo[i].idProv+'">'+ubigeo[i].provincia+'</option>';
                    Prov2=Prov2+Prov;
            }
            $("#cboProv").html(Prov2);

        }
    }); 

}
function TipoCarga(){
	$parametros = {
	        };
    $.ajax({
        url: './controller/tipo_carga.php',
        type: 'POST',
        async: true,
        dataType: 'json',
        data: $parametros,
        error: function(arguments,error){
            console.log(error);
            debugger;
        },
        success: function (datos){

			Carga=datos;
        	for (var i = 0; i < datos.length; i++) {
        			tipCar='<option value="'+datos[i].COD_TC+'">'+datos[i].DES_CARGA+'</option>';
        			tipCar2=tipCar2+tipCar;        		
        	}
        	$("#cboTipCar").html(tipCar2);
            //console.log(Carga);

     
        }
    });
}

function cargaDescCarga(){
	var cboCarga=document.getElementById('cboTipCar').value;
    for (var i = 0; i < Carga.length; i++) {        		
		if (Carga[i].COD_TC==cboCarga) {
			$("#lblDescCarga").html(Carga[i].DES_MAX_DIMENSIONES);
		}  
	}
}

function Unidad(){
uM2='';
		uM2='<option value="Kilos">Kilos</option>';
        uM2=uM2+'<option value="Toneladas">Toneladas</option>';       		
        	
        	$("#cboTipUni").html(uM2);
            debugger;

}

function grabarPedido(){
var dis=document.getElementById('cboDis').value;
var prov=document.getElementById('cboProv').value;
var canti=document.getElementById('cant').value;

var costo=prov*canti;
console.log(costo);
document.getElementById('costoCalc').value=costo;

$('#dataCotiza').show();
$('#btnRpedido').show();

}


function verPago(){
    $('#dataTarje').show();
 $('#btnRP').show();
$('#btnCPN').show();

}

function verFecha(){
	var fechaaaa='';
	fechaaaa=document.getElementById('fecRec').value;
	console.log('fecha :v '+fechaaaa);
}

function guardarPedido(){
vCOD_OP=null;   
vCOD_CLI='1';
vFEC_INI_TRASLADO=document.getElementById('fecRec').value;
vCOD_DIST_ORIGEN=document.getElementById('cboDis').value;
vDES_DIR_RECOJO=document.getElementById('referencias').value;
vFEC_FIN_TRASLADO=document.getElementById('fecEnt').value;
vCOD_PROV_DESTINO=document.getElementById('cboProv').value;
vDES_DIR_DESTINO=document.getElementById('referenciasDest').value;
vDES_BIEN='Bien';
vNUM_CANTIDAD=document.getElementById('cant').value;
vDES_UNIDAD_MEDIDA=document.getElementById('cboTipUni').value;
vDES_PESO=document.getElementById('cboTipCar').value;
vIND_OP='';

vNOMBRE_DESTI=document.getElementById('nomDestinatario').value;
vAPEPAT_DESTI=document.getElementById('apepatDest').value;
vAPEMAT_DESTI=document.getElementById('apematDest').value;
vTELF1_DESTI=document.getElementById('tlf1').value;
vTELF2_DESTI=document.getElementById('tlf2').value;

 $parametros = {
        '_COD_OP':vCOD_OP,
        '_COD_CLI':vCOD_CLI,
        '_FEC_INI_TRASLADO':vFEC_INI_TRASLADO,
        '_COD_DIST_ORIGEN':vCOD_DIST_ORIGEN,
        '_DES_DIR_RECOJO':vDES_DIR_RECOJO,
        '_FEC_FIN_TRASLADO':vFEC_FIN_TRASLADO,
        '_COD_PROV_DESTINO':vCOD_PROV_DESTINO,
        '_DES_DIR_DESTINO':vDES_DIR_DESTINO,
        '_DES_BIEN':vDES_BIEN,
        '_NUM_CANTIDAD':vNUM_CANTIDAD,
        '_DES_UNIDAD_MEDIDA':vDES_UNIDAD_MEDIDA,
        '_DES_PESO':vDES_PESO,
        '_IND_OP':vIND_OP,
        '_NOMBRE_DESTI':vNOMBRE_DESTI,
        '_APEPAT_DESTI':vAPEPAT_DESTI,
        '_APEMAT_DESTI':vAPEMAT_DESTI,
        '_TELF1_DESTI':vTELF1_DESTI,
        '_TELF2_DESTI':vTELF2_DESTI

    };
    //debugger
    $.ajax({
        url: './controller/solicitud_pedido.php',
        type: 'POST',
        async: true,
        dataType: 'json',
        data: $parametros,
        error: function(arguments,error){
            console.log(error);
            debugger
        },
        success: function (datos){
            debugger
            console.log(datos);
        }
    }); 

}