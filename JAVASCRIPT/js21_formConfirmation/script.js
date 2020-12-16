document.getElementById("send") .onclick = function(){
    var conf = confirm("Estas seguro?");
    if (conf){
        document.getElementById("myForm").action= "./respuesta.html";
        document.getElementById("myForm").submit();
        document.getElementById("myForm").method ="GET";
    }
}

document.getElementById("res").onclick = function(){
    document.getElementById("myForm").reset();
}