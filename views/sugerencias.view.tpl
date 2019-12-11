<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Oswald" rel="stylesheet">
    <link rel="stylesheet" href="Sugerencias.css">
    <title>Sugerencias</title>
  </head>
  <body>
    <header>
      <h1>{{texto}}</h1>
    </header>
    <div class="Formulario">
      <h2>Sugerencia</h2>



      <form id="frmData">
        <div class="ingresarDatos">
        <label for="txtDate" >Fecha Actual</label>
        <input type="date"  name="txtDate" id="txtDate" />
        <br/>
        <label for="txtNombre">Nombre Completo</label>
        <input type="text"  name="txtNombre" id="txtNombre" placeholder="Nombre"/>
        <br/>
        <label for="txtCorreo">Correo electronico</label>
        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="ejemplo@portales.com">
        <br/>
        <textarea style="width:290px;height:250px" name="TxtLongText" id="TxtLongText" placeholder="Ingrese Su Sugerencia"></textarea>
        <br/>
        </div>
        <input type="button" name="btnEnviar" id="btnEnviar" value="Enviar sugerencia">
        <br/>

      </form>

      <script src="public/js/Sugerencias.js"></script>
    </div>
  </body>
</html>
