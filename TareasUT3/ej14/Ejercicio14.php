<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <form action="" method="POST"> 
        <label for="num1">Introduzca el primer número: </label>
        <input type="number" name="num1" step="any" required/><br>
        <label for="num2">Introduzca el segundo número: </label>
        <input type="number"  name="num2" step="any" required/><br>
        <input type="submit" value="Calcular"/>
    </form>

    <?php
        include("res14.php");
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            echo($num1." + ".$num2." = ".sumar($num1, $num2)."<br>");
            echo($num1." - ".$num2." = ".restar($num1, $num2)."<br>");
            echo($num1." / ".$num2." = ".dividir($num1, $num2)."<br>");
            echo($num1." * ".$num2." = ".multiplicar($num1, $num2));
        }
    ?>
</body>
</html>