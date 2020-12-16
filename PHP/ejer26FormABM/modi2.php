<?php
    define("SERVER","bpxnvkggqgdc6jrwaqot-mysql.services.clever-cloud.com");
    define("USUARIO","ugxorpainxjzlcdr");
    define("PASS","Kq5gH0D0H19uRE70pVkP");
    define("BASE","bpxnvkggqgdc6jrwaqot");

    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);
    
    $IdTurno = $_POST['IdTurno'];
    $Matricula = $_POST['Matricula'];
    $ApellidoDr = $_POST['ApellidoDr'];
    $Especialidad = $_POST['Especialidad'];
    $ApellidoPaciente = $_POST['ApellidoPaciente'];
    $FechaTurno = $_POST['FechaTurno'];


    //$sentencia = $mysqli->prepare("UPDATE turnomedico set Matricula=?,ApellidoDr=?,Especialidad=?,ApellidoPaciente=?,FechaTurno=? where IdTurno =?");

    $sentencia = $mysqli->prepare("update turnomedico set Matricula=?,ApellidoDr=?,Especialidad=?,ApellidoPaciente=?,FechaTurno=? where IdTurno=?;");

    $sentencia->bind_param('issssi',$Matricula,$ApellidoDr,$Especialidad,$ApellidoPaciente,$FechaTurno,$IdTurno);
    
    $sentencia->execute();
    $mysqli->close();
    

?>
