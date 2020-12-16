<?php
    
    if (isset($_POST['clave'])){
        $varAEncriptar = $_POST['clave'];
        echo "Clave: $varAEncriptar";
        $claveEncriptadaMD5 = md5($varAEncriptar);
        echo "<p>Clave encriptada con MD5 (128 bits o 16 pares hexa) <br>$claveEncriptadaMD5</p>";
        $claveEncriptadaSHA1 = sha1($varAEncriptar);
        echo "<p>Clave encriptada con SHA1 (160 bits o 20 pares hexa)<br>$claveEncriptadaSHA1</p>";
    }
?>