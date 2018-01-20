<?php
/**
 * Created by PhpStorm.
 * User: gmaku
 * Date: 20.01.2018
 * Time: 21:02
 */
    $zaladuj = function() {
        $katalogMiniatury = 'thumbs';
        $galeria = opendir($katalogMiniatury);

        while($zdjecie = readdir($galeria)) {
            $odczyt = pathinfo($katalogMiniatury.'/'.$zdjecie);
            if($odczyt['extension'] == 'jpg') {
                echo
                    '<div class="kwadrat"><a href="#"><img src="'.$katalogMiniatury.'/'.$zdjecie.'"/></a></div>';
            }
        }
        closedir($galeria);
    };