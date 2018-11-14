<?php

class Users {

    private $_conexion;

    public function __construct() {
        $this->_conexion = new conexion();
    }

    public function verifyUser_byId($id_user) {
        $sql = "SELECT id,active FROM usuario WHERE users.id='" . $id_user . "'";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->tam_respuesta();
    }

    public function verifyUserAndPass($username, $password) {
        $sql = "SELECT * FROM usuario WHERE DES_USER='" . $username . "' AND DES_PSWRD='" . $password . "' ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->tam_respuesta();
    }


    public function verRol($username) {
        $sql = "SELECT COD_ROL as rol FROM usuario WHERE DES_USER='".$username."'";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->tam_respuesta();
    }

    public function login($username, $password) {
        $sql = "SELECT * FROM users WHERE username='" . $username . "' AND contrasena='" . $password . "' ";
        $this->_conexion->ejecutar_sentencia($sql);
        $user = $this->_conexion->retornar_array();
        return $user['nombres'];
    }

    public function getUser_byId($id_user) {
        $sql = "SELECT * FROM users WHERE users.id=" . $id_user . " LIMIT 1";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->retornar_SELECT();
    }

    public function retornar_SELECT() {
        return $this->_conexion->retornar_array();
    }


    

}
?>

