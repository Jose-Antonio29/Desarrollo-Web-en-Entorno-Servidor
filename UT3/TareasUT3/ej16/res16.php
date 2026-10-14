<?php
    function generarMatriz(int $num) {
        for($i = 1; $i <= $num; $i++) {
            for($j = 1; $j <= $num; $j++) {
                echo(random_int(0, 9));
            }
            echo("<br>");
        }
    }
?>