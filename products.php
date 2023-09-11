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
                <div class="card" style="width: 100%; height: 100%">
                    <a href="index.php" class="text-decoration-none h6">
                        <div id="uno" class="carousel carousel-dark slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="prenda1.png" class="card-img-top" style="width: 100%; height: 400px;" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="prenda2.png" style="width: 100%; height: 400px;" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#uno" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#uno" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Camisa de mesclilla con botones</h5>
                            <p class="card-text">$150.000 COP</p>
                    </a>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="card" style="width: 100%; height: 100%">
                <a href="index.php" class="text-decoration-none h6">
                    <div id="dos" class="carousel carousel-dark slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="prenda3.png" class="card-img-top" style="width: 100%; height: 400px;" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="prenda4.png" style="width: 100%; height: 400px;" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#dos" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#dos" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Camiseta con bordado comic</h5>
                        <p class="card-text">$70.000 COP</p>
                </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 100%; height: 100%">
            <a href="index.php" class="text-decoration-none h6">
                <div id="tres" class="carousel carousel-dark slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="prenda1.png" class="card-img-top" style="width: 100%; height: 400px;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="prenda2.png" style="width: 100%; height: 400px;" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#tres" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#tres" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Camisa de mesclilla con botones</h5>
                    <p class="card-text">$150.000 COP</p>
            </a>
        </div>
    </div>
    </div>
    <div class="col">
    <div class="card" style="width: 100%; height: 100%">
                <a href="index.php" class="text-decoration-none h6">
                    <div id="cuatro" class="carousel carousel-dark slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="prenda3.png" class="card-img-top" style="width: 100%; height: 400px;" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="prenda4.png" style="width: 100%; height: 400px;" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#cuatro" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#cuatro" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Camiseta con bordado comic</h5>
                        <p class="card-text">$7
                            0.000 COP</p>
                </a>
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
    <nav aria-label="...">
        <ul class="pagination pagination-lg">
            <li class="page-item active" aria-current="page">
                <span class="page-link">1</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
        </ul>
    </nav>|
    </div>
    <!--Footer-->
    <?php
    include('footer.php')
    ?>
</body>
<script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</html>