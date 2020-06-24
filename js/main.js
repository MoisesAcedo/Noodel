/* Uso estricto */
"use strict";
//creo la funcion sugerencia
function sugerencias(textoBusqueda) {

    console.log("sugerencia= " + textoBusqueda);
    if (textoBusqueda.lengh == 0) {

        document.getElementById("resultado-sugerencias").innerHTML = "";

    } else {
        //ajax
        //paso 1: creo el objeto XMLHttpRequest()
        var ajaxHttpGet = new XMLHttpRequest();
        //paso 2: ejecutar logica cuando la conexion sea correcta
        ajaxHttpGet.onreadystatechange = function () {
            //la peticion se a finalizado y la respuesta esta preparada y recibida correctamente
            if (this.readyState == 4 && this.status == 200) {
                //se ejecuta la logica
                document.getElementById("resultado-sugerencias").innerHTML = this.responseText;
            }
        }
        //paso 3: donde voy a procesar la peticion (fichero php)
        ajaxHttpGet.open("GET", "ajax.php?txt-ajax=" + textoBusqueda, true);
        //paso 4: envio
        ajaxHttpGet.send();
    }

}