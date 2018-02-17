<?php
session_start();
require_once '../sites/connect.php';

if (isset($_POST) & !empty($_POST)) {
    $name = ucwords((strtolower(filter_input(INPUT_POST, 'firstName'))), " ");
//    $name = ucwords((strtolower($nameToPut)), " ");
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if(empty($email)) {
        $_SESSION['given_email'] = $_POST['email'];
        header('Location: ../sites/connect.php');
    }
    $city = ucwords(strtolower(filter_input(INPUT_POST, 'city')), " ");
    $phone = filter_input(INPUT_POST, 'phone');
    $message = filter_input(INPUT_POST, 'msg');

    $query = $db->prepare("INSERT INTO `klienci_zapytania` (imie, email, miasto, telefon, zapytanie) VALUES (:name, :email, :city, :phone, :message)");
    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':city', $city, PDO::PARAM_STR);
    $query->bindValue(':phone', $phone, PDO::PARAM_STR);
    $query->bindValue(':message', $message, PDO::PARAM_STR);
    $query->execute();
}
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
        <link rel="stylesheet" href="../css/wyslany.css">
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
                <div class="container flexownia-pion wyslany">
                    <h3>Dzięki <?php echo $name; ?>, Twoje zapytnie zostało wysłane</h3>
                    <p>Skontaktuję się z Tobą wkrótce</p>
                    <div class="guzik-powrot">
                        <a href="../index.php">Powrót do głównej</a>
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
        <script src="js/checkForm.js"></script>
    </body>
</html>