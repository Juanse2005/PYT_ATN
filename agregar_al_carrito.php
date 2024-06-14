<?php
session_start();

if (isset($_POST['producto_id']) && isset($_POST['producto_nombre']) && isset($_POST['producto_precio']) && isset($_POST['producto_imagen'])) {
    $producto_id = $_POST['producto_id'];
    $producto_nombre = $_POST['producto_nombre'];
    $producto_precio = $_POST['producto_precio'];
    $producto_imagen = $_POST['producto_imagen'];

    $producto = array(
        "id" => $producto_id,
        "nombre" => $producto_nombre,
        "precio" => $producto_precio,
        "imagen" => $producto_imagen
    );

    // Si la sesión del carrito de compras no existe, crea una nueva
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    // Agrega el producto al carrito de compras
    $_SESSION['carrito'][] = $producto;

    // Redirecciona de vuelta a la página de donde se añadió el producto
    header("Location: {$_SERVER['HTTP_REFERER']}");
} else {
    // Si no se reciben todos los datos necesarios, redirige a la página de inicio
    header("Location: index.php");
}
?>
