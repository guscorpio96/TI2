<?php
    include('../require/conexion.class.php');
    include('../require/verPedidoDet.class.php');

    $coped = $_POST['_opi'];

    $carga = new detPed();
    $valor_resultado = $carga->get_detalle($coped);
    $datos=array(
        [
        'ordPed'=> $valor_resultado['ordPed'],
        'fullname' => $valor_resultado['fullname'],
        'fecini'=> $valor_resultado['fecini'],
        'fecfin' => $valor_resultado['fecfin'],
        'dist'=> $valor_resultado['dist'],
        'provi' => $valor_resultado['provi'],
        'destinatario' => $valor_resultado['destinatario'],
        'descrip'=> $valor_resultado['descrip'],
        'canti' => $valor_resultado['canti'],
        'unime'=> $valor_resultado['unime'],
        'tlf1' => $valor_resultado['tlf1'],
        'tlf2' => $valor_resultado['tlf2']
        ]
    );

    
    echo json_encode($datos);
?>

