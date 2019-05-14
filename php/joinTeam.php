<?php

require_once 'conectar.php';

$teamName = $_REQUEST["teamName"];
$number = $_REQUEST["number"];

$comprobante = true;

$busca = "Select * FROM equipos WHERE TeamName = '$teamName'";

$fila = $db->prepare($busca);
$fila->execute();
$result = $fila->fetch(PDO::FETCH_ASSOC);

if($result==null){
    $errorTeamName = "El nombre introducido no coincide con el de ningun equipo";
    header("Location: searchTeam.php?errorTeamName=$errorTeamName");
}else {
    //CORRECTO
    //Meter al jugador en la base de datos

    $sql = "Select * FROM player WHERE TeamName = '$teamName'";

    foreach($db->query($sql) as $fila2) {
        if($fila2[1] == $number){
            $comprobante = false;
        }
    }

    if(!$comprobante){
        $errorTeamName = "El numero introducido ya ha sido escogido por otro miembro del equipo";
        header("Location: searchTeam.php?errorTeamName=$errorTeamName");
    }else{
        //CORRECTO
        session_start();
        $username = $_SESSION["username"];
        $insert = "INSERT INTO player (Username, Number, TeamName) VALUES
                  ('$username', '$number', '$teamName')";
        if($db->query($insert)==TRUE){
            session_start();
            $_SESSION['username'] = $username;
            header("Location: home.php");
        } else {
            $errorTeamName = "El usuario no se ha creado correctamente, pruebe de nuevo por favor.";
            header("Location: searchTeam.php?errorTeamName=$errorTeamName");
        }
    }
}

?>