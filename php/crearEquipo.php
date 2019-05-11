<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/logos/IL.png">
    <title>Crear equipo</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="../fonts/font-awesome.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<?php
$username = $_GET["username"];
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
                                <input type="number" min="1" max="99" class="form-control" placeholder="Entre el 1 y el 99">
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


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>
<!-- Holder.js for placeholder images -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>

</body>
</html>