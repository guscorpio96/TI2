<?php
    include('../require/conexion.class.php');
    include('../require/tipCarga.class.php');
    $carga = new tipoCarga();
    $valor_resultado = $carga->get_carga();
    $datos=array(
        [
        'COD_TC'=> $valor_resultado['COD_TC'],
        'DES_CARGA' => $valor_resultado['DES_CARGA'],
        'DES_MAX_DIMENSIONES'=> $valor_resultado['DES_MAX_DIMENSIONES'],
        'NUM_TARA_MAX' => $valor_resultado['NUM_TARA_MAX']
        ]
    );

    while($valores =  $carga->retornar_SELECT()){
        $datos2=array(
            'COD_TC'=> $valores['COD_TC'],
            'DES_CARGA' => $valores['DES_CARGA'],
            'DES_MAX_DIMENSIONES'=> $valores['DES_MAX_DIMENSIONES'],
            'NUM_TARA_MAX' => $valores['NUM_TARA_MAX']
        );
        array_push($datos,$datos2);
        //$datos2=array();
    }
    echo json_encode($datos);
?>