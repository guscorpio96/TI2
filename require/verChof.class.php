<?php

class vChofer {

    private $_conexion;

    public function __construct() {
        $this->_conexion = new conexion();
    }

    public function get_detalle(){
        $sql ="SELECT COD_VEHIC AS cv, cod_tc AS ct,CONCAT(des_marca,' ',DES_MODELO,' (',NUM_PESONETO,')') AS vehic FROM vehiculo";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->retornar_SELECT();
    }
    

    public function retornar_SELECT(){
        return $this->_conexion->retornar_array();
    }

}
?>