<script type="text/javascript">

</script>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>{{page_title}}</title>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
            <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Anton|Oswald" rel="stylesheet">
            <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
            <link rel="stylesheet" href="public/css/estilo.css" />
            {{foreach css_ref}}
                <link rel="stylesheet" href="{{uri}}" />
            {{endfor css_ref}}
        </head>
        <body>
            <div class="menu">
                <ul>
                    <li><a href="index.php?page=home">INICIO</a></li>
                    <li><a href="index.php?page=productos">CATÁLOGO</a></li>
                    <li><a href="index.php?page=carretilla">CARRETILLA <img src="public/imgs/1b.png" style="vertical-align: middle; width:1.125em;padding:0;"/><b>{{ctdcarretilla}}</b></a></li>
                    <li><a href="index.php?page=soporte">SOPORTE</a></li>
                    <li><a href="index.php?page=sugerencias">SUGERENCIAS</a></li>
                    <li><a href="index.php?page=logout">CERRAR SESIÓN</a></li>
                     <div class="Usuario" style="text-align: left;">
                    <img src="public/imgs/2b.png">
                    <input type="text" name="txtUsuarioLogueado" value="{{usuario_email}}" disabled id="txtUsuarioLogueado" >
                    </div>
                </ul>
            </div>
            <div class="contenido">
                {{{page_content}}}
            </div>
            <div class="footer">
                Derechos Reservados 2019
            </div>
        </body>
    </html>
