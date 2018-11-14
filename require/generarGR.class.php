<?php
class generarGR {
    private $_conexion;
    public function __construct() {
        $this->_conexion = new conexion();
    }
    public function set_GR($codV,$codOP,$codC){
        $sql ="INSERT guia_remision VALUES (NULL,".$codV.",".$codOP.",".$codC.",DEFAULT,NULL)";
        return $this->_conexion->ejecutar_sentencia($sql);
    }
    public function retornar_SELECT(){
        return $this->_conexion->retornar_array();
    }
}
?>
