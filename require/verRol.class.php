<?php

class vRol {

    private $_conexion;

    public function __construct() {
        $this->_conexion = new conexion();
    }

    public function get_detalle($cop){
        $sql ="SELECT COD_ROL as rol FROM usuario WHERE DES_USER='".$cop."'";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->retornar_SELECT();
    }
    

    public function retornar_SELECT(){
        return $this->_conexion->retornar_array();
    }

}
?>