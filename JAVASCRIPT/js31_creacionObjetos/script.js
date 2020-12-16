//Configuro el boton de CREAR
document.getElementById("add").onclick = function(){
    var newDiv = document.createElement("div");
    var textInsideDiv = "<h1>Elemento Creado: ";
    textInsideDiv += document.getElementById("container").childNodes.length + "</h1>";
    newDiv.className = "inside";
    newDiv.innerHTML = textInsideDiv;
    document.getElementById("container").appendChild(newDiv);
}
//Configuro el boton de LIMPIAR
document.getElementById("clear").onclick = function(){
   while(document.getElementById("container").childNodes.length != 0){
       document.getElementById("container").removeChild( document.getElementById("container").lastChild);
   }
}
//Configuro el boton de INFO
document.getElementById("info").onclick = function(){
    var long = document.getElementById("container").childNodes.length;
    alert("La cantidad de elementos es de: " + long);
}