$("#button").click(function () {
    $.ajax({
        url: 'https://api.chucknorris.io/jokes/random',
        dataType: 'json',
        success: function (data) {
            createTable(data);
        }
    });
});


function createTable(json) {
    var tabla = document.getElementById("chuckNorrisCategories");
    tabla.style.visibility = "visible";
    var fila = tabla.insertRow();

    var created = fila.insertCell(0);

    created.innerHTML = json.created_at;

    for (var i = 0; i < json.length; i++) {
        console.log("entro")


    }
}