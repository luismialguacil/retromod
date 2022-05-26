<?php include_once('head.php'); ?>

<?php include_once('header.php'); ?>

<main>
    <section id="register">

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <img src="img/console.png" alt="">
                </div>
                <div class="col-12 col-lg-6 order-1 order-lg-2 p-5">
                    <h1>Registrarse</h1>
                    <form>
                        <form>
                            <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email">
                            <input type="text" id="user" class="fadeIn third" name="user"
                                placeholder="Nombre de usuario">
                            <input type="text" id="pass" class="fadeIn third" name="pass" placeholder="Contraseña">
                            <input type="text" id="pass2" class="fadeIn third" name="pass2"
                                placeholder="Repetir contraseña">
                            <input type="submit" class="fadeIn fourth submit" value="Registrarse">
                        </form>
                        <div class="acceso">
                            <a href="login.php" class="reg">¿Ya tienes cuenta?<i class="bi bi-arrow-right"></i></a>
                            <small class="access">o registrate con</small>
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