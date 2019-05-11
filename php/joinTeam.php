<?php
/*
$host_db = "localhost";
$user_db = "root";
$pass_db = "root";
$db_name = "BBDDTEWC";
$tbl_name = "Equipos";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if($conexion->connect_error){
    die("La conexión falló: " .$conexion->connect_error);
}
*/

$username = $_REQUEST["username"];
$teamName = $_REQUEST["teamName"];
/*
$buscaTeamName = "Select * FROM $tbl_name WHERE TeamName = $teamName";
$resultTeamName = $conexion->query($buscaTeamName);
$count = mysqli_num_rows($resultTeamName);

if($count==0){
    $errorTeamName = "El nombre introducido no coincide con el de ningun equipo";
    header("Location: searchTeam.php?errorTeamName=$errorTeamName");
}else{*/
    //Meter al jugador en la base de datos
    header("Location: home.php?username=$username");
//}

?>