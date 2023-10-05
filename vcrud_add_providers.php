<?php
include('conexion.php');
if (isset($_POST['agregar'])) {
    $nombre_prove = $_POST['nombre_prove'];
    $direccion_prove = $_POST['direccion_prove'];
    $telefono_prove = $_POST['telefono_prove'];
    $email_prove = $_POST['email_prove'];
    $cont = "0";

    $sql = "SELECT * FROM proveedores WHERE nombre_prove='$nombre_prove'";
    if (!$result = $db->query($sql)) {
        die('hay un error en la consulta');
    }
    while ($row = $result->fetch_assoc()) {
        //$id_usuario = stripslashes($row["id_usuario"]);
        $nnombre_prove = stripslashes($row["nombre_prove"]);
        $cont = $cont + 1;
    }
    if ($cont == "0") {
        mysqli_query($db, " INSERT INTO `proveedores` (`id_proveedor`, `nombre_prove`, `direccion_prove`, `telefono_prove`, `email_prove`) VALUES (null, '$nombre_prove', '$direccion_prove', '$telefono_prove', '$email_prove')");
        echo "¡Se insertaron los datos correctamente!";
    }
    if ($cont != "0") {
        echo "¡No se puede insertar la informacion!" . "<br>";
        echo "Error: " . "<br>" . mysqli_error($db);
    }
}
