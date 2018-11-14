<?php
    session_start();


$user=$_SESSION['usuario'];

    include('../require/conexion.class.php');
    include('../require/verRol.class.php');


    $carga = new vRol();
    $valor_resultado = $carga->get_detalle($user);
    $datos=array(
        [
        'rol'=> $valor_resultado['rol']
        ]
    );

    
    echo json_encode($datos);
?>

