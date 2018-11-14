<?php

class unidadMedida {

    private $_conexion;

    public function __construct() {
        $this->_conexion = new conexion();
    }

    public function get_unidad(){
        $sql ="SELECT * FROM unidad_medida";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->retornar_SELECT();
    }
    

    public function retornar_SELECT(){
        return $this->_conexion->retornar_array();
    }

}
?>

