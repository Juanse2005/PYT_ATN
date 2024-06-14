<?php
 include("conexion.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_proveedor = $_POST["id_proveedor"];
        $nombre_prove = $_POST["nombre_prove"];
        $direccion_prove = $_POST["direccion_prove"];
        $telefono_prove = $_POST["telefono_prove"];
        $email_prove = $_POST["email_prove"];

        // Ejecutar la consulta para actualizar los datos del proveedor
        $sql = "UPDATE proveedores SET nombre_prove='$nombre_prove', direccion_prove='$direccion_prove', telefono_prove='$telefono_prove', email_prove='$email_prove' WHERE id_proveedor='$id_proveedor'";

        if ($db->query($sql) === TRUE) {
            echo "Proveedor actualizado correctamente";
        } else {
            echo "Error al actualizar el proveedor: " . $db->error;
        }
    }

    $db->close();
?>
