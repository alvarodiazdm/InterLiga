<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/logos/IL.png">
    <title>Unirse equipo</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="../fonts/font-awesome.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<div class="col-12">
    <div class="card">
        <div class="card-block">
            <h3 class="card-title">Datos del equipo:</h3>
            <form action="joinTeam.php">
                <input type="hidden" name="username" value="<?php echo $_GET["username"] ?>" />
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Name: </label>
                    <div class="col-10">
                        <input type="text" name="teamName" class="form-control" placeholder="Introduce el nombre del equipo" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Escoge un número de jugador:</label>
                    <div class="col-10">
                        <input type="number" min="1" max="99" class="form-control" placeholder="Entre el 1 y el 99" required>
                    </div>
                </div>
                <button type="submit">Unirse</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
