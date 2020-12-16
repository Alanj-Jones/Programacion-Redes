document.getElementById("myForm").onkeyup = function(){
    //Inputs
    var iName = document.getElementById("nombre").checkValidity();
    var iApellido = document.getElementById("apellido").checkValidity();
    var iSaldo = document.getElementById("saldo").checkValidity();
    //Botones
    var bReset = document.getElementById("bla");
    var bAlta = document.getElementById("Alta") ;
    var bMod = document.getElementById("Mod");
    var bBaja = document.getElementById("Baja");

    //Habilitar-Deshabilitar el boton 'Blanquear'
    if(iName || iApellido || iSaldo){
        bReset.disabled = false;
    }else{
        bReset.disabled = true;
    }

    //Habilitar botones 'Alta', 'Modificar' y 'Baja'.
    if(iName && iApellido && iSaldo){
        bAlta.disabled = false;
        bBaja.disabled = false;
        bMod.disabled = false;
    }else{
        bAlta.disabled = true;
        bBaja.disabled = true;
        bMod.disabled = true;    
    }
}

//Cuando se haga click en el boton 'Blanquear' limpiara el formulario.
document.getElementById("bla").onclick = function(){
    document.getElementById("myForm").reset();
}