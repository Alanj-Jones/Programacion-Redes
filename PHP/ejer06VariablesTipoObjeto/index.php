<style>
    span{
        color:blue;
    }
</style>
<?php
    echo "<h2>Variables de tipo OBJETO en PHP</h2>";
    echo "<h2><span>\$objRenglonPelicula</span></h2>";
    $objRenglonPelicula = new stdclass;
    $objRenglonPelicula -> codPelicula = 69420;
    $objRenglonPelicula -> nombrePelicula = "Aladdin";
    $objRenglonPelicula -> precioEntrada = 500;
    $objRenglonPelicula -> cantidadEntradasDisponibles = 200;
    echo "Codigo de la Pelicula: "."$objRenglonPelicula->codPelicula"."<br>";
    echo "Nombre: "."$objRenglonPelicula->nombrePelicula"."<br>";
    echo "Precio de Entrada: "."$objRenglonPelicula->precioEntrada"."<br>";    
    echo "Entradas Disponibles: "."$objRenglonPelicula->cantidadEntradasDisponibles";
    echo "<h3>Tipo de <span>\$objRenglonPelicula</span>: ".gettype($objRenglonPelicula)."</h3>";
    echo "<h4>Definamos Arreglo de peliculas</h4>";
    echo "<h3><span>\$renglonesPeliculas</span></h3>";
    echo "<h3>Tabula <span>\$renglonesPeliculas</span>. Recorrer el arreglo de renglones y tabularlos con html:</h3>";
    $renglonesPeliculas = [];
    array_push($renglonesPeliculas,$objRenglonPelicula);
    $objRenglonPelicula = new stdclass;
    $objRenglonPelicula -> codPelicula = 8370;
    $objRenglonPelicula -> nombrePelicula = "Nemo";
    $objRenglonPelicula -> precioEntrada = 300;
    $objRenglonPelicula -> cantidadEntradasDisponibles = 250;
    array_push($renglonesPeliculas,$objRenglonPelicula);

    foreach ($renglonesPeliculas as $objRenglonPelicula){
        echo $objRenglonPelicula->codPelicula . " ";
        echo $objRenglonPelicula->nombrePelicula . " ";
        echo $objRenglonPelicula->precioEntrada . " ";
        echo $objRenglonPelicula->cantidadEntradasDisponibles . " ";
        echo "<br>";
    }
    echo "<h4>Cantidad de renglones: ". count($renglonesPeliculas);

    echo "<h3>Produccion de un objeto <span>\$objRenglonesDePelicula</span> Con 2 atributos: Array renglonesPeliculas y cantRenglones</h3>";
    $objRenglonesDePelicula = new stdClass();
    $objRenglonesDePelicula -> renglonesPeliculas = $renglonesPeliculas;
    $objRenglonesDePelicula -> cantRenglones = count($renglonesPeliculas);
    echo "cantRenglones: " . $objRenglonesDePelicula->cantRenglones;
    echo "<br><h3>Produccion de un JSON JsonRenglones</h3>";
    $jsonRenglones = json_encode($objRenglonesDePelicula);
    echo $jsonRenglones;

?>