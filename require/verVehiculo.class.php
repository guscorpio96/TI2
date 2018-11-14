<?php

class vVehiculo {

    private $_conexion;

    public function __construct() {
        $this->_conexion = new conexion();
    }

    public function get_detalle(){
        $sql ="SELECT  c.cod_chofer AS cc,  CONCAT(p.des_nombres,' ',p.DES_APPATER,' ',p.DES_APMATER) AS chof FROM chofer c JOIN empleado e ON c.cod_emp=e.cod_emp JOIN persona p ON p.cod_per=e.cod_per";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->retornar_SELECT();
    }
    

    public function retornar_SELECT(){
        return $this->_conexion->retornar_array();
    }

}
?>