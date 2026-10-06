<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <form action="" method="POST">
        <label for="dia">Introduce un día de la semana (L,M,X,J,V,S,D): </label>
        <input type="text" name="dia" required/><br>
        <input type="submit" value="Enviar"/>
    </form>

    <?php
        include("res15.php");
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $dia = strtoupper($_POST['dia']);

            if (esDiaValido($dia)) {
                echo("Has introducido un día válido.<br>");
                if (esDiaLaboral($dia)) {
                    echo("Es un día laboral.");
                } else {
                    echo("No es un día laboral.");
                }
            } else {
                echo("No has introducido un día válido.");
            }
        }
    ?>
</body>
</html>