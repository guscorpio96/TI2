<?php

class detPed {

    private $_conexion;

    public function __construct() {
        $this->_conexion = new conexion();
    }

    public function get_detalle($cop){
        $sql ="SELECT o.COD_OP as ordPed,CONCAT(p.DES_NOMBRES,' ',p.DES_APPATER,' ',p.DES_APMATER) AS fullname,DATE(o.FEC_INI_TRASLADO) AS fecini,DATE(o.FEC_FIN_TRASLADO) AS fecfin,d.distrito AS dist, pr.provincia AS provi,CONCAT(o.NOMBRE_DESTI,' ',O.APEPAT_DESTI,' ',APEMAT_DESTI) AS destinatario, o.DES_BIEN AS descrip,o.NUM_CANTIDAD AS canti, o.DES_UNIDAD_MEDIDA AS unime,o.TELF1_DESTI AS tlf1,o.TELF2_DESTI AS tlf2 FROM orden_pedido o JOIN persona p ON o.COD_CLI=p.COD_PER JOIN distrito d ON o.COD_DIST_ORIGEN=d.idDist JOIN provincia pr ON o.COD_PROV_DESTINO=pr.idProv WHERE o.COD_OP = ".$cop;
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->retornar_SELECT();
    }
    

    public function retornar_SELECT(){
        return $this->_conexion->retornar_array();
    }

}
?>