<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="num1">Número decimal 1:</label>
        <input type="number" name="num1" step="any" required/>
        <br>
        <label for="num2">Número decimal 2:</label>
        <input type="number" name="num2" step="any" required/>
        <br>
        <input type="submit" value="Realizar cálculos">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (($_POST['num1'] !== '' && $_POST['num2'] !== '')) {
                $num1 = (float) $_POST['num1'];
                $num2 = (float) $_POST['num2'];

                echo($num1.' + '.$num2.' = '.($num1+$num2).'<br>');
                echo($num1.' - '.$num2.' = '.($num1-$num2).'<br>');
                echo($num1.' * '.$num2.' = '.($num1*$num2).'<br>');
                echo($num1.' / '.$num2.' = '.($num1/$num2).'<br>');
            } else {
                echo('Debe introducir números decimales');
            }
        }
        
    ?>
</body>
</html>