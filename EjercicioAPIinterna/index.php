<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test API</title>
    <style>
        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            visibility: hidden;
        }

        th {
            background-color: #555;
            color: #fff;
            font-weight: bold;
            padding: 8px;
            text-align: center;
        }

        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        input[type="text"] {
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }


        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-left: 10px;
            margin-top: -10px
        }


        button:hover {
            background-color: #3e8e41;
        }

        div {
            display: flex;
            width: 100vw;
            height: 80vh;
            justify-content: center;
            align-items: center;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #ccc;
            border-top-color: #07d;
            border-radius: 50%;
            animation: spin 1s ease-in-out infinite;
            display: none;
        }

        @keyframes spin {
            0% {
                transform: rotate(0);
            }

            100% {
                transform: rotate(360deg);
            }
        }

    </style>
</head>

<body>

    <h1>Test API Interna</h1>

    <div id="div">
        <input type="text" id="numberUser"><br><br>
        <button onclick="descargaArchivo()">Enviar</button><br><br>
    </div>

    <div id="spinner" class="spinner"></div>


    <table id="tablaPrimos">
        <tr>
            <th>Números primos</th>
        </tr>
    </table>


    <script src="index.js"></script>
</body>


</html>