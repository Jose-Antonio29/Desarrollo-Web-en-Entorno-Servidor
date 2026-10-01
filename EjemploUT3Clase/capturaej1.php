<?php
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];

        switch($_POST['operacion']) {
                case 'suma': 
                        echo "La suma de $num1 y $num2 es ".$num1+$num2;
                        break;
                case 'resta':
                        echo "La resta de $num1 y $num2 es ".$num1-$num2;
                        break;
                case 'divi':
                        echo "La división de $num1 entre $num2 es ".$num1/$num2;
                        breaK;
                case 'multi':
                        echo "La multiplicación de $num1 por $num2 es ".$num1*$num2;
                        breaK;
        }
?>
   