<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nums">Introduce 7 números (separados por .): </label>
        <input type="text" name="nums" required/><br>
        <input type="submit" value="Enviar"/>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $arrayNums = explode('.',$_POST['nums']);

            echo("Números almacenados: ");
            foreach($arrayNums as $num) {
                echo($num." ");
            }
        }
    ?>
</body>
</html>