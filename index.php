<!DOCTYPE html>
<html lang="en">

<?php include "templates/headerIndex.php" ?>

<body>

<div class="limiter">
    <div class="container-login100" style="">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="php/procesaLogin.php">
					<span class="login100-form-logo">
						<img src="images/user.png" class="login100-form-logo">
					</span>
                <span class="login100-form-title p-b-34 p-t-27">
						Regístrate:
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="text" name="username" placeholder="Nombre de usuario">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Contraseña">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <?php if(isset($_REQUEST['errorLogin'])): ?>
                    <div class="loginErr">
                        Error - Nombre o contraseña incorrectas.
                    </div>
                <br>
                <?php endif; ?>

                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                    <label class="label-checkbox100" for="ckb1">
                        Recordarme
                    </label>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">  <!--formaction="html/home.html"-->
                        Login
                    </button>
                </div>
                <div class="text-center p-t-50">
                    <a class="txt1" href="php/register.php">
                        Crearse una cuenta.
                    </a></br>
                    <a class="txt1" href="#">
                        ¿Ha olvidado su contraseña?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<?php include "templates/scriptsIndex.php" ?>

</body>
</html>