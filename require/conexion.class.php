<?php
class conexion {
	
	private $_conexion;
	private $_base_datos;
	private $_sql;
	private $_result;	
	private $_filas;
	public function __construct () {
    // configuracion para el servidor
	//mysqli es el nuevo parte de php7
	$this->_conexion = mysqli_connect("localhost", "root", "123456", "bddistribuidora");	
 	}
	public function ejecutar_sentencia ($sql) {
		$this->_sql = $sql;
		//Se le cambia mysql_query por mysqli_query
		//en la estructura del mysqli_query primero es la conexion luego la consulta
		return ($this->_result = mysqli_query($this->_conexion , $this->_sql));
	}
	public function ejecutar_ultima_sentencia () {
		return ($this->_result = mysqli_query($this->_conexion , $this->_sql));
	}
	public function retornar_array() {
		return mysqli_fetch_assoc($this->_result);
	}

	public function tam_respuesta() {
		return mysqli_num_rows($this->_result);
	}
}
?>