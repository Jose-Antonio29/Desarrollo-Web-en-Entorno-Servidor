<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>Par o impar</h1>
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
                if ($x % 2 === 0) {
                    echo("Es par<br>");
                    echo("Los 10 siguientes números son: ")
                    for ($i = $x; $i <= ($x+10); $i += 2) {
                        echo($i." ");
                    }
                } else {
                    echo("Es impar<br>");
                    for ($i = $x; $i <= ($x+10); $i += 2) {
                        echo($i." ");
                    }
                }

                
            }
        }
    ?>
</body>
</html>