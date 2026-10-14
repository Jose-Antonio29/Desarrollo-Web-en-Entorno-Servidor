<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
    <h1>Generador de Matriz</h1>
    <form action="" method="POST">
        <label for="num">Introduce un número entero positivo: </label>
        <input type="number" name="num" required/><br>
        <input type="submit" value="Generar"/>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD']==='POST') {
            include("res16.php");
            $num = $_POST['num'];

            if($num < 0) {
                echo("Debes introducir un número entero positivo.");
            } else {
                generarMatriz($num);
            }
        }
    ?>
</body>
</html>