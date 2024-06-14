<?php
session_start();
class Usuario
{
    public function validar($email, $password)
    {
        include("conexion.php");
        
        // Buscar al usuario por su correo electrónico utilizando una sentencia preparada
        $sql = "SELECT * FROM usuarios WHERE email=?";
        if ($stmt = $db->prepare($sql)) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($row = $result->fetch_assoc()) {
                // Verificar la contraseña utilizando password_verify
                if (password_verify($password, $row['contraseña'])) {
                    $_SESSION["email"] = $email;
                    
                    // Obtener el rol del usuario desde la base de datos
                    $sql_rol = "SELECT descripcion FROM roles WHERE id_rol=?";
                    if ($stmt_rol = $db->prepare($sql_rol)) {
                        $stmt_rol->bind_param("i", $row['id_rol']);
                        $stmt_rol->execute();
                        $result_rol = $stmt_rol->get_result();
                        
                        if ($row_rol = $result_rol->fetch_assoc()) {
                            $_SESSION["rol"] = $row_rol["descripcion"];
                        }
                    }
                    
                    // Redirigir al usuario según su rol
                    if ($_SESSION["rol"] == "admin") {
                        header("location: dashboard.php");
                    } elseif ($_SESSION["rol"] == "usuario") {
                        header("location: index_users.php");
                    } else {
                        // Si el rol no está definido, redirigir a una página de error
                        header("location: error_page.php");
                    }
                    exit();
                }
            }
        }
        
        // Si llegamos aquí, las credenciales son incorrectas
       echo("ERROR");
        exit();
    }
}

$usuario = new Usuario();
$usuario->validar($_POST["email"], $_POST["password"]);
?>
