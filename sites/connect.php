<?php
    $connection = new mysqli("localhost", "root", "1234", "baza_obrazy");
    if(!$connection) {
        echo "Błąd logowania do bazy" . die(mysqli_error($connection));
    }
    
//    $dbselect = mysqli_select_db($connection, "baza_obrazy");
//    if(!$dbselect) {
//        echo "Błąd połączenia z bazą" . die(mysqli_error($connection));
//    }
?>