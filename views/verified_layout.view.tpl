<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>{{page_title}}</title>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
            <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Anton|Oswald" rel="stylesheet">
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
            <link rel="stylesheet" href="public/css/estilo.css" />
            <script src="public/js/jquery.min.js"></script>
            {{foreach css_ref}}
                <link rel="stylesheet" href="{{uri}}" />
            {{endfor css_ref}}
        </head>
        <body>
            <div class="menu">
                <div class="brand">{{page_title}}</div>
                <ul>
                    {{if notifnum}}
                    <li><a href="index.php?page=notificacion">
                      <span class="ion-android-notifications">&nbsp;{{notifnum}}</span></a>
                    </li>
                    {{endif notifnum}}
                    {{foreach appmenu}}
                      <li><a href="index.php?page={{mdlprg}}">{{mdldsc}}</a></li>
                    {{endfor appmenu}}
                    <li><a href="index.php?page=logout">Cerrar Sesión</a></li>
                </ul>
                <div class="hbtn"> <div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div></div>
            </div>
            <div class="contenido">
                {{{page_content}}}
            </div>

            <div class="footer">
                Derechos Reservados 2019
            </div>
            {{foreach js_ref}}
                <script src="{{uri}}"></script>
            {{endfor js_ref}}
            <script>
              $().ready(function(e){
                $(".hbtn").click(function(e){
                  e.preventDefault();
                  e.stopPropagation();
                  $(".menu").toggleClass('open');
                  });
              });
            </script>
        </body>
    </html>
