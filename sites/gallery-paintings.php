<?php
require_once('../sites/connect.php');
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
        <link rel="stylesheet" href="../css/galeria.css">
    </head>
    <body>
        <header>
            <div class="header-image"></div>
        </header>
        <nav>
            <div class="nav-menu-item"><a href="../index.php" title="Strona główna">Główna</a></div>
            <div class="nav-menu-item"><a href="../sites/gallery-select.php" title="Galeria">Galeria</a></div>
            <div class="nav-menu-item"><a href="../sites/contact.php" title="Napisz do mnie">Kontakt</a></div>
            <!--            <div class="nav-menu-item"><a href="#" title="Item 4">Item 4</a></div>-->
        </nav>
        <main>
            <section class="section-toggle">
                <div class="container galeria">
                    <?php
                    $page = 0;
                    if (isset($_POST["page"])) {
                        $page = $_POST["page"];
                        $page = ($page * 8) - 8;
                    }
                    $sql = "SELECT * FROM obrazy ORDER BY id LIMIT $page, 8";
                    $res = mysqli_query($connection, $sql);
                    while ($row = mysqli_fetch_array($res)) {
                        ?>
                        <div class="kwadrat-siatka">
                            <div class="kwadrat-nakladka"></div>
                            <img src="../images-thumbs/<?php echo $row["path"]; ?>">
                            <div class="kwadrat-nakladka-guziki">
                                <div class="kwadrat-nakladka-guziki-wiecej">
                                    <a href="#">Zobacz więcej</a>
                                </div>
                                <div class="kwadrat-nakladka-guziki-wiecej">
                                    <a href="#">Ogladaj galerie</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    $res1 = mysqli_query($connection, "SELECT * FROM obrazy");
                    $count = mysqli_num_rows($res1); // zlicza ile jest zdjec w bazie
                    $pageNum = ceil($count / 8); // ilosc podstron ze zdjeciami
                    echo "<br><br>";
                    ?>
                </div>
                <div class="dots">
                    <form method="POST">
                        <?php
                        for ($i = 1; $i <= $pageNum; $i++) {
                            ?>
                            <input type="submit" class="dots-counter" value="<?php echo $i; ?>" name="page">
                            <?php
                        }
                        ?>
                    </form>
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
    </body>
</html>