<?php
require_once("libs/template_engine.php");


if ($method == "get"){
   if($_GET["page"]=="addCrt"){
        //funcionalidad para la carretilla
        require_once("models/carretilla.php");
        require_once("models/productos.php");
        $carretillaID = obtenerCarretillaCliente();
        if(obtenerStockDisponible($_GET["prdid"])>0){
            if(guardarLinea($carretillaID,
                        obtenerSiguienteLinea($carretillaID),
                        $_GET["prdid"])){
                header("location:index.php?page=productos&pageNum=".$_GET["pageNum"]);
                die();
            }
        }else{
           redirectWithMessage("El producto no tiene stock disponible","index.php?page=productos&pageNum=1");
        //  soloMensaje("El producto no tiene stock disponible");
            //agregarError("WARNING", "El producto no tiene stock disponible",);
          //  header("location:index.php?page=productos&pageNum=".$_GET["pageNum"]);
            die();
        }
   }

   if($_GET["page"]=="carretilla"){
        require_once("models/carretilla.php");
        $crtProductos =  obtenerProductosCarretillaXId(obtenerCarretillaCliente());
        $contador = 1;
        $subtotal = 0;
        $total = 0;
        $iva = 0;
        for($i=0; $i < count($crtProductos); $i++){
            $crtProductos[$i]["hln"] = $contador;
            $subtotal += $crtProductos[$i]["CarrPrc"]/(1 + $crtProductos[$i]["carrIva"]);
            $total += $crtProductos[$i]["CarrPrc"];
            $contador++;
        }
        $iva = $total - $subtotal;
        setData('page-subtitulo',"Mi Carretilla de Compra");
        setData("crrtproductos", $crtProductos);
        setData("crrtsubtotal", sprintf("%01.2f",$subtotal));
        setData("crrtiva", sprintf("%01.2f",$iva));
        setData("crrttotal", sprintf("%01.2f",$total));
        header("index.php?page=productos&pageNum=1");
        renderizar("carretilla", $pageData,"loggedLayout.view.tpl");


   }
}



if ($method == "post"){

}



if(isset($_POST["btnBorrar"])){
require_once("models/carretilla.php");
$txtln=0;
if(isset($_POST["txtln"])) $txtln = intval($_POST["txtln"]);
if($txtln == 0){
    header('Location: index.php?page=carretilla');
  }else{
    if(eliminarProductoDeCarrito($txtln)){
        header('Location: index.php?page=carretilla');
      }else{
        header('Location: index.php?page=login');
      }
  }
}

if(isset($_POST["btnComprar"]))
{
   $noHay=$_POST["txtT"];
  if($noHay==0)
  {
    redirectWithMessage("No hay productos en la carretilla","index.php?page=carretilla");
  }
  else {
  require_once("models/carretilla.php");
  if(limpiarCarretilla())
  {
    redirectWithMessage("Gracias por su compra","index.php?page=carretilla");
  }
}
}

?>
