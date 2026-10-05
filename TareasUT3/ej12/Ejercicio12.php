<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <h1>Tabla de multiplicar</h1>
    <form action="" method="POST">
        <label for="num">Introduce un número entero (1 a 9): </label>
        <input type="number" name="num" required/><br>
        <input type="submit" value="Enviar"/>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $num = $_POST['num'];

            if ($num < 1 || $num > 9) {
                echo("Debes introducir un número entre 1 y 9.");
            } else {
                echo("La tabla del ".$num." es: <br>"); 
                $archivo = fopen("Tabla.txt", "w");
                fputs ($archivo, "La tabla del $num es: ".PHP_EOL);
                for ($i = 0; $i <= 10; $i++) {
                    $result = $num*$i;
                    fputs($archivo, "$num x $i = $result".PHP_EOL);
                    echo($num." x ".$i." = ".$result."<br>");
                }
                fclose($archivo);
            }
        }
    ?>
</body>
</html>