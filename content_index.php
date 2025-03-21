<!--Carrusel e imagenes-->
<div class="container-flex mt-3 bg-gray">
    <br><br>
    <div class="container-flex p-3">
        <div class="row ">
            <div class="col">
                <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner m-3">
                        <div class="carousel-item active">
                            <img src="img-carousel1.png" class="d-block" height="425px" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img src="img-carousel2.jpg" class="d-block" height="425px" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img src="img-carousel3.png" class="d-block" height="425px" width="100%" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col p-3">
                <div class="container-flex">
                    <img src="img-promo2.png" height="200px" width="100%" alt="">
                </div>
                <br>
                <div class="col">
                    <div>
                        <img src="img-promo.png" height="200px" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Tarjetas-->
<div class="container-flex bg-light">
    <div class="text-center">
        <p class="fs-2 p-lg-4 h5">Artículos recientes</p>
    </div>

    <div class="container mt-5">
        <div class="row g-1">
            <?php
            include ("conexion.php");

            // Consulta SQL para obtener los primeros 6 productos (puedes ajustar el número según tus necesidades)
            $sql_first_products = "SELECT * FROM productos ORDER BY id_producto DESC LIMIT 3";
            $result_first_products = mysqli_query($db, $sql_first_products);

            if ($result_first_products && mysqli_num_rows($result_first_products) > 0) {
                while ($row_producto = mysqli_fetch_assoc($result_first_products)) {
                    echo '<div class="col-md-4">';
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
                echo "No se encontraron productos recientes.";
            }
            ?>
        </div>
    </div>
</div>

<div class="container-flex mt-3 px-4">
    <img src="img-carousel4.png" width="100%" class="img-fluid mt-4" alt="...">
</div>
</div>
<!--Mini carrusel en container-->
<div class="container-flex mt-5 bg-gray text-center">
    <div class="row g-0">
        <div class="col p-2">
            <p class="fs-2 p-lg-5 text-uppercase">Articulos destacados</p>
        </div>
        <div class="col">
            <div class="container">
                <div id="carouselExample" class="carousel slide carousel-dark">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <table border="2">
                                <tr>
                                    <a href="product_detail.php?id=7" class="text-decoration-none h6">
                                        <img src="tenis.png" class=" w-25" alt="...">
                                    </a>
                                    <a href="product_detail.php?id=3" class="text-decoration-none h6">
                                        <img src="chaqueta.png" class=" w-25" alt="...">
                                    </a>
                                    <a href="product_detail.php?id=9" class="text-decoration-none h6">
                                        <img src="gorra.png" class=" w-25" alt="...">
                                    </a>
                                </tr>
                            </table>
                        </div>
                        <div class="carousel-item">
                            <table border="2">
                                <tr>
                                    <a href="product_detail.php?id=13" class="text-decoration-none h6">
                                        <img src="manilla.png" class=" w-25" alt="...">
                                    </a>
                                    <a href="product_detail.php?id=11" class="text-decoration-none h6">
                                        <img src="bolso.png" class=" w-25" alt="...">
                                    </a>
                                    <a href="products.php?id=1" class="text-decoration-none h6">
                                        <img src="jogger.png" class=" w-25" alt="...">
                                    </a>
                                </tr>
                            </table>
                        </div>
                        <div class="carousel-item">
                            <table border="2">
                                <tr>
                                    <a href="product_detail.php?id=8" class="text-decoration-none h6">
                                        <img src="carriel.png" class=" w-25" alt="...">
                                    </a>
                                    <a href="product_detail.php?id=10" class="text-decoration-none h6">
                                        <img src="gafas.png" class=" w-25" alt="...">
                                    </a>
                                    <a href="product_detail.php?id=6" class="text-decoration-none h6">
                                        <img src="vestido3.png" class=" w-25" alt="...">
                                    </a>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>