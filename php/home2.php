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
?>

<?php include "../templates/nav.php" ?>

<main class="container">

    <div class="contenidoPrincipal">
        <div class="col-md-12">
            <div class="card card-Clasificacion">
                <div class="card-header">
                    <h4 class="card-title">Clasificación Inter-Liga 1</h4>
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
                            <th class="thClasificacion">GF</th>
                            <th class="thClasificacion">GC</th>
                            <th class="thClasificacion">DG</th>
                        </tr></thead>
                        <tbody>
                        <tr class="success">
                            <td>1</td>
                            <td><img src="../images/escudos/escudo1.svg" class="imgClasificacion"> </td>
                            <td>Real Teleco F.C.</td>
                            <td>16</td>
                            <td>7</td>
                            <td>5</td>
                            <td>1</td>
                            <td>1</td>
                            <td>30</td>
                            <td>16</td>
                            <td>14</td>
                        </tr>
                        <tr class="info">
                            <td>2</td>
                            <td><img src="../images/escudos/escudo2.svg" class="imgClasificacion"></td>
                            <td>C.D. TelecosLeganes</td>
                            <td>14</td>
                            <td>7</td>
                            <td>4</td>
                            <td>2</td>
                            <td>1</td>
                            <td>28</td>
                            <td>16</td>
                            <td>12</td>
                        </tr>
                        <tr class="info">
                            <td>3</td>
                            <td><img src="../images/escudos/escudo3.png" class="imgClasificacion"></td>
                            <td>InfoCojos P.C.</td>
                            <td>13</td>
                            <td>7</td>
                            <td>4</td>
                            <td>1</td>
                            <td>2</td>
                            <td>25</td>
                            <td>18</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><img src="../images/escudos/escudo6.svg" class="imgClasificacion"></td>
                            <td>Aero-Nauticos UPM</td>
                            <td>12</td>
                            <td>6</td>
                            <td>4</td>
                            <td>0</td>
                            <td>2</td>
                            <td>23</td>
                            <td>16</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><img src="../images/escudos/escudo7.png" class="imgClasificacion"></td>
                            <td>Audiovisuales F.C.</td>
                            <td>6</td>
                            <td>6</td>
                            <td>2</td>
                            <td>0</td>
                            <td>4</td>
                            <td>20</td>
                            <td>25</td>
                            <td>-5</td>
                        </tr>
                        <tr class="danger">
                            <td>6</td>
                            <td><img src="../images/escudos/escudo4.png" class="imgClasificacion"></td>
                            <td>ADESEW Team</td>
                            <td>6</td>
                            <td>7</td>
                            <td>1</td>
                            <td>3</td>
                            <td>3</td>
                            <td>14</td>
                            <td>26</td>
                            <td>-12</td>
                        </tr>
                        <tr class="danger">
                            <td>7</td>
                            <td><img src="../images/escudos/escudo5.svg" class="imgClasificacion"></td>
                            <td>MagisFut URJC</td>
                            <td>2</td>
                            <td>7</td>
                            <td>0</td>
                            <td>2</td>
                            <td>4</td>
                            <td>11</td>
                            <td>30</td>
                            <td>-19</td>
                        </tr>
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