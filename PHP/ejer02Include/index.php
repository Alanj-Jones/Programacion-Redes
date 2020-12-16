<h2>En este Ejemplo se utiliza la funcion include()  :</h2>
<h3> Variables antes de usar Include() :</h3>

<?php 
    echo "$miArray";
    echo "$z";
    echo "$miArrayAsociativo[Nombre]";
    echo "$miArrayAsociativo[Apellido]";
    echo "$miArrayAsociativo[Id]";
    include("./ex.inc.php");
    echo "<h3>Aqui ya se ejecuto INCLUDE()</h3>";
    echo "$z";
    echo "<br>";
    echo "$miArrayAsociativo[Nombre]";
    echo "<br>";
    echo "$miArrayAsociativo[Apellido]";
    echo "<br>";
    echo "$miArrayAsociativo[Id]";

    
?>