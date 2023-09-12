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
    <br><br><br>
    <div class="container-flex p-3 ">
        <div class="row row-cols-auto ">
            <div class="col">
                <img src="prenda3.png" class="img" width="400" height="480" alt="...">
            </div>
            <div class="col">
                <img src="prenda4.png" class="img" width="400" alt="...">
            </div>
            <div class="col-4">
                <p class="h4 text-center mt-5">Camiseta con bordado comic </p>
                <p class="h6 text-center">AngelsVutton </p>
                <br>
                <p class="h5 text-center">$70.000 COP</p>
                <br>
                <div class="position-relative py-2 px-4">
                    <button class="btn btn-primary position-absolute start-50 translate-middle dropdown-toggle">Seleccione su talla</button>
                </div>
                <br><br>
                <div class="position-relative py-2 px-4">
                    <button class="btn btn-primary position-absolute start-50 translate-middle">Añadir al carrito</button>
                </div>
                <br><br>
                <p class="text-center">Camiseta con bordado comic oversize, manga corta excelente calidad.</p>
            </div>
        </div>
        <div class="row row-cols-auto">
            <div class="col">
                <img src="prenda3_3.png" class="img" width="400" alt="...">
            </div>
            <div class="col">
                <img src="prenda4_4.png" class="img" width="400" alt="...">
            </div>
            <div class="col-4 border-top">
                <p class="mt-5">Correo:</p>
                <p class="mt-5">Numero de contacto:</p>
            </div>
        </div>

    </div>

    <!--Footer-->
    <?php
    include('footer.php')
    ?>

</body>
<script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</html>