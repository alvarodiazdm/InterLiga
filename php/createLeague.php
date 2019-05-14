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

<div class="col-12">
    <div class="card">
        <div class="card-block">
            <h3 class="card-title">Datos de la liga:</h3>
            <form action="insertNewLeague.php">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">League name: </label>
                    <div class="col-10">
                        <input type="text" name="name" class="form-control" placeholder="Introduce el nombre de la liga" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Starts on: </label>
                    <div class="col-10">
                        <input type="text" name="start" class="form-control" placeholder="aaaa-mm-dd" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Ends on: </label>
                    <div class="col-10">
                        <input type="text" name="end" class="form-control" placeholder="aaaa-mm-dd" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Place: </label>
                    <div class="col-10">
                        <input type="text" name="place" class="form-control" placeholder="Donde se va a jugar principalmente" required/>
                    </div>
                </div>

                <?php if(isset($_REQUEST['errorLeague'])): ?>
                    <div style="color: darkred">
                        <?php echo $_REQUEST['errorLeague'] ?>
                    </div>
                <?php endif; ?>

                <button type="submit">Crear</button>
            </form>
        </div>
    </div>
</div>
</body>
<?php include "../templates/scripts.php" ?>
</html>