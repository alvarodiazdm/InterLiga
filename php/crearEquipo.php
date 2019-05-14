<!DOCTYPE html>
<html lang="en">
<?php include "../templates/header.php" ?>
<body>
<?php
session_start();
$username = $_SESSION["username"];
?>
<div class="container">
    <section class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                    <h3 class="card-title">Datos del equipo:</h3>
                    <form class="form" action="registerUser.php">
                        <input type="hidden" name="username" value="<?php echo $username ?>">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nombre</label>
                            <div class="col-10">
                                <input type="text" name="teamName" class="form-control" placeholder="Introduce el nombre del equipo">
                                <?php if(isset($_REQUEST["errorName"])): ?>
                                <div class="loginErr">
                                    <?php echo $_REQUEST["errorName"] ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Escudo</label>
                            <div class="col-10">
                                <input type="file" class="form-control-file">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Escoge un número de jugador:</label>
                            <div class="col-10">
                                <input type="number" name="number" min="1" max="99" class="form-control" placeholder="Entre el 1 y el 99">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Url para unirse al equipo:</label>
                            <div class="col-10">
                                <label class="form-control">interliga.com/nombreEquipo/unirse.php</label>
                            </div>
                        </div>

                        <button type="submit">Crear</button>
                        <input type="submit" name="Restablecer" value="Restablecer" formaction="crearEquipo.php">

                    </form>
                </div>
            </div>
        </div>
    </section>
</div><!-- /.container -->

<?php include "../templates/scripts.php" ?>

</body>
</html>