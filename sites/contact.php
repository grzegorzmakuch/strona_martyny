<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Strona - wersja 1.0</title>

        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/kontakt.css">
    </head>
    <body>
        <header>
            <div class="header-image"></div>
        </header>
        <nav>
            <div class="nav-menu-item"><a href="../index.php" title="Strona główna">Główna</a></div>
            <div class="nav-menu-item"><a href="../sites/gallery-select.php" title="Galeria">Galeria</a></div>
            <div class="nav-menu-item"><a href="../sites/contact.php" title="Napisz do mnie">Kontakt</a></div>
            <!--<div class="nav-menu-item"><a href="#" title="Item 4">Item 4</a></div>-->
        </nav>
        <main>
            <section class="section-toggle">
                <div class="container flexownia-poziom contact-szeroki">
                    <div class="contact contact-left">
                        <div class="contact-content">
                            <h2>Skontaktuj się ze mną:</h2>
                        </div>
                        <div class="contact-content">
                            <h3>Telefon:</h3>
                            <p>+48 555 555 555</p>
                            <h3>E-mail:</h3>
                            <p>mlodamqh@gmail.com</p>
                            <h3>Lokalizacja:</h3>
                            <p>Sosnowiec, Polska</p>
                        </div>
                    </div>
                    <div class="contact contact-right"> 
                        <div class="formularz">
                            <h2>Wyślij mi wiadomość:</h2>
                            <form action="../sites/wyslany.php" method="post">
                                <div class="formularz-columns">
                                    <div class="formularz-left-column">
                                        <input type="text" name="firstName" placeholder="Imię" required>
                                        <!--todo: napisac funkcje sprawdzajaca format email-->
                                        <input type="email" name="email" placeholder="E-mail" required 
                                        <?= isset($_SESSION['given_email'])? 'value="' . $_SESSION['given_email'] . '"' : ''
                                        ?>>
                                        <input type="text" name="city" placeholder="Miasto">
                                        <!--todo: napisac funkcje sprawdzajaca format nr telefonu-->
                                        <input type="text" name="phone" placeholder="Telefon">
                                        <!--<input id="data2" type="text" onkeypress='validate(event)' placeholder="Telefon">-->
                                        <!--<div class="error" >Użyj cyfr.</div>-->
                                    </div>
                                    <div class="formularz-right-column">
                                        <!--todo: napisac funkcje sprawdzajaca ilosc znakow-->
                                        <textarea maxlength="160" name="msg" placeholder="Wpisz wiadomość (max. 160 znaków)"></textarea>
                                    </div>
                                </div>
                                <div class="formularz-bottom-column">
                                    <button class="guzik kasuj" type="reset" >
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                    <button class="guzik wyslij" type="sub  mit" >
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <?php
                                if (isset($_SESSION['given_email'])) {
                                    echo "<p class='alert'>Niepoprawny adres</p>";
                                    unset($_SESSION['given_email']);
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="footer-upper container">
                <div class="footer-upper-social">
                    <div class="footer-upper-social-box">
                        <a href="#" title="Social 1" target="_blank">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="footer-upper-social-box">
                        <a href="#" title="Social 2" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="footer-upper-social-box">
                        <a href="#" title="Social 3" target="_blank">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="footer-upper-contact">
                    <div class="footer-upper-contact-box">
                        <p>
                            <a href="mailto:adres@email.com">email: adres@email.com</a>
                        </p>
                        <p>+48 111 222 333</p>
                    </div>
                </div>
            </div>
            <div class="footer-lower">
                <div class="footer-lower-info">
                    <p>Projekt i wykonanie MakoskyMqh 2018</p>
                </div>
            </div>
        </footer>
        <!--<script src="js/checkForm.js"></script>-->
    </body>
</html>