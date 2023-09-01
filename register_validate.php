<?php
Class Registro
{
    public function validar($p_nombre, $s_nombre,$p_apellido, $s_apellido,$email, $password)
    {
        $cont= "0";
        include ("conexion.php");
        mysqli_query($db,"INSERT INTO usuarios (p_nombre, s_nombre,p_apellido, s_apellido,email, contraseña) VALUES (NULL,'$p_nombre', '$s_nombre','$p_apellido', '$s_apellido','$email','$password')");
        if (!$result = $db->query($sql)){
            die('Hay un error ocurriendo en la consulta o datos no encontrados!! ['. $db->error .']');
        }
        while ($row = $result->fetch_assoc())
        {
            $cont=$cont+1;
        }
        if ($cont=="0")
        { 
            header ("location: index.php");
            echo '<span>USTED SE REGISTRO</span>';
          
        }
        if ($cont!="0")
        {
            $_SESSION ["email"]=$documento;
            header ("location: index_users.php");
        }
    }
   }
$final= new Registro();
$final->validar($_POST["p_nombre"],$_POST["s_nombre"],$_POST["p_apellido"],$_POST["s_apellido"],$_POST["email"],$_POST["password"])
?>