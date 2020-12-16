var artJSON = {"articulos":[
    {"codArt":"1","familia":"Frutas","UM":"KG","descripcion":"Banana","fechaAlta":"1/2/2020","saldoStock":"10"},
    {"codArt":"2","familia":"Frutas","UM":"KG","descripcion":"Manzana","fechaAlta":"11/2/2020","saldoStock":"20"},
    {"codArt":"3","familia":"Gaseosa","UM":"L","descripcion":"Manaos de Uva","fechaAlta":"14/2/2020","saldoStock":"30"},
    {"codArt":"4","familia":"Gaseosa","UM":"L","descripcion":"7Up","fechaAlta":"13/2/2020","saldoStock":"40"},
    {"codArt":"5","familia":"Infusiones","UM":"g","descripcion":"Cafe","fechaAlta":"12/2/2020","saldoStock":"50"},
    {"codArt":"6","familia":"Infusiones","UM":"g","descripcion":"Te de limon","fechaAlta":"10/2/2020","saldoStock":"60"},
    {"codArt":"1","familia":"Frutas","UM":"KG","descripcion":"Banana","fechaAlta":"1/2/2020","saldoStock":"10"},
    {"codArt":"2","familia":"Frutas","UM":"KG","descripcion":"Manzana","fechaAlta":"11/2/2020","saldoStock":"20"},
    {"codArt":"3","familia":"Gaseosa","UM":"L","descripcion":"Manaos de Uva","fechaAlta":"14/2/2020","saldoStock":"30"},
    {"codArt":"4","familia":"Gaseosa","UM":"L","descripcion":"7Up","fechaAlta":"13/2/2020","saldoStock":"40"},
    {"codArt":"5","familia":"Infusiones","UM":"g","descripcion":"Cafe","fechaAlta":"12/2/2020","saldoStock":"50"},
    {"codArt":"6","familia":"Infusiones","UM":"g","descripcion":"Te de limon","fechaAlta":"10/2/2020","saldoStock":"60"}
]}

$("#cargarDatos").click(function(){
    artJSON.articulos.forEach(function(argValor,argIndice){

        var son = document.createElement("tr");

        var desc1 = document.createElement("td");
        desc1.innerHTML = argValor.codArt;

        var desc2 = document.createElement("td");
        desc2.innerHTML = argValor.familia;

        var desc3 = document.createElement("td");
        desc3.innerHTML = argValor.UM;

        var desc4 = document.createElement("td");
        desc4.innerHTML = argValor.descripcion;
        
        var desc5 = document.createElement("td");
        desc5.innerHTML = argValor.fechaAlta;

        var desc6 = document.createElement("td");
        desc6.innerHTML = argValor.saldoStock;
        
        
       // son.innerHTML = desc1 + desc2 +desc3 + desc4 +desc5 + desc6;

       document.getElementById("myTbody").innerHTML =   document.getElementById("myTbody").innerHTML +
                                                        "<tr>" + 
                                                        "<td>" + desc1.innerHTML + "</td>" + "<td>" + desc2.innerHTML + "</td>" +
                                                        "<td>" + desc3.innerHTML + "</td>" + "<td>" + desc4.innerHTML + "</td>" +
                                                        "<td>" + desc5.innerHTML + "</td>" + "<td>" + desc6.innerHTML + "</td>" +
                                                        "</tr>";
    });
    $("footer").css("bottom","0%");
});


$("#limpiarDatos").click(function(){

    $("#myTbody").empty();
});






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
    document.getElementById('ejTablas').className="contenedorActivo";
    document.getElementById('ventanaModal').className="ventanaModalApagado";
    });

$("#modal").click(function(){
    $("#ventanaModal").attr("class","contenedorActivo");
    $("#ventanaModal").attr("class","container2");
    $("#ejTablas").attr("class","contenedorDesactivado")
});

$(".exit").click(function(){
    $("#ventanaModal").attr("class","ventanaModalApagado");
    $("#ejTablas").attr("class","contenedorActivado")

});