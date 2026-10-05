<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <h1>Calcular el área de un triángulo</h1>
    <form action="" method="POST">
        <label for="altura">Introduce la altura del triángulo: </label>
        <input type="number" name="altura" step="any" required/>
        <br>
        <label for="base">Introduce la base del triángulo: </label>
        <input type="number" name="base" step="any" required/><br>
        <input type="submit" value="calcular"/>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $altura = $_POST['altura'];
            $base = $_POST['base'];
            $area = $base*$altura/2;
            echo("El área del triángulo es: (".$base." * ".$altura.") / 2 = ".$area);
        }
    ?>
</body>
</html>