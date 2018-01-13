<?php
/**
 * Created by PhpStorm.
 * User: gmaku
 * Date: 13.01.2018
 * Time: 12:27
 */
include_once 'testowy.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona - wersja 1.0</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="header-image"></div>
    </header>
    <nav>
        <div class="nav-menu-item"><a href="#" title="Item 1">Item 1</a></div>
        <div class="nav-menu-item"><a href="#" title="Item 2">Item 2</a></div>
        <div class="nav-menu-item"><a href="#" title="Item 3">Item 3</a></div>
        <div class="nav-menu-item"><a href="#" title="Item 4">Item 4</a></div>
    </nav>
    <main>
        <section>
            <div id="slider" class="slider">
                <ul id="sliderWrap">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                </ul>
                <a href="#" title="Wstecz" id="slider_prev">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </a>
                <a href="#" id="Dalej" "slider_next">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </a>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-upper">
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
                <p>Kiedy zrobiona i przez kogo</p>
            </div>
        </div>
    </footer>
</body>
</html>
