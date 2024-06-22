<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <link rel="icon" type="image/x-icon" href="img-logo-atn.png">
    <title>Administrador | ATN</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: auto;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>
    <!--Navbar-->
    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="dashboard.php"><img src="img-logo-atn.png" height="45">ATN</a>

        <ul class="navbar-nav flex-row d-md-none">
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="true" aria-label="Toggle search">
                    <svg class="bi">
                        <use xlink:href="#search" />
                    </svg>
                </button>
            </li>
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                    <svg class="bi">
                        <use xlink:href="#list" />
                    </svg>
                </button>
            </li>
        </ul>

        <div id="navbarSearch" class="navbar-search w-100 collapse">
            <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
        </div>
    </header>
    <!--Sidebar-->
    <?php
    include("sidebar_dash.php");
    ?>

    <main class=" container-flex col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Productos</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Agregar</button>
                </div>

            </div>
        </div>
        <!--Contenido-->
        <table class="table table-bordered">
            <?php
            include("conexion.php");
            $sql = "SELECT * FROM productos";
            foreach ($db->query($sql) as $row) {
                echo '<tr class="table-light">';
                echo '<th> ID </th>';
                echo '<th> Codigo </th>';
                echo '<th> Nombre del producto </th>';
                echo '<th> Descripcion </th>';
                echo '<th> Stock </th>';
                echo '<th> Precio </th>';
                echo '<th> Descuento </th>';
                echo '<th> Estado </th>';
                echo '<th> Imagen </th>';
                echo '<th> Proveedor </th>';
                echo '<th> Categoria </th>';
                echo '<th> Tipo de producto </th>';
                //echo '<th> Modificar </th>';
                echo '<th> Eliminar </th>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>' . $row['id_producto'] . '</td>';
                echo '<td>' . $row['codigo_prod'] . '</td>';
                echo '<td>' . $row['nombre_prod'] . '</td>';
                echo '<td>' . $row['descripcion_prod'] . '</td>';
                echo '<td>' . $row['stock_prod'] . '</td>';
                echo '<td>' . $row['precio_prod'] . '</td>';
                echo '<td>' . $row['descuento_prod'] . '</td>';
                echo '<td>' . $row['estado_prod'] . '</td>';
                echo '<td> img.jpg </td>';
                echo '<td>' . $row['id_proveedor'] . '</td>';
                echo '<td>' . $row['id_categoria'] . '</td>';
                echo '<td>' . $row['tipo_producto'] . '</td>';
                //echo '<td>' . '<a class="btn btn-warning">Modificar </a> ' . '</td>';
                echo '<td>' . '<a class="btn btn-danger" href="vcrud_delete_products.php?id=' . $row["id_producto"] . '"> Eliminar </a>' . '</td>';
                echo '</tr>';
            }
            ?>
        </table>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Agregar producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form name="agregar" action="vcrud_add_products.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Codigo del producto</label>
                        <input type="text" class="form-control" name="codigo_prod" required>
                        <label class="form-label">Nombre del producto</label>
                        <textarea class="form-control" name="nombre_prod" required></textarea>
                        <label class="form-label">Descripcion</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="descripcion_prod" required></textarea>
                            <label for="floatingTextarea2">Redacta una breve descripcion</label>
                        </div>
                        <label class="form-label">Stock</label>
                        <input type="text" class="form-control" name="stock_prod" required>
                        <label class="form-label">Precio</label>
                        <input type="text" class="form-control" name="precio_prod" required>
                        <label class="form-label">Descuento</label>
                        <input type="text" class="form-control" name="descuento_prod" required>
                        <label class="form-label">Estado</label>
                        <input type="text" class="form-control" name="estado_prod" required>
                        <label class="form-label">Imagen</label>
                        <input type="file" class="form-control" name="imagen_prod" required>
                        <label class="form-label">Proveedor</label>
                        <select class="form-select" aria-label="Default select example" name="id_proveedor" required>
                            <?php
                            include("conexion.php");
                            $sql = "SELECT * FROM proveedores";
                            foreach ($db->query($sql) as $row) {
                                echo '<option value="' . $row['id_proveedor'] . '" >' . $row['nombre_prove'] . '</option>';
                            }
                            ?>
                        </select>
                        <label class="form-label">Categoria</label>
                        <select class="form-select" aria-label="Default select example" name="id_categoria" required>
                            <?php
                            include("conexion.php");
                            $sql = "SELECT * FROM categorias";
                            foreach ($db->query($sql) as $row) {
                                echo '<option value="' . $row['id_categoria'] . '" >' . $row['nombre_cat'] . '</option>';
                            }
                            ?>
                        </select>
                        <label class="form-label">Tipo de producto</label>
                        <select class="form-select" aria-label="Default select example" name="tipo_producto" required>
                            <?php
                            include("conexion.php");
                            $sql = "SELECT DISTINCT tipo_producto FROM tallas";
                            foreach ($db->query($sql) as $row) {
                                echo '<option value="' . $row['tipo_producto'] . '" >' . $row['tipo_producto'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <button class="btn btn-primary" name="agregar" value="agregar" type="submit">Agregar</button>
                </form>
            </div>
        </div>
    </main>
    <!--Iconos-->
</body>

</html>