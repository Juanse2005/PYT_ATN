<?php
session_start();
include("conexion.php");
$email=$_SESSION["email"];

        $sql = "SELECT * FROM usuarios where email='$email'";
        while (!$result = $db->query($sql)) {
            die('Hay un error ocurriendo en la consulta o datos no encontrados!!');
        }

        if ($row = $result->fetch_assoc()) {
            $eeemail=stripslashes($row["email"]);
            $iid_rol=stripslashes($row["id_rol"]);
            if ($iid_rol=="1") {
            echo "<a href='index_users.php'> Administrador </a> <br>";
            $_SESSION["admin"]="1";
            } 
            if ($iid_rol=="2") {
                echo "<a href='index_users.php'> usuario </a>";
                $_SESSION["usuario"]="1";
            }
        }

echo "<a href='salir.php'>Cerrar sesion </a>";