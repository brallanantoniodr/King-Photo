<div class="grid920">
    <div class="gd-row gd-head">
    <span class="gd-col-1">#</span>
    <span class="gd-col-6">Producto</span>
    <span class="gd-col-1 right">Cantidad</span>
    <span class="gd-col-1 right">Precio</span>
    <span class="gd-col-1 right">Impuesto</span>
    <span class="gd-col-2 right">Borrar</span>
    </div>
    {{foreach crrtproductos}}
        <div class="gd-row">
            <span class="gd-col-1">{{hln}}</span>
            <span class="gd-col-6">{{producto}}</span>
            <span class="gd-col-1 right">{{carrCtd}}</span>
            <span class="gd-col-1 right">L{{CarrPrc}}</span>
            <span class="gd-col-1 right">{{carrIva}}</span>
            <span> </span>
           <!-- IDEA:<span class="gd-col-2 right"><a href="index.php?page=rmvCrrt&ln={{carretillaln}}" class="sm-actionBtn">Remover <img src="publico/imagenes/delete.svg" style="vertical-align: bottom;width: 1em;padding: 0;margin: 0;"></a></span>-->
            <span class="gd-col-2 right">



            <form action="index.php?page=carretilla" method="POST">
                <button type="submit" name="btnBorrar" id="btnBorrar">Borrar</button>
                <input type="hidden" name="txtln" value="{{carretillaln}}" id="txtln">
                <input type="hidden" name="txtidln" value="{{carretillaid}}" id="txtidln">
            </form>

            </span>
        </div>
    {{endfor crrtproductos}}
    <br/>
    <div class="gd-row">
        <span class="gd-offset-10 gd-col-1"><b>Subtotal</b></span>
        <span class="gd-col-1 right"><b>L{{crrtsubtotal}}</b></span>
    </div>
    <div class="gd-row">
        <span class="gd-offset-10 gd-col-1"><b>Impuesto</b></span>
        <span class="gd-col-1 right"><b>L{{crrtiva}}</b></span>
    </div>
    <div class="gd-row">
        <span class="gd-offset-10 gd-col-1"><b>Total</b></span>
        <span class="gd-col-1 right"><b>L{{crrttotal}}</b></span>
    </div>
    <br>
<br>
<form action="index.php?page=carretilla" method="POST">
<div class="gd-row">
  <input type="submit" name="btnComprar" value="Comprar" id="btnComprar">
  <input type="text" name="txtT" value="{{crrttotal}}" hidden>
  <span class="gd-offset-10 gd-col-1">
</div>
</form>
</div>
<br/>
