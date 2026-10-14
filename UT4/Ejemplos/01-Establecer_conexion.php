<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Establecer una conexión</title>
</head>
<body>
    <?php
        // Creamos la conexion 
        $conn=mysqli_connect('localHost','root','');
        
        // Imprimimos el error si se ha producido
        echo mysqli_error($conn);
        
        // Seleccionamos la base de datos
        mysqli_select_db($conn,'pruebas');
        
        // Imprimimos el error si se ha producido
        echo mysqli_error($conn);
        mysqli_query($conn,"SET NAMES 'utf8'");
        mysqli_close($conn);
    ?>
    
</body>
</html>