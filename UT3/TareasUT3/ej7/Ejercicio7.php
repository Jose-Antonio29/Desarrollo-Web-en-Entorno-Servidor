<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <form action="" method="POST">
        <label for="num">Introduce un número entero positivo: </label>
        <input type="number" name="num" required/><br>
        <input type="submit" value="Enviar"/>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $x = $_POST['num'];

            if ($x < 0) {
                echo("Debes introducir un número entero positivo");
            } else {
                for ($i = 0; $i <= $x; $i++) {
                    echo($i);
                }
            }
        }
    ?>
</body>
</html>