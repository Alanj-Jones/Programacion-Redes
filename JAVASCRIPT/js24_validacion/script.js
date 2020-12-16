document.getElementById("myForm").onkeyup = function(){
    if(!document.getElementById("dia").checkValidity() || !document.getElementById("mes").checkValidity()){
        alert("El valor ingresado esta mal....");
    }
}