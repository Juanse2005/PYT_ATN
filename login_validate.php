<?php
session_start();
class USUARIO
{
    public function validar($email, $password)
    {
        include("conexion.php");
        // Buscar al usuario por su correo electrónico
        $sql = "SELECT * FROM usuarios WHERE email='$email'";

        if (!$result = $db->query($sql)) {
            die('Hay un error ocurriendo en la consulta o datos no encontrados!!');
        }

        if ($row = $result->fetch_assoc()) {
            // Verificar la contraseña utilizando password_verify
            if (password_verify($password, $row['contraseña'])) {
                $_SESSION["email"]=$email;
                header("location: vista_permisos.php");
            } else {
                echo '<span>El usuario y/o clave son incorrectas, vuelva a intentarlo.</span>';
            }
        } else {
            echo '<span>El usuario y/o clave son incorrectas, vuelva a intentarlo.</span>';
        }
    }
}

$final = new USUARIO();
$final->validar($_POST["email"], $_POST["password"]);
