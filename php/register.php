<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/logos/IL.png">
    <title>Registrarse</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="../fonts/font-awesome.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <section class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                    <h3 class="card-title">Registrarse:</h3>
                    <form class="form" action="procesaRegister.php">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nombre</label>
                            <div class="col-10">
                                <input type="text" name="name" class="form-control" placeholder="Introduce tu nombre" min="4" max="20">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Apellidos</label>
                            <div class="col-10">
                                <input type="text" name="surname" class="form-control" placeholder="Introduce tu apellido">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nombre de usuario (*)</label>
                            <div class="col-10">
                                <input type="text" name="username" class="form-control" placeholder="Elige un nombre de usuario" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Contraseña (*)</label>
                            <div class="col-10">
                                <input class="form-control" type="password" name="password" placeholder="Introduce tu contraseña" required>
                                <?php if(isset($_REQUEST['errorPass'])): ?>
                                    <div style="color: darkred">
                                        <?php echo $_REQUEST['errorPass'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Repetir contraseña (*)</label>
                            <div class="col-10">
                                <input class="form-control" type="password" name="repeatPassword" placeholder="Introduce tu contraseña" required>
                                <?php if(isset($_REQUEST['errorPass'])): ?>
                                    <div style="color: darkred">
                                        <?php echo $_REQUEST['errorPass'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Correo electrónico (*)</label>
                            <div class="col-10">
                                <input type="text" name="email" class="form-control" placeholder="Introduce tu correo electrónico" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">¿Que le gustaría hacer?</label>
                            <div class="col-10">
                                <div class="custom-control custom-radio col-md-6">
                                    <input type="radio" id="customRadio1" name="botonRadio" value="1" class="custom-control-input" checked>
                                    <label class="custom-control-label custom-control-description" for="customRadio1">Crear equipo</label>
                                </div>
                                <div class="custom-control custom-radio col-md-6">
                                    <input type="radio" id="customRadio2" name="botonRadio" value="2" class="custom-control-input">
                                    <label class="custom-control-label custom-control-description" for="customRadio2">Unirse a un equipo</label>
                                </div>
                            </div>
                        </div>

                        <?php if(isset($_REQUEST['errorRegister'])): ?>
                            <div style="color: darkred">
                            <?php echo $_REQUEST['errorRegister'] ?>
                            </div>
                        <?php endif; ?>

                        <button type="submit" id="enviar">Enviar</button>
                        <input type="submit" name="Restablecer" value="Restablecer" formaction="register.php">

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
