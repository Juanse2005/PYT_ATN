<?php
include('conexion.php');

if (isset($_POST['agregar'])) {
    $p_nombre = $_POST['p_nombre'];
    $s_nombre = $_POST['s_nombre'];
    $p_apellido = $_POST['p_apellido'];
    $s_apellido = $_POST['s_apellido'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $id_rol = $_POST['id_rol'];

    // Encriptar la contraseña
    $hash = password_hash($contraseña, PASSWORD_DEFAULT);

    $sql = "SELECT * FROM usuarios WHERE email='$email'";
    $result = $db->query($sql);
    if (!$result) {
        die('Error en la consulta: ' . $db->error);
    }
    if ($result->num_rows == 0) {
        // Utilizar la contraseña encriptada en la consulta de inserción
        $sql_insert = "INSERT INTO usuarios (p_nombre, s_nombre, p_apellido, s_apellido, email, contraseña, id_rol)  
                       VALUES ('$p_nombre', '$s_nombre', '$p_apellido', '$s_apellido', '$email', '$hash', '$id_rol')";
        if ($db->query($sql_insert) === TRUE) {
            echo "¡Se insertaron los datos correctamente!";
        } else {
            echo "Error al insertar los datos: " . $db->error;
        }
    } else {
        echo "¡No se puede insertar la información! Ya existe el correo registrado.";
    }
}

$db->close();
?>
