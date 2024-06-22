<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img-logo-atn.png">
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <title>Productos | ATN</title>
</head>

<body>
    <!--navbar-->
    <?php
    include ('navbar_index.php')
        ?>
    <div class="container mt-5">
    </div>
    <div class="container-fluid mt-3">
        <div class="row g-1">
            <br>
            <div class="container-fluid">
                <br>
                <div class="row g-1">
                    <?php
                    include ("conexion.php");
                    // Verifica si se envió el formulario de búsqueda
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search_query'])) {
                        // Escapa el término de búsqueda para evitar inyecciones SQL
                        $search_query = mysqli_real_escape_string($db, $_POST['search_query']);

                        // Consulta SQL para buscar productos que coincidan con el término de búsqueda
                        $sql_productos = "SELECT * FROM productos WHERE nombre_prod LIKE '%$search_query%'";
                        $result_productos = mysqli_query($db, $sql_productos);

                        if ($result_productos && mysqli_num_rows($result_productos) > 0) {
                            while ($row_producto = mysqli_fetch_assoc($result_productos)) {
                                // Muestra los resultados de la búsqueda
                                echo '<div class="col">';
                                echo '    <div class="card">';
                                echo '        <a href="product_detail.php?id=' . $row_producto['id_producto'] . '" class="text-decoration-none h6">';
                                echo '            <img src="data:image/jpeg;base64,' . base64_encode($row_producto['imagen_prod']) . '" style="width: 100%; height: 400px;" alt="...">';
                                echo '        </a>';
                                echo '        <div class="card-body">';
                                echo '            <h5 class="card-title">' . $row_producto['nombre_prod'] . '</h5>';
                                echo '            <p class="card-text">$' . $row_producto['precio_prod'] . ' COP</p>';
                                echo '<a href="product_detail.php?id=' . $row_producto['id_producto'] . '" class="btn btn-primary">Ver detalle</a>';
                                echo '        </div>';
                                echo '    </div>';
                                echo '</div>';
                            }
                        } else {
                            echo "No se encontraron productos que coincidan con la búsqueda: " . $search_query;
                        }
                    } else {
                        // Si no se envió el formulario de búsqueda, muestra todos los productos de una categoría específica (código existente)
                        if (isset($_GET['id'])) {
                            $id_categoria = $_GET['id'];

                            $sql_categoria = "SELECT * FROM categorias WHERE id_categoria = $id_categoria";
                            $result_categoria = mysqli_query($db, $sql_categoria);

                            if ($result_categoria && mysqli_num_rows($result_categoria) > 0) {
                                $row_categoria = mysqli_fetch_assoc($result_categoria);

                                echo '<h2>' . $row_categoria['nombre_cat'] . '</h2>';

                                $sql_productos = "SELECT * FROM productos WHERE id_categoria = $id_categoria";
                                $result_productos = mysqli_query($db, $sql_productos);

                                if ($result_productos && mysqli_num_rows($result_productos) > 0) {
                                    // Contar el número de productos
                                    $num_productos = mysqli_num_rows($result_productos);

                                    while ($row_producto = mysqli_fetch_assoc($result_productos)) {
                                        // Determinar el ancho de la columna según el número de productos
                                        $col_width = ($num_productos == 1) ? 'col-md-12' : 'col-md-4';

                                        // Muestra los productos de la categoría
                                        echo '<div class="' . $col_width . '">';
                                        echo '    <div class="card">';
                                        echo '        <a href="product_detail.php?id=' . $row_producto['id_producto'] . '" class="text-decoration-none h6">';
                                        echo '            <img src="data:image/jpeg;base64,' . base64_encode($row_producto['imagen_prod']) . '" style="width: 100%; height: 400px;" alt="...">';
                                        echo '        </a>';
                                        echo '        <div class="card-body">';
                                        echo '            <h5 class="card-title">' . $row_producto['nombre_prod'] . '</h5>';
                                        echo '            <p class="card-text">$' . $row_producto['precio_prod'] . ' COP</p>';
                                        echo '            <a href="product_detail.php?id=' . $row_producto['id_producto'] . '" class="btn btn-primary">Ver detalle</a>';
                                        echo '        </div>';
                                        echo '    </div>';
                                        echo '</div>';
                                    }
                                } else {
                                    echo "No se encontraron productos en esta categoría.";
                                }
                            } else {
                                echo "Categoría no encontrada.";
                            }
                        } else {
                            echo "Identificador de categoría no proporcionado.";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!--Footer-->
    <?php
    include ('footer.php')
        ?>
</body>
<script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</html>