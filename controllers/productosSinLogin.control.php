<?php
require_once("libs/template_engine.php");
require_once("models/productos.php");
addCssRef("public/css/estilo.css");

if ($method == "get"){


   $productos = array();

   $pageNum = 1;
   $pagelimit = 3;
   $totaTmp = 0;
   $ccatid = "all";

  // $txtPagina=1;

   if(isset($_GET['pageNum'])){
        $pageNum = intVal($_GET['pageNum']);
        $txtPagina=$pageNum;
   }

   if(isset($_GET["catid"])){
        if($_GET["catid"] != "all"){
            $productos = obtenerProductosXCategoria($_GET["catid"], $pageNum , $pagelimit);
            $totaTmp = obtenerTotalProdXCategoria($_GET["catid"]);
            $ccatid = $_GET["catid"];
        }else{
            $productos = obtenerProductos($pageNum,$pagelimit);
            $totaTmp = obtenerTotalProd();
        }
   }else{
        $productos = obtenerProductos($pageNum,$pagelimit);
        $totaTmp = obtenerTotalProd();
   }


   $totalPaginas = floor( $totaTmp / $pagelimit) + (($totaTmp%$pagelimit==0)?0:1);
   $paginas = array();
   for($i=1;$i<=$totalPaginas;$i++){
     $paginas[] = array("pagina"=>$i,"selected"=>($i==$pageNum)?"selected":"", "catid"=>$ccatid);
   }
   //TODO: Enlazar con la vista
   setData('page-subtitulo',"Catálogo");
   setData('paginaActual', $pageNum);
   setData('categorias', obtenerCategorias());
   setData('paginas',$paginas);
   setData('productos',$productos);
   renderizar("productosSinLogin",$pageData);



}


if ($method == "post"){

}
?>
