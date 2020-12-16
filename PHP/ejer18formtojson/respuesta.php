<?php 
    sleep(3);
    $arreglo = [];
    $objProveedor = new stdclass;
    
    if(isset($_POST['usuario'])){
    	$objProveedor->IdUsuario = $_POST['usuario'];
    };
    
    if(isset($_POST['login'])){
    	$objProveedor->Login = $_POST['login'];
    };
    
    if(isset($_POST['apellido'])){
    	$objProveedor->Apellido = $_POST['apellido'];
    };
    
    if(isset($_POST['nombre'])){
    	$objProveedor->Nombre = $_POST['nombre'];
    };
    
    if(isset($_POST['fecha'])){
    	$objProveedor->FechaDeNacimiento = $_POST['fecha'];
    };
    
    array_push($arreglo, $objProveedor);
    $objJSON = json_encode($arreglo);
    echo "<h4>Arreglo </h4>";
    echo "<p>" .$objJSON . "</p>";


?>