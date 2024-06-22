<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos | ATN</title>
    <link rel="icon" type="image/x-icon" href="img-logo-atn.png">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">

    <style>
        .mas-articulos {
            background-color: #fcfcfc;
            padding: 20px;
            margin-top: 30px;
            border-radius: 5px;
        }

        .mas-articulos h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php include ('navbar_index.php') ?>
    <br><br><br>
    <div class="container mt-5">
        <?php
        // Realiza una conexión a la base de datos (puedes usar tu propio archivo de conexión)
        include ("conexion.php");

        // Mostrar detalle del producto si se proporciona el parámetro "id" en la URL
        if (isset($_GET['id'])) {
            // Recibimos el identificador único del producto desde la URL
            $id_producto = $_GET['id'];

            // Realiza una consulta para obtener la información del producto específico
            $sql = "SELECT p.*, c.nombre_cat, t.talla_nombre, t.descripcion AS descripcion_talla 
            FROM productos p 
            JOIN categorias c ON p.id_categoria = c.id_categoria 
            LEFT JOIN tallas t ON p.tipo_producto = t.tipo_producto 
            WHERE p.id_producto = $id_producto";
            $result = mysqli_query($db, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                // Mostramos la información del producto
                echo '<div class="row">';
                echo '    <div class="col-md-6">';
                echo '        <img src="data:image/jpeg;base64,' . base64_encode($row['imagen_prod']) . '" style="max-width: 100%; height: auto;" alt="Imagen del producto">';
                echo '    </div>';
                echo '    <div class="col-md-6">';
                echo '        <div class="text-center">';
                echo '            <h1>' . $row['nombre_prod'] . '</h1>';
                echo '            <p>Categoría: ' . $row['nombre_cat'] . '</p>';
                echo '            <p>Descripción: ' . $row['descripcion_prod'] . '</p>';
                echo '            <p>Stock: ' . $row['stock_prod'] . '</p>';
                echo '            <p>Precio: $' . $row['precio_prod'] . ' COP</p>';
                echo '            <h3>Seleccione una Talla:</h3>';
                echo '            <select class="form-select" aria-label="Default select example" id="selectTalla">';
                echo '                <option value="">Seleccione...</option>';

                // Iterar sobre las filas resultantes para mostrar cada talla como una opción en el select
                do {
                    if (!empty($row['talla_nombre'])) {
                        echo '                <option value="' . $row['talla_nombre'] . '">' . $row['talla_nombre'] . '</option>';
                    }
                } while ($row = mysqli_fetch_assoc($result));

                echo '            </select>';
                echo '            <a data-bs-toggle="offcanvas" data-bs-target="#offcanvas-shopping-cart" aria-controls="offcanvasRight" class="btn btn-primary mt-3">Añadir al carrito de compras</a>';
                echo '        </div>';
                echo '    </div>';
                echo '</div>';
                echo '</div>';

            } else {
                echo "Producto no encontrado.";
            }
        } else {
            echo "Identificador de producto no proporcionado.";
        }

        // Mostrar más productos aleatorios debajo del detalle del producto actual
        $sql_mas_productos = "SELECT * FROM productos ORDER BY RAND() LIMIT 4";
        $result_mas_productos = mysqli_query($db, $sql_mas_productos);

        if ($result_mas_productos && mysqli_num_rows($result_mas_productos) > 0) {
            echo '<div class="mas-articulos">';
            echo '    <h2>Más artículos</h2>';
            echo '    <div class="row">';
            while ($row_mas_productos = mysqli_fetch_assoc($result_mas_productos)) {
                echo '        <div class="col-md-3 mb-4">';
                echo '            <div class="card">';
                echo '                <a href="product_detail.php?id=' . $row_mas_productos['id_producto'] . '" class="text-decoration-none h6">';
                echo '                    <img src="data:image/jpeg;base64,' . base64_encode($row_mas_productos['imagen_prod']) . '" class="card-img-top" alt="Imagen del producto">';
                echo '                </a>';
                echo '                <div class="card-body">';
                echo '                    <h5 class="card-title">' . $row_mas_productos['nombre_prod'] . '</h5>';
                echo '                    <p class="card-text">Precio: $' . $row_mas_productos['precio_prod'] . ' COP</p>';
                echo '                    <a href="product_detail.php?id=' . $row_mas_productos['id_producto'] . '" class="btn btn-primary">Ver detalle</a>';
                echo '                </div>';
                echo '            </div>';
                echo '        </div>';
            }
            echo '    </div>';
            echo '</div>';
        } else {
            echo "No hay más productos disponibles.";
        }
        ?>
    </div>
    <!-- Footer -->
    <?php include ('footer.php') ?>

    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>