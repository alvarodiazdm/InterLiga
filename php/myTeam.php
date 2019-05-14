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

//$allTeam = "SELECT * FROM users INNER JOIN player ON users.Username = player.Username WHERE player.TeamName ='$dbTeamName'";
$allTeam = "SELECT * FROM player WHERE TeamName='$dbTeamName' ORDER BY Number ASC";
//$fila2 = $db->prepare($allTeam);
//$fila2->execute();
//$result2 = $fila2->fetch(PDO::FETCH_ASSOC);
?>

<?php include "../templates/nav.php" ?>


<main class="container">

    <div class="contenidoPrincipal">
        <div class="col-md-12">
            <div class="card card-Clasificacion">
                <div class="card-header">
                    <h4 class="card-title">Datos de: <?php echo $dbTeamName ?></h4>
                    <p class="card-category"></p>
                </div>
                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr><th class="thClasificacion">Username</th>
                            <th class="thClasificacion">Number</th>
                            <th class="thClasificacion">PlayerId</th>
                            <th class="thClasificacion">TeamName</th>
                        </tr></thead>
                        <tbody>
                        <?php foreach($db->query($allTeam) as $row){ ?>
                            <tr class="">
                                <td><?php echo $row["Username"] ?></td>
                                <td><?php echo $row["Number"] ?></td>
                                <td><?php echo $row["PlayerId"] ?></td>
                                <td><?php echo $row["TeamName"] ?></td>
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