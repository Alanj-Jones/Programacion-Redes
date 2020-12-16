<?php
    //sleep(3);
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
    
    /*$_FILES['documentoPdf'];
    $_FILES['documentoPdf']['name'];
    $contenidoPdf = file_get_contents($_FILES['documentoPdf']['tmp_name']);
    */




    
    $sentencia = $mysqli->prepare("insert into turnomedico (IdTurno,Matricula,ApellidoDr,Especialidad,ApellidoPaciente,FechaTurno)
                                    values(?,?,?,?,?,?)");

    $sentencia->bind_param('iissss',$IdTurno,$Matricula,$ApellidoDr,$Especialidad,$ApellidoPaciente,$FechaTurno);

    $sentencia->execute();





    $mysqli->close();
    
 
 ?>