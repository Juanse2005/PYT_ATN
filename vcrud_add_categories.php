<?php
include('conexion.php');
if (isset($_POST['agregar'])) {
    $nombre_cat = $_POST['nombre_cat'];
    $cont = "0";

    $sql = "SELECT * FROM categorias WHERE nombre_cat='$nombre_cat'";
    if (!$result = $db->query($sql)) {
        die('hay un error en la consulta');
    }
    while ($row = $result->fetch_assoc()) {
        $nnombre_cat = stripslashes($row["nombre_cat"]);
        $cont = $cont + 1;
    }
    if ($cont == "0") {
        mysqli_query($db, " INSERT INTO `categorias` (`id_categoria`, `nombre_cat`) VALUES (NULL, '$nombre_cat')");
        echo "¡Se insertaron los datos correctamente!";
    }
    if ($cont != "0") {
        echo "¡No se puede insertar la informacion!" . "<br>";
        echo "Error: " . "<br>" . mysqli_error($db);
    }
}