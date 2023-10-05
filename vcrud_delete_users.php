<?php
        // Verificamos si se ha proporcionado el parámetro "id" en la URL
        if (isset($_GET['id'])) {
            // Recibimos el identificador único de la categoría desde la URL
            $id_usuario = $_GET['id'];

            // Realiza una conexión a la base de datos (puedes usar tu propio archivo de conexión)
            include("conexion.php");

            // Realiza una consulta para obtener la información de la categoría específica
            $sql = "DELETE FROM usuarios WHERE id_usuario = $id_usuario";
            $result = mysqli_query($db, $sql);

            if ($db->query($sql) === TRUE) {
                echo '<h1>' . 'Ha sido eliminado' . '</h1>';
            } else {
                echo "No encontrado";
            }
        }
        ?>