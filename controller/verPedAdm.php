<?php
    include('../require/conexion.class.php');
    include('../require/verPedAdm.class.php');
    $carga = new verPedAdm();
    $valor_resultado = $carga->get_carga();
    $datos=array(
        [
                    'ordPed'=> $valor_resultado['ordPed'],
        'fullname' => $valor_resultado['fullname'],
        'fecini'=> $valor_resultado['fecini'],
        'fecfin' => $valor_resultado['fecfin'],
        'dist'=> $valor_resultado['dist'],
        'provi' => $valor_resultado['provi'],
        'destinatario' => $valor_resultado['destinatario']

        ]
    );

    while($valores =  $carga->retornar_SELECT()){
        $datos2=array(
                                'ordPed'=> $valores['ordPed'],
        'fullname' => $valores['fullname'],
            'fecini'=> $valores['fecini'],
            'fecfin' => $valores['fecfin'],
            'dist'=> $valores['dist'],
            'provi' => $valores['provi'],
            'destinatario' => $valores['destinatario']

        );
        array_push($datos,$datos2);
        //$datos2=array();
    }
    echo json_encode($datos);
?>

