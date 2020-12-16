<?php
    if (isset($_POST['clave'])){
        sleep(3);
        echo "respuestaDelServer";
        $varAEncriptar = $_POST['clave'];
        $claveMD5 = md5($varAEncriptar);
        $claveSHA1= sha1($varAEncriptar);
        echo "<h4>Clave:". $varAEncriptar ." </h4><br>";
        echo "<p>Clave encriptada en md5:". $claveMD5 ."</p><br>";
        echo "<p>Clave encriptada en sha1:". $claveSHA1 ."</p><br>";
    }   
?>