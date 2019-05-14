<?php

require_once 'conectar.php';

session_start();
$username = $_SESSION["username"];
$teamName = $_REQUEST["teamName"];

//Añadir implementacion de escudo
$escudo = null;
$number = $_REQUEST["number"];

function checkTeamName($tn){
    if($tn==null){
        return false;
    }
    return true;
}

if(!checkTeamName($teamName)){
    $errorName = "Debe introducir un nombre para su equipo.";
    header("Location: crearEquipo.php");//?username=".$username);
} else{
    $busca = "SELECT * FROM equipos WHERE TeamName = '$teamName'";
    $fila = $db->query($busca);
    $fila->execute();
    $result = $fila->fetch(PDO::FETCH_ASSOC);

    if($result != null){
        echo "<br/>". "El nombre de equipo ya existe, <a href='crearEquipo.php'>escoja otro nombre</a>";
    }else{
        //CORRECTO
        $query1 = "INSERT INTO equipos (TeamName,League,Escudo) VALUES ('$teamName', null, '$escudo')";
        $query2 = "INSERT INTO player (Username, Number, TeamName) VALUES ('$username','$number', '$teamName')";

        if($db->query($query1)==TRUE){
            if($db->query($query2)==TRUE) {
                header("Location: home.php");//?username=".$username);
            }else {
                echo "Error al crear usuario." . $query2 . "<br>" . $db->errorInfo();
            }
        }else{
            echo "Error al crear usuario." . $query1 . "<br>" . $db->errorInfo();
        }
    }
}
//mysqli_close($conexion);

