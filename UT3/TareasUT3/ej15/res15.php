<?php
    function esDiaValido($letra) {
        switch($letra) {
            case 'L':
            case 'M':
            case 'X':
            case 'J':
            case 'V':
            case 'S':
            case 'D':
                return true;
            default: 
                return false;
        }
    }

    function esDiaLaboral($letra) {
        switch($letra) {
            case 'L':
            case 'M':
            case 'X':
            case 'J':
            case 'V':
                return true;
            default:
                return false;
        }
    }
?>