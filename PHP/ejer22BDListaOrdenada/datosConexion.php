<?php
    sleep(3);
    define("SERVER","bpxnvkggqgdc6jrwaqot-mysql.services.clever-cloud.com");
    define("USUARIO","ugxorpainxjzlcdr");
    define("PASS","Kq5gH0D0H19uRE70pVkP");
    define("BASE","bpxnvkggqgdc6jrwaqot");

    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);

    if (isset($_GET['orden'])){
        $orden = $_GET['orden'];
    }
    

    $sql = "select * from turnomedico order by " . $orden;

    if (!($resultado = $mysqli->query($sql))){

        die();
    }

    $resultadoCuentaRegistros = $resultado->num_rows;

    $turnos=[];

    while( $fila=$resultado->fetch_assoc()){
        $objTurno = new stdClass();
        $objTurno->IdTurno = $fila['IdTurno'];
        $objTurno->Matricula = $fila['Matricula'];
        $objTurno->ApellidoDr = $fila['ApellidoDr'];
        $objTurno->Especialidad = $fila['Especialidad'];
        $objTurno->ApellidoPaciente = $fila['ApellidoPaciente'];
        $objTurno->FechaTurno = $fila['FechaTurno'];        

        array_push($turnos,$objTurno);
    }

    $objTurnos = new stdClass();
    $objTurnos->turnos = $turnos;
    $objTurnos->cuenta = $resultadoCuentaRegistros;

    $salidaJson = json_encode($objTurnos);
    $mysqli->close();
    echo $salidaJson;
?>

