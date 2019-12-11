<div class="row">
  <div class="col-10 col-1-offset">
    <h1>{{producto_modo}}</h1>
  </div>
</div>
<form method="post" action="index.php?page=productosform&mode={{mode}}&productoid={{productoid}}" >
<div class="row">
  <div class="col-8 col-2-offset">
    <div class="row">
      <div class="col-2 ">
        <label>Código de Producto</label>
      </div>
      <div class="col-5">
        <input type="text" id="txt_productocod" name="txt_productocod"
          placeholder="Código de Producto"
          value="{{productocod}}"

          {{inputenable}} />
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-8 col-2-offset">
    <div class="row">
      <div class="col-2 ">
        <label>Código de Barra</label>
      </div>
      <div class="col-5">
        <input type="text" id="txt_productobarra" name="txt_productobarra"
          placeholder="Código de Barra"
          value="{{productobarra}}"
          {{inputenable}} />
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-8 col-2-offset">
    <div class="row">
      <div class="col-2 ">
        <label>Producto</label>
      </div>
      <div class="col-5">
        <input type="text" id="txt_productodsc" name="txt_productodsc"
          placeholder="Producto"
          value="{{productodsc}}"
          {{inputenable}} />
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-8 col-2-offset">
      <div class="row">
        <div class="col-2 col-2-offset">
          {{if isdeleting}}
            <input type="hidden" value="{{productoid}}" name="hdn_productoid" />
          {{endif isdeleting}}
          <a class="btn" id="clicksave" href>Guardar</a>
        </div>
        <div class="col-2">
          <a class="btn" href="index.php?page=productos">Cancelar</a>
        </div>
      </div>
    </div>
</div>
</form>
<script>
  var clickbtn = document.getElementById("clicksave");
  clickbtn.addEventListener("click",saveClick,false);
  function saveClick(e){
    e.preventDefault();
    document.forms[0].submit();
  }
</script>
