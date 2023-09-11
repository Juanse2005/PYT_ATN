    <!--Imagen del navbar-->
    <nav class="navbar navbar-expand-lg bg-light justify-content-between fixed-top">
        <a class="navbar-brand" href="index_users.php">
            <img src="img-logo-atn-02.png" width="90" height="70" class="d-inline-block" alt="">
            ATN
        </a>
        <!--Menu para dispositivos moviles-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--Form del buscador-->
        <div class="collapse navbar-collapse">
            <form class="d-flex" action="products.php" method="post">
                <input class="form-control-nav" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
        <!--Carrito de compras-->
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto my-2 my-lg-0 " style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a href="" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-shopping-cart" aria-controls="offcanvasRight"><img src="img-shopping.png" height="50"></a>
                </li>
                <!--Categorias-->
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-categories" aria-controls="offcanvasRight">
                        Categorias
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active">
                        Bienvendio usuario
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Offcanvas shopping cart -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-shopping-cart" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Carrito de compras</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            ...
        </div>
    </div>

    <!-- Offcanvas categories -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-categories" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Categorias</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <?php
            include("conexion.php");
            $sql = "SELECT * FROM categorias";
            $result = mysqli_query($db, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id_categoria = $row['id_categoria'];
                    $nombre_categoria = $row['nombre_cat'];
                    echo '<p><a href="products.php?id=' . $id_categoria . '" class="h5 text-decoration-none">' . $nombre_categoria . '</a></p>';
                }
            } else {
                echo "No se encontraron resultados.";
            }
            ?>

        </div>
    </div>