<?php
    echo "<h3>Respuesta del servidor</h3>";
    echo "Nombre: " . $_GET['fName'] . "<br>";
    echo "Apellido: ". $_GET['lName']. "<br>";
    echo "Edad: ". $_GET['age']. "<br>";
    echo "<form action='../index.html'><input type='submit' value='regresar'></form>";
?>