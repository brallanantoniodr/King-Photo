<?php
    require_once("libs/dao.php");
    function nuevaCarretilla(){
        global $conexion;
        $sqlinstr="INSERT INTO carretilla (carrfching, carrFchLstUpt, carrCckOutUser) VALUES (now(), now(), '');";
        ejecutarNoQuery($conexion,$sqlinstr);
        return getLastInserId($conexion);
    }
    function obtenerSiguienteLinea($carretilaID){
        global $conexion;
        $sqlStr = "select count(*) as numLinea from carretilla_d where carretillaid = %d;";
        $numLinea = obtenerRegistro($conexion,
                    sprintf($sqlStr,$carretilaID))["numLinea"];
        return $numLinea+1;
    }
    function guardarLinea($carretillaID, $linea, $productoID){
        global $conexion;
        $sqlInsert = "INSERT INTO carretilla_d (carretillaid, carretillaln, productoid, carrCtd, carrPrc, carrIva) select %d, %d, %d, 1, prodPrc, prodIva from productos where productoid = %d;";
        return ejecutarNoQuery($conexion,
                        sprintf($sqlInsert,$carretillaID,$linea,$productoID,$productoID)
                        );
    }
    function obtenerCtdProducto($carretillaId){
        global $conexion;
        $sqlstr = "SELECT count(*) AS productos from productos where productoid = %d;";
        return obtenerRegistro($conexion,sprintf($sqlstr, $carretillaId))["productos"];
    }


    function obtenerProductosCarretillaXId($carretillaId){
        global $conexion;
        $sqlstr = "SELECT a.carretillaid, a.carretillaln,  a.productoid, b.producto, a.carrCtd, a.CarrPrc, a.carrIva FROM carretilla_d a inner join productos b on a.productoid = b.productoid where carretillaid = %d order by a.carretillaln;";
        return obtenerRegistros($conexion,sprintf($sqlstr, $carretillaId));
    }

    function eliminarProductoDeCarrito($txtln){
      global $conexion;
      $sqlstr = "delete from carretilla_d where carretillaln = %d;";
      $resultado = ejecutarNoQuery($conexion,sprintf($sqlstr,valstr($txtln)));
      return $resultado;
    }

/*
    function obtenerLineaDeCarretillaEstatica($txtln){
      global $conn;
      $numln=0;
      $sqlstr = "select carretillaln as carretillaln from carretilla_d where carretillaln = %d;";
      $numln = obtenerRegistro($conn,sprintf($sqlstr,$txtln))["carretillaln"];
      return $numln;
    }
*/
    function obtenerLineaDeCarretillaEstatica($txtln){
      global $conexion;
      $sqlstr = "select carretillaln from carretilla_d where carretillaln = %d;";
      return obtenerRegistro($conexion,sprintf($sqlstr,$txtln))["carretillaln"];
    }

    function limpiarCarretilla(){
    global $conexion;
    $sqlstr = "delete from carretilla_d;";
    $resultado = ejecutarNoQuery($conexion,$sqlstr);
    return $resultado;
  }

?>
