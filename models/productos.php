<?php
    require_once("libs/dao.php");

    function obtenerProductos($pageNum = 1, $pageItems=10){
        global $conexion;
        $sqlstr = "SELECT * from productos limit %d, %d ;";
        return obtenerRegistros( $conexion,
            sprintf($sqlstr, (($pageNum -1) * $pageItems), $pageItems)
                                );
    }

    function obtenerProductosXCategoria($catid , $pageNum = 1, $pageItems=10){
        global $conexion;
        $sqlstr = "SELECT * from productos where prodcat = %d limit %d, %d ;";
        return obtenerRegistros( $conexion,
            sprintf($sqlstr, $catid ,(($pageNum -1) * $pageItems), $pageItems)
                                );
    }

    function obtenerTotalProdXCategoria($catid){
        global $conexion;
        $sqlstr = "SELECT count(*) as total from productos where prodcat = %d;";
        return obtenerRegistro($conexion,sprintf($sqlstr,$catid))["total"];
    }

    function obtenerCategorias(){
        global $conexion;
        $strsql = "SELECT * from categorias;";
        return obtenerRegistros($conexion,$strsql);
    }

    function obtenerTotalProd(){
        global $conexion;
        $sqlstr = "SELECT count(*) as total from productos;";
        return obtenerRegistro($conexion,$sqlstr)["total"];
    }

    function obtenerStockDisponible($idPrd){
        global $conexion;
        $stockdisp = 0;
        $sqlstr = "SELECT a.productoid, a.prodStock - ifnull(b.ctdCrt,0) as stockDisp,a.prodStock,ifnull(b.ctdCrt,0) as ctdCrt from productos a left join ( select productoid, count(*) as ctdCrt from carretilla_d group by productoid) b on a.productoid = b.productoid where a.productoid = %d;";
        $resultTmp  = obtenerRegistro($conexion, sprintf(
                                $sqlstr, $idPrd));
        if(count($resultTmp)){
            $stockdisp = $resultTmp["stockDisp"];
        }
        return $stockdisp;
    }
?>
