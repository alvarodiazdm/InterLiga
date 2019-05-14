<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

    <div class="cuadrar">
        <a class="navbar-brand font-weight-bold" href="home.php">
            <img src="../images/logos/ILclarito(2).png" class="imagen-cabecera">
            Inter-Liga</a>
    </div>

    <button style="margin-right: 50%" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse items-navbar" style="margin-left: 3em;" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto justify-content-around">
            <li class="nav-item dropdown">
                <a class="nav-link font-weight-bold dropdown-toggle" data-toggle="dropdown"><label class="cabecera-item">Datos de mi liga</label></a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="home.php">Clasifición</a>
                    <a class="dropdown-item" href="home2.php">Goleadores</a>
                    <a class="dropdown-item" href="home2.php">Partidos</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link font-weight-bold" href="myTeam.php"><label class="cabecera-item">Mi Equipo</label></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link font-weight-bold" href="createLeague.php"><label class="cabecera-item">Crear nueva Liga</label></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link font-weight-bold" href="searchLeague.php"><label class="cabecera-item">Unirse a una liga</label></a>
            </li>
        </ul>
    </div>

    <div class="user-info">
        <img src="../images/user.png" class="imagen-cabecera-user">
        <div class="datos-cabecera">
            <label class="label-cabecera"><?php echo $username ?></label></br>
            <label class="label-cabecera"><?php echo $dbTeamName ?></label></br>
            <a href="#"><button class="btn-sm" id="btn-abrir-popup"><img src="../images/logout.png" class="btn-logout">  Cerrar sesión</button></a>
        </div>
    </div>

</nav>