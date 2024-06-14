<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos | ATN</title>
    <link rel="icon" type="image/x-icon" href="img-logo-atn.png">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
</head>
<body>
    <!--navbar-->
    <?php include('navbar_index.php') ?>
    <br><br><br>
    <div class="container mt-5">

    <?php
    // Verificamos si se ha proporcionado el parámetro "id" en la URL
    if (isset($_GET['id'])) {
        // Recibimos el identificador único del producto desde la URL
        $id_producto = $_GET['id'];

        // Realiza una conexión a la base de datos (puedes usar tu propio archivo de conexión)
        include("conexion.php");

        // Realiza una consulta para obtener la información del producto específico
        $sql = "SELECT p.*, c.nombre_cat FROM productos p JOIN categorias c ON p.id_categoria = c.id_categoria WHERE id_producto = $id_producto";
        $result = mysqli_query($db, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            // Mostramos la información del producto
            echo '<div class="row">';
            echo '    <div class="col-md-6">';
            echo '        <img src="data:image/jpeg;base64,' . base64_encode($row['imagen_prod']) . '" style="max-width: 100%; height: auto;" alt="Imagen del producto">';
            echo '    </div>';
            echo '    <div class="col-md-6 d-flex align-items-center">';
            echo '        <div class="text-center">';
            echo '            <h1>' . $row['nombre_prod'] . '</h1>';
            echo '            <p>Categoría: ' . $row['nombre_cat'] . '</p>';
            echo '            <p>Descripcion: ' . $row['descripcion_prod'] . '</p>';
            echo '            <p>Stock: ' . $row['stock_prod'] . '</p>';
            echo '            <p>Precio: $' . $row['precio_prod'] . ' COP</p>';
            echo '            <button class="btn btn-primary" id="addToCartBtn">Añadir al carrito de compras</a></button>';
            echo '        </div>';
            echo '    </div>';
            echo '</div>';
        } else {
            echo "Producto no encontrado.";
        }
    } else {
        echo "Identificador de producto no proporcionado.";
    }
    ?>
</div>

</div>

    </div>

    <!--Footer-->
    <?php include('footer.php') ?>

    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="shopping-cart.js"></script>
</body>
</html>
