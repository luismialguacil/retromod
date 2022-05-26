<?php include_once('head.php'); ?>

<?php include_once('header.php'); ?>

<main>
    <section id="login" class="h-100">

        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 col-lg-6 order-2 order-lg-1 h-100 d-flex log-img">
                    <img src="img/console.png" alt="">
                </div>
                <div class="col-12 col-lg-6 order-1 order-lg-2 p-5">
                    <h1>Login</h1>
                    <form>
                        <form>
                            <label for="usuario">Usuario</label>
                            <input type="text" id="login" class="fadeIn second" name="login">
                            <label for="pass">Contraseña</label>
                            <input type="text" id="password" class="fadeIn third" name="login">
                            <input type="submit" class="fadeIn fourth submit" value="Log In">
                        </form>
                        <div class="acceso">
                            <a href="register.php" class="reg">¿No tienes cuenta? Registrate<i class="bi bi-arrow-right"></i></a>
                            <small class="access">o accede con</small>
                            <div>
                                <a href="#"><i class="bi bi-google"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>



</main>


<?php include_once('footer.php'); ?>