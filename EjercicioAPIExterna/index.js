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
    console.log(json)
    var fila = tabla.insertRow();

    var created = fila.insertCell(0);
    var icon = fila.insertCell(1);
    var id = fila.insertCell(2);
    var updated = fila.insertCell(3);
    var url = fila.insertCell(4);
    var valuePhrase = fila.insertCell(5);

    created.innerHTML = json.created_at;
    icon.innerHTML = json.icon_url;
    id.innerHTML = json.id;
    updated.innerHTML = json.updated_at;
    url.innerHTML = json.url;
    valuePhrase.innerHTML = json.value;

}