<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Datos</title>
    <style>
        body {
            display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 97vh;
        }

        #capital {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
        }

        #boton {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }

        #boton:hover {
            background-color: #3E8E41;
        }

        #tabla {
            visibility: hidden;
            border-collapse: collapse;
            margin-top: 20px;
        }

        #tituloTabla {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            text-align: center;
        }

        td {
            text-align: center;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>


<body>

    <h1>Buscar paises vecinos</h1>
    <input type="text" id="capital" placeholder="Capital...">
    <button id="boton" onclick="buscarPaisesProximos()">Buscar</button>

    <table id="tabla">
        <tr>
            <th id="tituloTabla"> </th>
        </tr>
    </table>

    <script>

        async function buscarPaisesProximos() {
            const capital = document.getElementById("capital").value;
            const res = await fetch("https://restcountries.com/v3.1/capital/" + capital);
            const paises = await res.json();
            const paisesProximos = paises[0].borders;
            document.getElementById("tituloTabla").innerHTML = "Paises vecinos de " + capital;
            createTable(paisesProximos);
        }


        function createTable(json) {
            var tabla = document.getElementById("tabla");
            tabla.style.visibility = "visible";
            document.getElementById("capital").style.display = "none";
            document.getElementById("boton").style.display = "none";
            document.getElementsByTagName("h1")[0].style.display = "none";

            for (var i = 0; i < json.length; i++) {
                var fila = tabla.insertRow();

                var celdaNumeroPrimo = fila.insertCell(0);

                celdaNumeroPrimo.innerHTML = json[i];

            }
        }
    </script>
</body>

</html>