<?php
require_once 'restringido.php';
?>
<!DOCTYPE html>
<html lang="en">

    <?php include "../templates/header.php" ?>

<body style="padding-top: 4em">

<?php
require_once 'conectar.php';
$username = $_SESSION["username"];
$teamName = "SELECT TeamName FROM player WHERE Username='$username'";
$fila = $db->prepare($teamName);
$fila->execute();
$result = $fila->fetch(PDO::FETCH_ASSOC);
$dbTeamName = $result["TeamName"];

$leagueName = "SELECT League FROM equipos WHERE TeamName='$dbTeamName'";
$fila2 = $db->prepare($leagueName);
$fila2->execute();
$result2 = $fila2->fetch(PDO::FETCH_ASSOC);
if($result2["League"]!= null){
    $dbLeagueName = $result2["League"];
}else{
    $dbLeagueName = "No estas jugando ninguna liga";
}

$i=0;
$allTeam = "SELECT * FROM equipos WHERE League='$dbLeagueName' ORDER BY TeamName ASC";
?>

<?php include "../templates/nav.php" ?>

<main class="container">

    <div class="contenidoPrincipal">
        <div class="col-md-12">
            <div class="card card-Clasificacion">
                <div class="card-header">
                    <h4 class="card-title">Clasificación de: <?php echo $dbLeagueName ?></h4>
                    <p class="card-category"></p>
                </div>
                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr><th class="thClasificacion">Pos.</th>
                            <th class="thClasificacion">Escudo</th>
                            <th class="thClasificacion">Nombre</th>
                            <th class="thClasificacion">Pts</th>
                            <th class="thClasificacion">PJ</th>
                            <th class="thClasificacion">G</th>
                            <th class="thClasificacion">E</th>
                            <th class="thClasificacion">P</th>
                        </tr></thead>
                        <tbody>
                        <?php foreach($db->query($allTeam) as $row){ ?>
                            <tr class="">
                                <td><?php $i++; echo $i ?></td>
                                <td><?php echo $row["Escudo"] ?></td>
                                <td><?php echo $row["TeamName"] ?></td>
                                <td><?php echo "0" ?></td>
                                <td><?php echo "0" ?></td>
                                <td><?php echo "0" ?></td>
                                <td><?php echo "0" ?></td>
                                <td><?php echo "0" ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="overlay" id="overlay">
        <div class="popup" id="popup">
            <h3>¿Seguro que desea salir?</h3>
            <form action="">
                <div class="contenedor-inputs">
                    <a href="Logout.php"><input type="button" class="btn-salir" value="Salir"></a>
                    <a href="#" id="btn-cerrar-popup"><input type="button" class="btn-salir" value="Mantenerse"></a>
                </div>
            </form>
        </div>
    </div>

</main>

<?php include "../templates/scripts.php" ?>

</body>
