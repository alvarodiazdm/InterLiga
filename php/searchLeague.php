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
            <h3 class="card-title">Datos de la liga:</h3>
            <form action="joinLeague.php">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Name: </label>
                    <div class="col-10">
                        <input type="text" name="leagueName" class="form-control" placeholder="Introduce el nombre de la liga" required/>
                    </div>
                </div>
                <button type="submit">Unirse</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>