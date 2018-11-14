<?php
session_start();

$_SESSION = array();
session_destroy();
if (empty($_SESSION['usuario'])) {
    $Logout = array(
    'response' => 1,
    'message' => "Su sesion cerro satisfactoriamente");
} else {
    $Logout = array(
    'response' => 0,
    'message' => "Ha ocurrido un error, intente de nuevo");
} 
echo json_encode($Logout);
?>