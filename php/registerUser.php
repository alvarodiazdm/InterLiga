<?php
/*
$host_db = "localhost";
$user_db = "root";
$pass_db = "root";
$db_name = "BBDDTEWC";
$tbl_name1 = "Equipos";
$tbl_name2 = "usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if($conexion->connect_error){
    die("La conexión falló: " .$conexion->connect_error);
}
*/
$username = $_REQUEST["username"];
$teamName = $_REQUEST["teamName"];
$URL = null;

function checkTeamName($tn){
    if($tn==null){
        return false;
    }
    return true;
}

if(!checkTeamName($teamName)){
    $errorName = "Debe introducir un nombre para su equipo.";
    header("Location: crearEquipo.php?username=".$username);
}

/*
$buscaTeamName = "SELECT * FROM $tbl_name WHERE TeamName = $teamName";
$resultTeamName = $conexion->query($buscaTeamName);
$count1 = mysqli_num_rows($resultTeamName);

if($count1 == 1){
    echo "<br/>". "El nombre de equipo ya existe, <a href='crearEquipo.php?username='.$username>escoja otro nombre</a>";
}
*/
$URL = "https://interliga.com/" .  $teamName . "/unirse.php";

/*
$query = "INSERT INTO $tbl_name1 (TeamName, URL ,Escudo) VALUES
              ('$teamName', '$URL', null)";
$query2 = "INSERT INTO $tbl_name2 (TeamName) WHERE Username = '$username' VALUES ('$teamName');


if($conexion ->query($query) === TRUE && $conexion ->query($query2) === TRUE{ */
    header("Location: home.php?username=".$username);
/*
} else {
    echo "Error al crear usuario." . $query . "<br>" . $conexion->error;
}
mysqli_close($conexion);*/
