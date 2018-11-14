<?php
    include('../require/conexion.class.php');
    include('../require/verVehiculo.class.php');
    $ubigeo = new vVehiculo();
    $valor_resultado = $ubigeo->get_detalle();
    $datos=array(
        [
            'chof'=> $valor_resultado['chof'],
            'cc'=> $valor_resultado['cc']
        ]
    );
    while($valores = $ubigeo->retornar_SELECT()){
        $datos2=array(
            'chof'=> $valores['chof'],
            'cc'=> $valores['cc']
        );
        array_push($datos,$datos2);
        $datos2=array();
    }
    echo json_encode($datos);