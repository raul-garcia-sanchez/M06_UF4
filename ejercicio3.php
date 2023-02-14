<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ejercicios AJAX 3</title>
    <style type="text/css">
        body {
            font: 13px Arial, Helvetica, sans-serif;
        }

        h2 {
            margin-bottom: 0;
            font-size: 1.2em;
        }

        #recurso,
        #enviar {
            padding: .3em;
            font-size: 1.2em;
        }

        #principal {
            float: left;
            width: 70%;
        }

        #secundario {
            float: right;
            width: 25%;
        }

        #contenidos,
        #estados,
        #cabeceras,
        #codigo {
            border: 2px solid #CCC;
            background: #FAFAFA;
            padding: 1em;
            white-space: pre;
        }

        #contenidos {
            min-height: 400px;
            max-height: 600px;
            overflow: scroll;
        }

        #estados {
            min-height: 200px;
        }

        #cabeceras {
            min-height: 200px;
        }

        #codigo {
            min-height: 100px;
            font-size: 1.5em;
        }
    </style>
    <script type="text/javascript">
    </script>
</head>

<body>
    <form action="#">
        URL: <input type="text" id="recurso" size="70" />
        <input type="button" id="enviar" value="Mostrar contenidos" onclick="descargaArchivo()"/>
    </form>

    <div id="principal">
        <h2>Contenidos del archivo:</h2>
        <div id="contenidos"></div>

        <h2>Cabeceras HTTP de la respuesta del servidor:</h2>
        <div id="cabeceras"></div>
    </div>

    <div id="secundario">
        <h2>Estados de la petición:</h2>
        <div id="estados"></div>

        <h2>Código de estado:</h2>
        <div id="codigo"></div>
    </div>

    <script>

        window.onload = function () {
            var recursoInput = document.getElementById('recurso');
            var url = window.location.href;
            recursoInput.value = url;
        }

        var READY_STATE_UNINITIALIZED = 0;
        var READY_STATE_LOADING = 1;
        var READY_STATE_LOADED = 2;
        var READY_STATE_INTERACTIVE = 3;
        var READY_STATE_COMPLETE = 4;

        var HTTP_STATUS_OK = 200;

        var peticion_http;

        function cargaContenido(url, metodo, funcion) {
            peticion_http = inicializa_xhr();

            if (peticion_http) {
                peticion_http.onreadystatechange = funcion;
                peticion_http.open(metodo, url, true);
                peticion_http.send(null);
            }
        }

        function inicializa_xhr() {
            if (window.XMLHttpRequest) {
                return new XMLHttpRequest();
            }
            else if (window.ActiveXObject) {
                return new ActiveXObject("Microsoft.XMLHTTP");
            }
        }

        function muestraContenido() {
            if (peticion_http.readyState == READY_STATE_COMPLETE) {
                if (peticion_http.status == HTTP_STATUS_OK) {
                    let divToWrite = document.getElementById("contenidos")
                    divToWrite.innerHTML = peticion_http.responseText;
                }
            }
        }

        function descargaArchivo() {
            cargaContenido("http://localhost:8080/ejercicio3.php", "GET", muestraContenido);
        }



    </script>
</body>

</html>