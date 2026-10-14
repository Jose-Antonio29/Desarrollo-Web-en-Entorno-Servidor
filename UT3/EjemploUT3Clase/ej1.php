<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mi primer ejemplo serio php</h1>
    <form name="miFormulario" action="capturaej1.php" method="post">
        Número 1*:   <input name="num1" type="text" required>
        <br>
        Número 2*:   <input name="num2" type="text" required>
        <br><br>
        Operación <select name="operacion">
                    <option value="suma">+</option>
                    <option value="resta">-</option>
                    <option value="divi">*</option>
                    <option value="multi">/</option>
                  </select>
        <br>
        <input name="lagartito" type="submit" value="Pulsame">
    </form>
</body>
</html>