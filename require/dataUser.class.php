<?php

class dataUser {

    private $_conexion;

    public function __construct() {
        $this->_conexion = new conexion();
    }

    public function get_data_user($user){
        $sql ="SELECT u.COD_USU,r.DES_DETALLE,u.DES_USER,u.DES_PSWRD,p.* FROM usuario u JOIN persona p ON u.COD_PER=p.COD_PER JOIN rol r ON u.COD_ROL=r.COD_ROL WHERE des_user='".$user."'";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->retornar_SELECT();
    }
    

    public function retornar_SELECT(){
        return $this->_conexion->retornar_array();
    }

}
?>

