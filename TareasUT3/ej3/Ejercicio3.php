<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <form method="POST" action="">
        <label for="dia">Introduce un día de la semana (L,M,X,J,V,S,D): </label>
        <input type="text" name="dia" required/><br>
        <input type="submit" value="Enviar"/>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $diaSemana = $_POST['dia'];
            $letraDia = strtoupper($diaSemana)

            switch($letraDia) {
                case 'L': 
                case 'M':
                case 'X':
                case 'J':
                case 'V':
                    echo("Día laboral");
                    break;
                case 'S':
                case 'D': 
                    echo("Fin de semana");
                    break;
                default:
                    echo("Tipo de dato o letra introducida incorrecta");
            }
        }
    ?>
</body>
</html>