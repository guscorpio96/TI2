<?php
    include('../require/conexion.class.php');
    include('../require/ubigeo.class.php');
    $ubigeo = new ubigeo();
    $valor_resultado = $ubigeo->get_ubigeo_dpto();
    $datos=array(
        [
            'idDepa'=> $valor_resultado['idDepa'],
            'departamento' => $valor_resultado['departamento']
        ]
    );
    while($valores = $ubigeo->retornar_SELECT()){
        $datos2=array(
            'idDepa'=> $valores['idDepa'],
            'departamento' => $valores['departamento']
        );
        array_push($datos,$datos2);
        $datos2=array();
    }
    echo json_encode($datos);