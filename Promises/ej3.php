<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Promise Intern API</title>
</head>

<body>
    <h1>Server Promise</h1>
    <div id="data-container"></div>
    <script>
        const loadJSON = (file) => {
            return new Promise((resolve, reject) => {
                const xhr = new XMLHttpRequest();
                xhr.open('GET', file, true);
                xhr.responseType = 'json';
                xhr.onload = () => {
                    if (xhr.status === 200) {
                        resolve(xhr.response);
                    } else {
                        reject(xhr.statusText);
                    }
                };
                xhr.onerror = () => reject(xhr.statusText);
                xhr.send();
            });
        };

        loadJSON("ej3API.php")
            .then((data) => {
                console.log("data", data)
                const container = document.getElementById('data-container');
                container.innerHTML = `
            <h2>Data from Server:</h2>
            <p>${data}</p>
          `;
            })
            .catch((error) => {
                console.error('Error loading data:', error);
            });
    </script>
</body>

</html>