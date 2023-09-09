<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img-logo-atn.png">
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <title>Inicio - ATN</title>
</head>

<body>
<?php
    session_start();
    $_SESSION["email"] = "0";
    $_SESSION["usuario"] = "0";
    $_SESSION["admin"] = "0";
    ?>
    <!--navbar-->
    <?php
    include('navbar_index_users.php')
    ?>
    <!-- Carrousel -->
    <?php
    include('content_index.php')
    ?>
    <!--Footer-->
    <?php
    include('footer.php')
    ?>
</body>
<script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</html>