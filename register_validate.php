<?php
include('conexion.php');
if (isset($_POST['register'])) {
    $p_nombre = $_POST['p_nombre'];
    $s_nombre = $_POST['s_nombre'];
    $p_apellido = $_POST['p_apellido'];
    $s_apellido = $_POST['s_apellido'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    $encrypt = password_hash($password, PASSWORD_DEFAULT);
    $cont = "0";

    $sql = "SELECT * FROM usuarios WHERE email='$email'";
    if (!$result = $db->query($sql)) {
        die('hay un error en la consulta');
    }
    while ($row = $result->fetch_assoc()) {
        //$id_usuario = stripslashes($row["id_usuario"]);
        $eemail = stripslashes($row["email"]);
        $cont = $cont + 1;
    }
    if ($c_password == $password) {
        if ($cont == "0") {
            mysqli_query($db, " INSERT INTO `usuarios` (`id_usuario`, `p_nombre`, `s_nombre`, `p_apellido`, `s_apellido`, `email`, `contraseña`, `id_rol`) VALUES (null, '$p_nombre', '$s_nombre', '$p_apellido', '$s_apellido', '$email', '$encrypt','2')");
            echo "¡Se insertaron los datos correctamente!";
        }
    }
    else {
        echo "Confirmacion de contrasena incorrecta";
    }
    if ($cont != "0") {
        echo "¡No se puede insertar la informacion!" . "<br>";
        echo "Error: " . "<br>" . mysqli_error($db);
    }
}
