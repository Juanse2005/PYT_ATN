<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <!--navbar-->
    <?php
    include('navbar_index.php')
    ?>

    <div class="container mt-5">
        <br>
        <?php
        // Verificamos si se ha proporcionado el parámetro "id" en la URL
        if (isset($_GET['id'])) {
            // Recibimos el identificador único de la categoría desde la URL
            $id_categoria = $_GET['id'];

            // Realiza una conexión a la base de datos (puedes usar tu propio archivo de conexión)
            include("conexion.php");

            // Realiza una consulta para obtener la información de la categoría específica
            $sql = "SELECT * FROM categorias WHERE id_categoria = $id_categoria";
            $result = mysqli_query($db, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                // Aquí puedes mostrar la información de la categoría
                echo '<h1>' . $row['nombre_cat'] . '</h1>';
            } else {
                echo "Categoría no encontrada.";
            }
        } else {
            echo "Identificador de categoría no proporcionado.";
        }
        ?>
    </div>
    <div class="container-fluid ">
        <div class="row g-1">
            <div class="col">
                <div class="card">
                    <img src="img-logo-atn.png" width="264" height="352" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">xd</p>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="card">
                    <img src="img-logo-atn.png" width="264" height="352" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">xd</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img-logo-atn.png" width="264" height="352" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">xd</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img-logo-atn.png" width="264" height="352" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">xd</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-3 ">
        <div class="row g-1">
            <div class="col">
                <div class="card">
                    <img src="img-logo-atn.png" width="264" height="352" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">xd</p>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="card">
                    <img src="img-logo-atn.png" width="264" height="352" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">xd</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img-logo-atn.png" width="264" height="352" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">xd</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img-logo-atn.png" width="264" height="352" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">xd</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-absolute bottom-0 start-50 translate-middle-x ">
    <nav aria-label="...">
        <ul class="pagination pagination-lg">
            <li class="page-item active" aria-current="page">
                <span class="page-link">1</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
        </ul>
    </nav>
    </div>
    <!--Footer-->
    <?php
    include('footer.php')
    ?>
</body>
<script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</html>