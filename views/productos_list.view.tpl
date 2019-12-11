<h1>Gestión de Productos</h1>
<hr />
<div class="row">
  <div class="col-10">
    <form action="index.php?page=productos" method="post">
      <label for="txtNombreProducto">Nombre</label>
      <input type="text" name="txtNombreProducto"
            id="txtNombreProducto"
            value="{{txtNombreProducto}}"/>
      <button onclick="clickfilter">Filtrar</button>
    </form>
  </div>
  <div class="col-2 center">
    <a class="btn" href="index.php?page=productosform&mode=INS">Agregar</a>
  </div>
</div>
<hr />
<table class="table_100">
  <tbody>
    <tr>
      <th>Código</th>
      <th>Nombre</th>
      <th>Estado</th>
      <th>Acciones</th>
    </tr>
  {{foreach productos_result}}
    <tr>
      <td>{{productocod}}</td>
      <td>{{productodsc}}</td>
      <td>{{productoestdsc}}</td>
      <td class="center">
        <a href="index.php?page=productosform&mode=UPD&productoid={{productoid}}">Editar</a>
        &nbsp;
        <a href="index.php?page=productosform&mode=DEL&productoid={{productoid}}">Eliminar</a>
      </td>
    </tr>
  {{endfor productos_result}}
  </tbody>
</table>
<script>
  function clickfilter(){
    document.forms[0].submit();
  }
</script>
