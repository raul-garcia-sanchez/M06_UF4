<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Load image with promise</title>
</head>

<body>
    <button id="loadImage">Load image</button>

    <script>
        // Get the button from the DOM
        const btn = document.getElementById("loadImage");

        // Method to call when button is clicked
        btn.addEventListener("click", () => {
            // Create promise to fetch the image
            const imgPromise = new Promise((resolve, reject) => {
                // Fetch image from server
                const img = new Image();
                img.src = "https://cdn02.visitbarcelona.com/files/5531-9089-imagenCAT/BarcelonaBar%C3%A7a-T24e.jpg";
                img.onload = () => resolve(img);
                img.onerror = () => reject("Error loading image!");
            });

            // Handle errors
            imgPromise
                .then((img) => document.body.appendChild(img))
                .catch((err) => console.error(err));
        });

    </script>
</body>

</html>