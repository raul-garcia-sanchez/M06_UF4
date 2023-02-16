var READY_STATE_UNINITIALIZED = 0;
var READY_STATE_LOADING = 1;
var READY_STATE_LOADED = 2;
var READY_STATE_INTERACTIVE = 3;
var READY_STATE_COMPLETE = 4;

var HTTP_STATUS_OK = 200;

var peticion_http;

var numerosPrimos;

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
    var spinner = document.getElementById("spinner");
    if (peticion_http.readyState == READY_STATE_COMPLETE) {
        if (peticion_http.status == HTTP_STATUS_OK) {
            console.log(peticion_http.responseText);
            console.log(peticion_http.status);
            numerosPrimos = peticion_http.responseText;
            createTable(JSON.parse(numerosPrimos));
            document.getElementById("div").style.display = "none"; 
            spinner.style.display = "none";
        }
        else{
            spinner.style.display = "block";
        }
    }
}

function descargaArchivo() {
    cargaContenido("http://localhost:8080/EjercicioAPIinterna/api.php?numero="+sendNumber(), "GET", muestraContenido);
}



function createTable(json) {
    var tabla = document.getElementById("tablaPrimos");
    tabla.style.visibility = "visible"; 

    for(var i = 0; i < json.length; i++){
        var fila = tabla.insertRow();

        var celdaNumeroPrimo = fila.insertCell(0);

        celdaNumeroPrimo.innerHTML = json[i];

    }
}

function sendNumber(){
    let num = document.getElementById("numberUser").value;
    return num;
}

