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

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Usuarios</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#login-offcanvasRight" aria-controls="offcanvasRight">Agregar</button>
                </div>
            </div>
        </div>
        <!--Content-->
        <Table class="table table-bordered">
            <?php
            include ("conexion.php");
            // Mostrar encabezados de tabla fuera del bucle
            echo '<tr class="table-light">';
            echo '<th> ID </th>';
            echo '<th> Primer nombre </th>';
            echo '<th> Segundo Nombre </th>';
            echo '<th> Primer Apellido </th>';
            echo '<th> Segundo Apellido </th>';
            echo '<th> Email </th>';
            echo '<th> Rol </th>';
            echo '<th> Eliminar </th>';
            echo '</tr>';

            $sql = "SELECT u.*, r.descripcion as rol FROM usuarios u JOIN roles r ON u.id_rol = r.id_rol";
            foreach ($db->query($sql) as $row) {
                echo '<tr>';
                echo '<td>' . $row['id_usuario'] . '</td>';
                echo '<td>' . $row['p_nombre'] . '</td>';
                echo '<td>' . $row['s_nombre'] . '</td>';
                echo '<td>' . $row['p_apellido'] . '</td>';
                echo '<td>' . $row['s_apellido'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['rol'] . '</td>';
                echo '<td>' . '<a class="btn btn-danger" href="vcrud_delete_users.php?id=' . $row["id_usuario"] . '"> Eliminar </a>' . '</td>';
                echo '</tr>';
            }
            ?>
        </table>
        <!-- Login Offcanvas -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="login-offcanvasRight"
            aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Agregar usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form name="agregar" action="vcrud_add_users.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Primer nombre</label>
                        <input type="text" class="form-control" name="p_nombre" required>
                        <label class="form-label">Segundo nombre</label>
                        <input type="text" class="form-control" name="s_nombre">
                        <label class="form-label">Pirmer Apellido</label>
                        <input type="text" class="form-control" name="p_apellido" required>
                        <label class="form-label">Segundo apellido</label>
                        <input type="text" class="form-control" name="s_apellido" required>
                        <label class="form-label">Email</label >
                        <input type="text" class="form-control" name="email" required>
                        <label class="form-label">Contraseña</label>
                        <input type="text" class="form-control" name="contraseña" required>
                        <label class="form-label">Rol</label>
                        <select class="form-select" aria-label="Default select example" name="id_rol" required>
                            <?php
                            include("conexion.php");
                            $sql = "SELECT * FROM roles";
                            foreach ($db->query($sql) as $row) {
                                echo '<option value="' . $row['id_rol'] . '" >' . $row['descripcion'] . '</option>';
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