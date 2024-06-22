<?php
include('conexion.php');

if (isset($_POST['agregar'])) {
    $tipo_producto = $_POST['tipo_producto'];
    $talla_nombre = $_POST['talla_nombre'];
    $descripcion = $_POST['descripcion'];

    // Insertar el nuevo registro
    $sql_insert = "INSERT INTO tallas (tipo_producto, talla_nombre, descripcion) 
                   VALUES ('$tipo_producto', '$talla_nombre', '$descripcion')";

    if ($db->query($sql_insert) === TRUE) {
        echo "¡Se insertaron los datos correctamente!";
    } else {
        echo "Error al insertar los datos: " . $db->error;
    }
}
?>
