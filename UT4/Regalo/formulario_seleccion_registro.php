<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización de productos</title>
</head>

<body>
    <p><a href="menu.php">Volver al menú</a></p>
    <h1>Actualización de productos</h1>
    <?php
    // Incluimos la conexión a la base de datos
    include("conexion.php");

    $consulta = "SELECT * FROM productos";
    $result = mysqli_query($conn, $consulta);

    // Imprimimos el error si se ha producido
    echo mysqli_error($conn);
    while ($row = mysqli_fetch_array($result)) {
        echo ("<b>Código: " . $row['codigo'] . "</b><br>");
        echo ("Producto: " . $row['producto'] . "<br>");
        echo ("Detalle: " . $row['detalle'] . "<br>");
        echo ("Precio: " . $row['precio'] . "€<br>");
        echo ("Descuento: " . $row['descuento'] . "%<br>");
        $img = $row['imagen'];
        echo ("<img src='$img' width='300px'/><br>");
        $cod=$row['codigo'];
        echo ("<a href='formulario_modificar.php?cod=$cod'>Modificar</a>");
        echo ("<br><br>");
    }
    mysqli_close($conn);
    ?>
</body>

</html>