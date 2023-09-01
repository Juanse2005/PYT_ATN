<?php
   class USUARIO
   {
    public function validar($email, $password)
    {
        $cont= "0";
        include ("conexion.php");
        $sql = "SELECT * FROM usuarios WHERE email='$email' and contraseña='$password'";
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
            echo '<span>El usuario y/o clave son incorrectas, vuelva a intentarlo.</span>';
          
        }
        if ($cont!="0")
        {
            $_SESSION ["email"]=$documento;
            header ("location: index_users.php");
        }
    }
   }
$final= new USUARIO();
$final->validar($_POST["email"],$_POST["password"],)
?>