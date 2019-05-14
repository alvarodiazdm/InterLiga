<?php

require_once 'conectar.php';

$leagueName = $_REQUEST["leagueName"];

$busca = "Select * FROM league WHERE Name = '$leagueName'";

$fila = $db->prepare($busca);
$fila->execute();
$result = $fila->fetch(PDO::FETCH_ASSOC);

if($result==null){
    $errorTeamName = "El nombre introducido no coincide con el de ninguna liga";
    header("Location: searchLeague.php?errorTeamName=$errorTeamName");
}else {
    //CORRECTO
    session_start();
    $username = $_SESSION["username"];
    $teamName = "SELECT TeamName FROM player WHERE Username='$username'";
    $fila = $db->prepare($teamName);
    $fila->execute();
    $result = $fila->fetch(PDO::FETCH_ASSOC);
    $dbTeamName = $result["TeamName"];

    $insert = "UPDATE equipos SET League='$leagueName' WHERE TeamName='$dbTeamName'";
    if($db->query($insert)==TRUE){
        session_start();
        $_SESSION['username'] = $username;
        header("Location: home.php");
    } else {
        $errorTeamName = "El usuario no se ha creado correctamente, pruebe de nuevo por favor.";
        header("Location: searchLeague.php?errorTeamName=$errorTeamName");
    }
}

?>