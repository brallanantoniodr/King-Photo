<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Oswald" rel="stylesheet">
    <link rel="stylesheet" href="Soporte.css">
    <title>Soporte Tecnico</title>
  </head>
  <body>
    <header>
      <h1>{{texto}}</h1>
    </header>
    <div class="Formulario">
      <h2>Datos Personales</h2>

      <form id="frmData">
        <div class="ingresarDatos">


      <label for="TxtNombre">Nombre Completo</label>
      <input type="text" name="TxtNombre"
            id="TxtNombre" placeholder="Nombre Completo"
            maxlength="20" />
            <br />
          <label for="TxtCorreo">Correo Electrónico</label>
          <input type="email" name="TxtCorreo"
                id="TxtCorreo" placeholder="Nombre@portales.com"
             />
             <br/>
          <label for="txtNumero">Numero Telefonico</label>
          <input type="tel" name="txtNumero" id="txtNumero" placeholder="0000-0000"/>
              <br />
              </div>
              <input type="submit" id="BtnEnviar" name="BtnEnviar"
                value="Enviar" />
      </form>
      <script src="public/js/FormProyecto.js"></script>
    </div>

  </body>
</html>
