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
        mysqli_select_db($conn,'pruebas2');
        
        // Imprimimos el error si se ha producido
        echo mysqli_error($conn);
        mysqli_query($conn,"SET NAMES 'utf8'");
        
        // Me creo la consulta que voy a ejecutar
        $consulta="SELECT * FROM PERSONAS";
        $result=mysqli_query($conn,$consulta);
        
        // Imprimimos el error si se ha producido
        echo mysqli_error($conn);
        while($row=mysqli_fetch_array($result)){
            print ("forma1: ".$row[0]." || ". $row[1]);
            print("<br>");
            print ("forma2: ".$row['NOMBRE']." || ". $row['APELLIDOS']);
            print("<br>");
            print("-------------------------------");
            print("<br>");
            mysqli_errno($conn);

        }
        mysqli_close($conn);
    ?>
    
</body>
</html>