<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <form action="" method="POST">
        <label for="num">Introduce un número: </label>
        <input type="number" name="num" required/><br>
        <input type="submit" value="Enviar"/>
    </form> 

    <?php
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $x = $_POST['num'];

            for ($i=0; $i<$x; $i++) {
                for($j=0; $j<$x; $j++) {
                    echo("*");
                }
                echo("<br>");
            }
        }
    ?>
</body>
</html>