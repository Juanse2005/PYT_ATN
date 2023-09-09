<?php
    session_start();
    $_SESSION["email"] = "0";
    $_SESSION["usuario"] = "0";
    $_SESSION["admin"] = "0";
    header("location: index.php")
    ?>