<?php
    //sleep(3);
    define("SERVER","bpxnvkggqgdc6jrwaqot-mysql.services.clever-cloud.com");
    define("USUARIO","ugxorpainxjzlcdr");
    define("PASS","Kq5gH0D0H19uRE70pVkP");
    define("BASE","bpxnvkggqgdc6jrwaqot");

    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);

     //Intento de que se ponga automaticamente los valores en la modificacion
     $IdTurno = $_GET['IdTurno'];

     $sql = "select * from turnomedico where IdTurno = ". $IdTurno;
 
     if (!($resultado = $mysqli->query($sql))){
 
         die();
     }
 
     $turno=[];

     while( $fila=$resultado->fetch_assoc()){
        $objTurno = new stdClass();
        $objTurno->IdTurno = $fila['IdTurno'];
        $objTurno->Matricula = $fila['Matricula'];
        $objTurno->ApellidoDr = $fila['ApellidoDr'];
        $objTurno->Especialidad = $fila['Especialidad'];
        $objTurno->ApellidoPaciente = $fila['ApellidoPaciente'];
        $objTurno->FechaTurno = $fila['FechaTurno'];        

        array_push($turno,$objTurno);

        //$objTurnos = new stdClass();
        //$objTurnos->turno = $turno;
    }
     $mysqli->close();
     $salidaJson = json_encode($objTurno);
     
     
     echo $salidaJson;
     /*
    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);
    $IdTurno = $_POST['IdTurno'];
    $Matricula = $_POST['Matricula'];
    $ApellidoDr = $_POST['ApellidoDr'];
    $Especialidad = $_POST['Especialidad'];
    $ApellidoPaciente = $_POST['ApellidoPaciente'];
    $FechaTurno = $_POST['FechaTurno'];


    $sentencia = $mysqli->prepare("UPDATE turnomedico set IdTurno=?,Matricula=?,ApellidoDr=?,Especialidad=?,ApellidoPaciente=?,FechaTurno=?");

    $sentencia->bind_param('iissss',$IdTurno, $Matricula,$ApellidoDr,$Especialidad,$ApellidoPaciente,$FechaTurno);
    

    $sentencia->execute();
    $mysqli->close();
    */
 
 ?>