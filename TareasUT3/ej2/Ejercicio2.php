<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <form action="" method="POST">
        <label for="num1">Primer número decimal: </label>
        <input type="number" step="any" name="num1" required/><br>
        <label for="num2">Segundo número decimal</label>
        <input type="number" step="any" name="num2" required/><br>
        <input type="submit" value="pulsame"/>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $x = (float) $_POST['num1'];
            $y = (float) $_POST['num2'];
            
            // Intercambiamos los valores
            $aux = $x;
            $x = $y;
            $y = $aux;

            // Mostramos los nuevos valores
            echo("Valor del primer número decimal (intercambiado): ".$x."<br>");
            echo("Valor del segundo número decimal (intercambiado): ".$y);
        }
    ?>
</body>
</html>