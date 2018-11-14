<?php
    include('../require/conexion.class.php');
    include('../require/generarGR.class.php');
    $carga = new generarGR();

$codV=$_POST['_COD_V'];
$codOP=$_POST['_COD_OP'];        
$codC=$_POST['_COD_C'];

    $valor_resultado = $carga->set_GR($codV,$codOP,$codC);

    echo json_encode($valor_resultado);
?>
