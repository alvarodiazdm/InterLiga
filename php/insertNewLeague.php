<?php
 //echo "LLEGAMOS AQUI";
require_once 'conectar.php';

session_start();

$name = $_REQUEST['name'];
$start = $_REQUEST['start'];
$end = $_REQUEST['end'];
$place = $_REQUEST['place'];

function check($name, $start, $end, $place){
    if($name==null || $start==null || $end==null || $place==null){
        return false;
    }
    return true;
}

$username = $_SESSION["username"];
$teamName = "SELECT TeamName FROM player WHERE Username='$username'";
$fila = $db->prepare($teamName);
$fila->execute();
$result = $fila->fetch(PDO::FETCH_ASSOC);
$dbTeamName = $result["TeamName"];

if(!check($name,$start,$end,$place)){
    $errorLeague = "Debe completar todos los campos obligatorios";
    header("Location: createLeague.php?errorLeague=$errorLeague");
}else{

    $busca ="SELECT * FROM league WHERE Name='$name'";
    $fila = $db->prepare($busca);
    $fila->execute();
    $result = $fila->fetch(PDO::FETCH_ASSOC);

    if ($result != null) {
        echo "<br/>" . "El nombre de la liga ya existe, <a href='createLeague.php'>escoja otro</a>";
    } else {
        //CORRECTO
        session_start();
        $query = "INSERT INTO league (Name, Start, End, Place) VALUES ('$name','$start','$end','$place')";
        $query2 = "UPDATE equipos SET League='$name' WHERE TeamName='$dbTeamName'";
        if($db->query($query) == TRUE){
            if($db->query($query2)==TRUE){
                header("Location: home.php");
            }else{
                echo "Error al actualizar tu equipo." . $query2 . "<br>" . $db->errorInfo();
            }
        }else{
            echo "Error al crear liga." . $query . "<br>" . $db->errorInfo();
        }
    }
}