<?php
        // Verificamos si se ha proporcionado el parámetro "id" en la URL
        if (isset($_GET['id_proveedor'])) {
            // Recibimos el identificador único de la categoría desde la URL
            $id_categoria = $_GET['id_proveedor'];

            // Realiza una conexión a la base de datos (puedes usar tu propio archivo de conexión)
            include("conexion.php");

            // Realiza una consulta para obtener la información de la categoría específica
            $sql = "SELECT proveedores WHERE id_proveedor = $id_proveedor";
            $result = mysqli_query($db, $sql);
        }
        ?>