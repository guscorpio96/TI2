<?php
class soliPedido {
    private $_conexion;
    public function __construct() {
        $this->_conexion = new conexion();
    }
    public function set_soliPed($COD_OP,$COD_CLI,$FEC_INI_TRASLADO,$COD_DIST_ORIGEN,$DES_DIR_RECOJO,$FEC_FIN_TRASLADO,$COD_PROV_DESTINO,$DES_DIR_DESTINO,$DES_BIEN,$NUM_CANTIDAD,$DES_UNIDAD_MEDIDA,$DES_PESO,$IND_OP,$NOMBRE_DESTI,$APEPAT_DESTI,$APEMAT_DESTI,$TELF1_DESTI,$TELF2_DESTI){
        $sql ="INSERT INTO `orden_pedido` (`COD_OP`, `COD_CLI`, `FEC_INI_TRASLADO`, `COD_DIST_ORIGEN`, `DES_DIR_RECOJO`, `FEC_FIN_TRASLADO`, `COD_PROV_DESTINO`, `DES_DIR_DESTINO`, `DES_BIEN`, `NUM_CANTIDAD`, `DES_UNIDAD_MEDIDA`, `IND_OP`, `NOMBRE_DESTI`, `APEPAT_DESTI`, `APEMAT_DESTI`, `TELF1_DESTI`, `TELF2_DESTI`) VALUES (NULL,'".$COD_CLI."','".$FEC_INI_TRASLADO."','".$COD_DIST_ORIGEN."','".$DES_DIR_RECOJO."','".$FEC_FIN_TRASLADO."','".$COD_PROV_DESTINO."','".$DES_DIR_DESTINO."','".$DES_BIEN."','".$NUM_CANTIDAD."','".$DES_UNIDAD_MEDIDA."', NULL, '".$NOMBRE_DESTI."', '".$APEPAT_DESTI."', '".$APEMAT_DESTI."', '".$TELF1_DESTI."', '".$TELF2_DESTI."')";

        return $this->_conexion->ejecutar_sentencia($sql);
    }
    public function retornar_SELECT(){
        return $this->_conexion->retornar_array();
    }
}
?>
