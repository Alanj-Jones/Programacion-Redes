<h2>En este Ejemplo se utiliza la funcion require()  :</h2>
<h3> Variables antes de usar require() :</h3>

<?php 
    echo "$miArray";
    echo "$z";
    echo "$miArrayAsociativo[Nombre]";
    echo "$miArrayAsociativo[Apellido]";
    echo "$miArrayAsociativo[Id]";
    require("./ex.inc.php");
    echo "<h3>Aqui ya se ejecuto require()</h3>";
    echo "$z";
    echo "<br>";
    echo "$miArrayAsociativo[Nombre]";
    echo "<br>";
    echo "$miArrayAsociativo[Apellido]";
    echo "<br>";
    echo "$miArrayAsociativo[Id]";

?>