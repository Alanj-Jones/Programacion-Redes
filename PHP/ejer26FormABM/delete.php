<?php
    define("SERVER","bpxnvkggqgdc6jrwaqot-mysql.services.clever-cloud.com");
    define("USUARIO","ugxorpainxjzlcdr");
    define("PASS","Kq5gH0D0H19uRE70pVkP");
    define("BASE","bpxnvkggqgdc6jrwaqot");

    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);
    
    $IdTurno = $_GET['IdTurno'];
    
    $sql = "delete from turnomedico where IdTurno = ". $IdTurno;
    $mysqli->query($sql);
    $mysqli->close();
    

?>
