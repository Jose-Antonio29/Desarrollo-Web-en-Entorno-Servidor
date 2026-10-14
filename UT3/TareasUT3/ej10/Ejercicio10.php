<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <form action="" method="POST">
        <label for="num">Introduce un número entero positivo: </label>
        <input type="number" name="num" required/>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $x = $_POST['num'];
            $espacios = 0;    
            if ($x < 0) {
                echo("Debes introducir un número entero positivo");
            } else {
                for ($i = 1; $i <= $x; $i++) {
                    for ($j = 0; $j < $espacios; $j++) {
                        echo("&nbsp;&nbsp;");
                    }
                    for ($j = $x; $j >= $i; $j--) {
                        echo("*");
                    }
                    $espacios++;
                    echo("<br>");
                }
            }
        }
    ?>
</body>
</html>