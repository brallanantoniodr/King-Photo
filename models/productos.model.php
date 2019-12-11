<?php
  require_once("libs/dao.php");

  // Obtener Todos los Productos
  function productos_obtenerTodos(){
    $sqlstr = "select * from productos;";
    $productos = array();
    $productos = obtenerRegistros($sqlstr);
    return $productos;
  }
  //Obtener Todos los Productos por Filtro

  function productos_obtenerPorNombre($nombre){
    $sqlstr = "select * from productos where productodsc like '%s';";
    $sqlstr = sprintf($sqlstr,$nombre."%");
    $productos = array();
    $productos = obtenerRegistros($sqlstr);
    return $productos;
  }

  function productos_obtenerPorId($id){
    $sqlstr = "select * from productos where productoid=%d;";
    $sqlstr = sprintf($sqlstr,$id);
    $producto = array();
    $producto = obtenerUnRegistro($sqlstr);
    return $producto;
  }

  function productos_insert($cod,$nom, $barra){
    $sqlstr = "Insert into productos(productocod, productodsc, productobarra) value('%s','%s','%s');";
    $sqlstr = sprintf($sqlstr,$cod,$nom,$barra);
    return ejecutarNonQuery($sqlstr);
  }

  function productos_update($id, $cod, $nom, $barra){
    $sqlstr = "Update productos set productocod = '%s', productodsc='%s', productobarra='%s' where productoid=%d;";
    $sqlstr = sprintf($sqlstr,$cod,$nom,$barra,$id);
    return ejecutarNonQuery($sqlstr);
  }

  function productos_delete($id){
    $sqlstr = "Delete from productos where productoid=%d;";
    $sqlstr = sprintf($sqlstr,$id);
    return ejecutarNonQuery($sqlstr);
  }

?>
