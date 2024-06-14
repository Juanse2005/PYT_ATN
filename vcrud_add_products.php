<?php
include('conexion.php');

if (isset($_POST['agregar'])) {
    $codigo_prod = $_POST['codigo_prod'];
    $nombre_prod = $_POST['nombre_prod'];
    $descripcion_prod = $_POST['descripcion_prod'];
    $stock_prod = $_POST['stock_prod'];
    $precio_prod = $_POST['precio_prod'];
    $descuento_prod = $_POST['descuento_prod'];
    $estado_prod = $_POST['estado_prod'];
    $id_proveedor = $_POST['id_proveedor'];
    $id_categoria = $_POST['id_categoria'];

    // Verificar si se ha subido un archivo
    if ($_FILES['imagen_prod']['error'] === UPLOAD_ERR_OK) {
        $imagen_contenido = addslashes(file_get_contents($_FILES['imagen_prod']['tmp_name']));
        
        // Insertar el producto en la base de datos
        $sql = "SELECT * FROM productos WHERE codigo_prod='$codigo_prod'";
        $result = $db->query($sql);
        if (!$result) {
            die('Error en la consulta: ' . $db->error);
        }
        if ($result->num_rows == 0) {
            $sql_insert = "INSERT INTO productos (codigo_prod, nombre_prod, descripcion_prod, stock_prod, precio_prod, descuento_prod, estado_prod, imagen_prod, id_proveedor, id_categoria) VALUES ('$codigo_prod', '$nombre_prod', '$descripcion_prod', '$stock_prod', '$precio_prod', '$descuento_prod', '$estado_prod', '$imagen_contenido', '$id_proveedor', '$id_categoria')";
            if ($db->query($sql_insert) === TRUE) {
                echo "¡Se insertaron los datos correctamente!";
            } else {
                echo "Error al insertar los datos: " . $db->error;
            }
        } else {
            echo "¡No se puede insertar la información! Ya existe un producto con el mismo código.";
        }
    } else {
        echo "Error al subir la imagen: " . $_FILES['imagen_prod']['error'];
    }
}

$db->close();
?>
