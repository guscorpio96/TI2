<?php
    include('../require/conexion.class.php');
    include('../require/ubigeo.class.php');
    $ubigeo = new ubigeo();
    $iddpto=$_POST['_id_dpto']; 
    $valor_resultado = $ubigeo->get_ubigeo_prov($iddpto);
    $datos=array(
        [
            'idProv'=> $valor_resultado['idProv'],
            'provincia' => $valor_resultado['provincia'],
            'idDepa' => $valor_resultado['idDepa']
        ]
    );
    while($valores = $ubigeo->retornar_SELECT()){
        $datos2=array(
            'idProv'=> $valores['idProv'],
            'provincia' => $valores['provincia'],
            'idDepa' => $valores['idDepa']
        );
        array_push($datos,$datos2);
        $datos2=array();
    }
    echo json_encode($datos);