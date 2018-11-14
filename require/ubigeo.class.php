<?php

class ubigeo {

    private $_conexion;

    public function __construct() {
        $this->_conexion = new conexion();
    }

    public function get_ubigeo_dist($prov){
        $sql ="SELECT * FROM distrito WHERE idProv=".$prov;
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->retornar_SELECT();
    }

    public function get_ubigeo_dpto(){
        $sql ="SELECT * FROM departamento";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->retornar_SELECT();
    }

    public function get_ubigeo_prov($iddepa){
        $sql ="SELECT * FROM provincia where iddepa=".$iddepa;
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->retornar_SELECT();
    }    
    

    public function retornar_SELECT(){
        return $this->_conexion->retornar_array();
    }

}
?>

