<?php
/* Productos Form Controller
 * 2016-11-07
 * Created By OJBA
 */
  require_once("libs/template_engine.php");
  require_once("models/productos.model.php");

  $producto_form_data = array();

  function run(){
    global $producto_form_data;
    $productos_modes=array(
      "INS" => "Ingreso de Nuevo Producto",
      "UPD" => "Actualizar Producto",
      "DEL" => "Eliminar Producto",
      "DSP" => "Datos del Producto"
    );
    $producto_form_data["inputenable"] = "";
    $producto_form_data["mode"]="INS";
    $producto_form_data["productobarra"] = "";
    $producto_form_data["productodsc"] = "";
    $producto_form_data["productocod"] = "";
    $producto_form_data["productoid"] = "";

    if(isset($_GET["mode"])){
      $producto_form_data["mode"]=$_GET["mode"];
    }

    // si es Insert
    if ($producto_form_data["mode"] == 'INS'){
      if(isset($_POST["txt_productocod"])){
        $producto_form_data["productodsc"] = $_POST["txt_productodsc"];
        $producto_form_data["productocod"] = $_POST["txt_productocod"];
        $producto_form_data["productobarra"] = $_POST["txt_productobarra"];
        $resultado = productos_insert($producto_form_data["productocod"],
                         $producto_form_data["productodsc"],
                         $producto_form_data["productobarra"]
                          );
        if($resultado){
          redirectWithMessage("Producto Guardado Exitosamente","index.php?page=productos");
        }

      }
    }
    // Si es un update
    if ($producto_form_data["mode"] == 'UPD'){
       if(isset($_POST["txt_productocod"])){
         $producto_form_data["productodsc"] = $_POST["txt_productodsc"];
         $producto_form_data["productocod"] = $_POST["txt_productocod"];
         $producto_form_data["productobarra"] = $_POST["txt_productobarra"];
         $producto_form_data["productoid"] = intval($_GET["productoid"]);
         $resultado = productos_update(
                          $producto_form_data["productoid"],
                          $producto_form_data["productocod"],
                          $producto_form_data["productodsc"],
                          $producto_form_data["productobarra"]
                           );
         if($resultado){
           redirectWithMessage("Producto Modificado Exitosamente","index.php?page=productos");
           die();
         }
       }
       get_view_producto();
    }
    // Si es un delete
    if ($producto_form_data["mode"] == 'DEL'){
      if(isset($_POST["hdn_productoid"])){
        $producto_form_data["productoid"] = intval($_GET["productoid"]);
        $resultado = productos_delete(
                         $producto_form_data["productoid"]
                          );
        if($resultado){
          redirectWithMessage("Producto Eliminado Exitosamente","index.php?page=productos");
          die();
        }
      }
      $producto_form_data["isdeleting"] = true;
      $producto_form_data["inputenable"] = "disabled";
      get_view_producto();
    }
    $producto_form_data["producto_modo"]=$productos_modes[$producto_form_data["mode"]];

    renderizar("producto_form",$producto_form_data);
  }

  function get_view_producto(){
    global $producto_form_data;
    if(isset($_GET["productoid"])){
      $producto_form_data["productoid"] = intval($_GET["productoid"]);
      $tmpproducto = productos_obtenerPorId($producto_form_data["productoid"]);
      if(!count($tmpproducto)){
        redirectWithMessage("Error: No se Puede Actualizar el Registro","index.php?page=productos");
        die();
      }
      $producto_form_data["productodsc"] = $tmpproducto["productodsc"];
      $producto_form_data["productocod"] = $tmpproducto["productocod"];
      $producto_form_data["productobarra"] = $tmpproducto["productobarra"];
    }else{
      redirectWithMessage("Error: No se Puede Actualizar el Registro","index.php?page=productos");
      die();
    }
  }
  run();
?>
