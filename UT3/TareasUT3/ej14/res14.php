<?php
    if ($_SERVER['REQUEST_METHOD']==='POST') {
        function sumar($x, $y) {
            return $x + $y;
        }
        
        function restar($x, $y) {
            return $x - $y;
        }
        
        function dividir($x, $y) {
            if ($y == 0) {
                return "No se puede dividir entre 0";
            } else {
                return $x / $y;
            }
        }
        
        function multiplicar($x, $y) {
            return $x * $y;
        }
    }
?>