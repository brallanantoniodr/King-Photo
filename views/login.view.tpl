<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Oswald" rel="stylesheet">
    <link rel="stylesheet" href="public/css/estilo.css">
    <title>Sugerencias</title>
  </head>
  <body>
<header>
<h1>INICIAR SESÍON</h1>
</header>
<!-- IDEA:   <body background="public/imgs/inicioSesion.jpg"> -->
<div class="Formulario">

<h2>Credenciales</h2>
<br>
<form action="index.php?page=login" method="post" >
<div class="ingresarDatos">
<input type="hidden" name="returnurl" value="{{returnurl}}"/>
<label>Correo Electrónico</label>
<input type="email" name="usuario_email" value="{{usuario_email}}" placeholder="Correo Electronico" />
<br><br>
<label>Contraseña</label>
<input type="password" name="usuario_pswd" value="{{usuario_pswd}}" placeholder="Contraseña" />
</div>
<button onclick="return submitLogin();">Iniciar Sesión</button>
</form>
<!-- IDEA:  </body> -->
<script>
  function submitLogin(){
    document.forms[0].submit();
    return false;
  }
</script>
</div>
</body>
</html>
