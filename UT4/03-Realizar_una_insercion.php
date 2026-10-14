<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizamos una insercion</title>
</head>
<body>
    <?php
        // Creamos la conexion 
        $conn=mysqli_connect('localHost','root','');
        
        // Miramos a ver si sale algun error
        print(mysqli_error($conn));
        
        // Seleccionamos la base de datos
        mysqli_select_db($conn,'pruebas2');
        
        // Imprimimos si se ha producido un error
        print mysqli_error($conn);
        
        // Función que reconoce los acentos
        mysqli_query($conn,"SET NAMES 'utf8'");
        
        // Creo la consulta
        $consulta="INSERT INTO PERSONAS VALUES('persona34','Apellidos2','Madrid',30,'Obrero','Mujer')";
        $result=mysqli_query($conn,$consulta);
        
        // Imprimimos error si se ha producido
        print mysqli_error($conn);
        print("<h4>Insercion realizada correctamente</h4>");
        mysqli_close($conn);



    ?>
    
</body>
</html>