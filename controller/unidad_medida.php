<?php
    include('../require/conexion.class.php');
    include('../require/unidadMedida.class.php');
    $ubigeo = new unidadMedida();
    $valor_resultado = $ubigeo->get_unidad();
    $datos=array(
        [
            'cod_uni'=> $valor_resultado['cod_uni'],
            'nombre' => $valor_resultado['nombre']
        ]
    );
    while($valores = $ubigeo->retornar_SELECT()){
        $datos2=array(
            'cod_uni'=> $valores['cod_uni'],
            'nombre' => $valores['nombre']
        );
        array_push($datos,$datos2);
        $datos2=array();
    }
    echo json_encode($datos);