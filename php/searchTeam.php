<?php
require_once 'restringido.php';
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<?php include "../templates/header.php" ?>
<body>
<div class="col-12">
    <div class="card">
        <div class="card-block">
            <h3 class="card-title">Datos del equipo:</h3>
            <form action="joinTeam.php">
                <!--<input type="hidden" name="username" value="<?php echo $username ?>" />-->
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Name: </label>
                    <div class="col-10">
                        <input type="text" name="teamName" class="form-control" placeholder="Introduce el nombre del equipo" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Escoge un número de jugador:</label>
                    <div class="col-10">
                        <input type="number" name="number" min="1" max="99" class="form-control" placeholder="Entre el 1 y el 99" required>
                        <?php if(isset($_REQUEST['errorTeamName'])): ?>
                            <div style="color: darkred">
                                <?php echo $_REQUEST['errorTeamName'] ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <button type="submit">Unirse</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
