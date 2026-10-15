<?php
    include("conexion.php");

    $cod = $_POST['codigo'];
    $producto = $_POST['producto'];
    $detalle = $_POST['detalle'];
    $precio = $_POST['precio'];
    $descuento = $_POST['descuento'];

    $consulta = "UPDATE productos SET producto='$producto', detalle='$detalle', precio='$precio', descuento='$descuento' WHERE codigo='$cod'";

    mysqli_query($conn, $consulta);

    mysqli_error($conn);

    //header("LOCATION:listado.php");
?>