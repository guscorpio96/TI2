<?php

class tipoCarga {

    private $_conexion;

    public function __construct() {
        $this->_conexion = new conexion();
    }

    public function get_carga(){
        $sql ="SELECT * FROM tipo_carga";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->retornar_SELECT();
    }
    

    public function retornar_SELECT(){
        return $this->_conexion->retornar_array();
    }

}
?>

