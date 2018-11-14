function cargarUser(){
	$parametros = {
	        };
    $.ajax({
        url: './controller/dataUser.php',
        type: 'POST',
        async: true,
        dataType: 'json',
        data: $parametros,
        error: function(arguments,error){

            console.log(error);
        },
        success: function (datos){
            console.log(datos)
            document.getElementById('usuario').value=datos[0].DES_USER;
            document.getElementById('tipoCuenta').value=datos[0].DES_DETALLE;
            document.getElementById('nombres').value=datos[0].DES_NOMBRES;
            document.getElementById('paterno').value=datos[0].DES_APPATER;
            document.getElementById('materno').value=datos[0].DES_APMATER;
            document.getElementById('telefono').value=datos[0].DES_TELF;
            document.getElementById('tipoDoc').value=datos[0].DES_TIPODOC;
            document.getElementById('numDoc').value=datos[0].NUM_DOC;
            document.getElementById('razonSocial').value=datos[0].DES_RAZONSOCIAL;
            document.getElementById('email').value=datos[0].DES_EMAIL;
            document.getElementById('direccion').value=datos[0].DES_DIRECCION;

        }
    });	
}