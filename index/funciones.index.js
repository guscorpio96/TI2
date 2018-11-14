var usuario;
var pwd;
function validar(){
	console.log("entro")
	usuario =  document.getElementById('username').value;
	pwd = document.getElementById('password').value;
	//console.log(usuario.indexOf("'"));
	//console.log(usuario.lastIndexOf("'"));
	if (usuario.length==0 || pwd.length==0) {
		$('#respuesta').html('Ingrese sus datos');
        $('#respuesta').addClass('alert alert-danger');
	}
	else{
		var lol = usuario.split("--");
		if (usuario.indexOf("'")!=-1 || usuario.indexOf('"')!=-1 ) {
			$('#respuesta').html('Usuario y contraseña incorrectos');
        	$('#respuesta').addClass('alert alert-danger');
		}
		else{
				logueo(usuario,pwd)
			}		
	}
}
function logueo(user, contra){
	$parametros={
	'_username' : user,
	'_password' : contra
	}
	$.ajax({
            url: './controller/login.php',
            type: 'POST',
            data: $parametros,
            dataType: 'json',
            error: function(arguments,error){
            	//debugger;
            	console.log(error);
            },
            success: function (datos){
            	if (datos.response==1) {


                    $parametros={}
                    $.ajax({
                            url: './controller/verRol.php',
                            type: 'POST',
                            data: $parametros,
                            dataType: 'json',
                            error: function(arguments,error){
                                //debugger;
                                console.log(error);
                            },
                            success: function (datos){
                                //debugger;
                                if(datos[0].rol==1){
                                    window.location="principal.php";
                                }
                                else if (datos[0].rol==2){
                                    window.location="jefeCarga.php";
                                }
                                else if (datos[0].rol==3){
                                    window.location="adminFinanzas.php";
                                }
                            }
                    });


            	}
            	else{
            		$('#respuesta').html(datos.message+" neuvo "+datos.rpta);
            		$('#respuesta').addClass('alert alert-danger');
            	}
            }
    });
}


function irHtml(link){ 
	window.location=link; 
}

function deslogueo(){
	//if (user="") {}
	$parametros={}
	$.ajax({
            url: './controller/logout.php',
            type: 'POST',
            data: $parametros,
            dataType: 'json',
            error: function(arguments,error){
            	debugger;
            	console.log(error);
            },
            success: function (datos){
            	if (datos.response==1) {
            		alert(datos.message);
            		window.location="index.php";
            	}
            	else{
            		alert(datos.message);
            	}
            }
    });
}