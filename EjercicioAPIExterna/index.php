<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>API EXTERNA</title>
    <style>
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
    </style>
</head>

<body>

    <h1>Ejercicio API EXTERNA</h1>
    <button id="button">Clica para recuperar una frase de ChuckNorris</button>
    <br>
    <br>

    <table id="chuckNorrisCategories">
        <tr>
            <th>Created At</th>
            <th>Icon URL</th>
            <th>Id</th>
            <th>Updated At</th>
            <th>URL</th>
            <th>Value</th>
        </tr>
    </table>
    
    <script src="./EjercicioAPIExterna/index.js">

    </script>

</body>

</html>