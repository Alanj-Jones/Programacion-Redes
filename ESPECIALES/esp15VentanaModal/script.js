var familiaArticulosJSON = {"categorias":[
    {"nombre":"Congelados", "id":"01","texto":"si"},
    {"nombre":"Carnes", "id":"02","texto":"no"},
    {"nombre":"Fruta", "id":"03","texto":"no"},
    {"nombre":"snacks", "id":"04","texto":"talvez"},
]
};
var objJSON = familiaArticulosJSON;

$(document).ready(function(){
    
        objJSON.categorias.forEach(function(argValor,argIndice){
            var objOpcion = document.createElement("option");
            objOpcion.setAttribute("class","elementoOptionSelect");
            objOpcion.setAttribute("value",argValor.nombre);
            objOpcion.innerHTML = argValor.nombre;
            document.getElementById("mySelect").appendChild(objOpcion);
        })
    }
);
$(document).ready(function() {
    document.getElementById('contenedor').className="contenedorActivo";
    document.getElementById('ventanaModal').className="ventanaModalApagado";
    });

$("#modal").click(function(){
    $("#ventanaModal").attr("class","contenedorActivo");
    $("#ventanaModal").attr("class","container");
    $("#contenedor").attr("class","contenedorDesactivado")
});

$(".exit").click(function(){
    $("#ventanaModal").attr("class","ventanaModalApagado");
    $("#contenedor").attr("class","contenedorActivado")

});