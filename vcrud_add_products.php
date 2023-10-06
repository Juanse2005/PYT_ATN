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
    $imagen_prod = $_POST['imagen_prod'];
    $id_proveedor = $_POST['id_proveedor'];
    $id_categoria = $_POST['id_categoria'];
    $cont = "0";

    $sql = "SELECT * FROM productos WHERE codigo_prod='$codigo_prod'";
    if (!$result = $db->query($sql)) {
        die('hay un error en la consulta');
    }
    while ($row = $result->fetch_assoc()) {
        $ccodigo_prod = stripslashes($row["codigo_prod"]);
        $cont = $cont + 1;
    }
    if ($cont == "0") {
        mysqli_query($db, " INSERT INTO `productos` (`id_producto`, `codigo_prod`,
         `nombre_prod`, `descripcion_prod`, `stock_prod`, `precio_prod`, `descuento_prod`, `estado_prod`, `imagen_prod`, `id_proveedor`, `id_categoria`) VALUES 
         (null, '$codigo_prod', '$nombre_prod', '$descripcion_prod', '$stock_prod', '$precio_prod', '$descuento_prod', '$estado_prod', '$imagen_prod', '$id_proveedor', '$id_categoria')");
        echo "¡Se insertaron los datos correctamente!";
    }
    if ($cont != "0") {
        echo "¡No se puede insertar la informacion!" . "<br>";
        echo "Error: " . "<br>" . mysqli_error($db);
    }
}
