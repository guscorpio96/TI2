<?php
    include('../require/conexion.class.php');
    include('../require/ubigeo.class.php');
    $ubigeo = new ubigeo();
    $valor_resultado = $ubigeo->get_ubigeo_dist(127);
    $datos=array(
        [
            'idDist'=> $valor_resultado['idDist'],
            'distrito' => $valor_resultado['distrito'],
            'idProv'=> $valor_resultado['idProv']
        ]
    );
    while($valores = $ubigeo->retornar_SELECT()){
        $datos2=array(
            'idDist'=> $valores['idDist'],
            'distrito' => $valores['distrito'],
            'idProv'=> $valores['idProv']
        );
        array_push($datos,$datos2);
        $datos2=array();
    }
    echo json_encode($datos);