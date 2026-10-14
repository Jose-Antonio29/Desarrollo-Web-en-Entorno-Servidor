<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Update</title>
</head>
<body>
     <?php 
     // Creamos la conexión
     $con = mysqli_connect('localHost','root','');
     // Imprimimos un error si se ha producido
     echo mysqli_error($con);

     // Seleccionamos la base de datos
     mysqli_select_db($con,'pruebas');
     
     // Imprimimos un error
     echo mysqli_error($con);
     mysqli_query($con,"SET NAMES 'utf8'");

     // Creamos una consulta que voy a ejecutar. En este caso vamos a obtener todas las personas de la base de datos
     $consulta = "DELETE FROM personas WHERE apellidos='Apellidos11'";

     $result =mysqli_query($con,$consulta);
     // Imprimimos error si se ha producido
     echo mysqli_error($con);

     echo '<h4>Borrado realizado correctamente</h4>';
     
     mysqli_close($con);
     ?>
</body>
</html>