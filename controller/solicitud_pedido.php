<?php
    include('../require/conexion.class.php');
    include('../require/solicitudPedido.class.php');
    $carga = new soliPedido();

$COD_OP=$_POST['_COD_OP'];
$COD_CLI=$_POST['_COD_CLI'];        
$FEC_INI_TRASLADO=$_POST['_FEC_INI_TRASLADO'];
$COD_DIST_ORIGEN=$_POST['_COD_DIST_ORIGEN'];
$DES_DIR_RECOJO=$_POST['_DES_DIR_RECOJO'];
$FEC_FIN_TRASLADO=$_POST['_FEC_FIN_TRASLADO'];  
$COD_PROV_DESTINO=$_POST['_COD_PROV_DESTINO'];  
$DES_DIR_DESTINO=$_POST['_DES_DIR_DESTINO'];    
$DES_BIEN=$_POST['_DES_BIEN'];          
$NUM_CANTIDAD=$_POST['_NUM_CANTIDAD'];      
$DES_UNIDAD_MEDIDA=$_POST['_DES_UNIDAD_MEDIDA'];
$DES_PESO=$_POST['_DES_PESO'];          
$IND_OP=$_POST['_IND_OP'];  
$NOMBRE_DESTI=$_POST['_NOMBRE_DESTI'];  
$APEPAT_DESTI=$_POST['_APEPAT_DESTI'];  
$APEMAT_DESTI=$_POST['_APEMAT_DESTI'];  
$TELF1_DESTI=$_POST['_TELF1_DESTI'];  
$TELF2_DESTI=$_POST['_TELF2_DESTI'];  

    $valor_resultado = $carga->set_soliPed($COD_OP,$COD_CLI,$FEC_INI_TRASLADO,$COD_DIST_ORIGEN,$DES_DIR_RECOJO,$FEC_FIN_TRASLADO,$COD_PROV_DESTINO,        $DES_DIR_DESTINO,$DES_BIEN,$NUM_CANTIDAD,$DES_UNIDAD_MEDIDA,$DES_PESO,$IND_OP,$NOMBRE_DESTI,$APEPAT_DESTI,$APEMAT_DESTI,$TELF1_DESTI,$TELF2_DESTI);


    echo json_encode($valor_resultado);
?>