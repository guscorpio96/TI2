<?php
    include('../require/conexion.class.php');
    include('../require/verChof.class.php');
    $ubigeo = new vChofer();
    $valor_resultado = $ubigeo->get_detalle();
    $datos=array(
        [
            'cv'=> $valor_resultado['cv'],
            'ct' => $valor_resultado['ct'],
            'vehic' => $valor_resultado['vehic']
        ]
    );
    while($valores = $ubigeo->retornar_SELECT()){
        $datos2=array(
            'cv'=> $valores['cv'],
            'ct' => $valores['ct'],
            'vehic' => $valores['vehic']
        );
        array_push($datos,$datos2);
        $datos2=array();
    }
    echo json_encode($datos);