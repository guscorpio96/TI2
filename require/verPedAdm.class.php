<?php

class verPedAdm {

    private $_conexion;

    public function __construct() {
        $this->_conexion = new conexion();
    }

    public function get_carga(){
        $sql ="SELECT o.COD_OP as ordPed,CONCAT(p.DES_NOMBRES,' ',p.DES_APPATER) AS fullname,DATE(o.FEC_INI_TRASLADO) AS fecini,  DATE(o.FEC_FIN_TRASLADO) AS fecfin,d.distrito AS dist, pr.provincia AS provi,   CONCAT(o.NOMBRE_DESTI,' ',O.APEPAT_DESTI,' ',APEMAT_DESTI) AS destinatario FROM orden_pedido o JOIN persona p ON o.COD_CLI=p.COD_PER JOIN distrito d ON o.COD_DIST_ORIGEN=d.idDist JOIN provincia pr ON o.COD_PROV_DESTINO=pr.idProv WHERE o.IND_OP='0'";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->retornar_SELECT();
    }
    

    public function retornar_SELECT(){
        return $this->_conexion->retornar_array();
    }

}
?>

