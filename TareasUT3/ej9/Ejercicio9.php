<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
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
            if ($x < 0) {
                echo("Debes introducir un número entero positivo");
            } else {
                for ($i = 1; $i <= $x; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo("*");
                    }
                    echo("<br>");
                }
            }
        }
    ?>
</body>
</html>