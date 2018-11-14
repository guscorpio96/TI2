<?php

session_start();
$user = $_SESSION['usuario'];

    include('../require/conexion.class.php');
    include('../require/dataUser.class.php');
    $carga = new dataUser();
    $valor_resultado = $carga->get_data_user($user);
    $datos=array(
        [
        'DES_USER'=> $valor_resultado['DES_USER'],
        'DES_DETALLE' => $valor_resultado['DES_DETALLE'],
        'DES_NOMBRES'=> $valor_resultado['DES_NOMBRES'],
        'DES_APPATER' => $valor_resultado['DES_APPATER'],
        'DES_APMATER'=> $valor_resultado['DES_APMATER'],
        'DES_TELF' => $valor_resultado['DES_TELF'],
        'DES_TIPODOC'=> $valor_resultado['DES_TIPODOC'],
        'NUM_DOC' => $valor_resultado['NUM_DOC'],
        'DES_RAZONSOCIAL'=> $valor_resultado['DES_RAZONSOCIAL'],
        'DES_EMAIL' => $valor_resultado['DES_EMAIL'],
        'DES_DIRECCION'=> $valor_resultado['DES_DIRECCION']
        ]
    );

        //$datos2=array();
    
    echo json_encode($datos);
?>

