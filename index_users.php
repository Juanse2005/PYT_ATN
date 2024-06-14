<?php
// Iniciar sesión
session_start();

// Establecer valores predeterminados para las variables de sesión si no están definidos
if (!isset($_SESSION["email"])) {
    $_SESSION["email"] = "";
}
if (!isset($_SESSION["usuario"])) {
    $_SESSION["usuario"] = "";
}
if (!isset($_SESSION["admin"])) {
    $_SESSION["admin"] = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img-logo-atn.png">
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <title>Inicio | ATN</title>
</head>

<body>
    <!--navbar-->
    <?php include('navbar_users.php') ?>
    <!-- Carrousel -->
    <?php include('content_index.php') ?>
    <!--Footer-->
    <?php include('footer.php') ?>
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
