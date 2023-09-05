<?php
include("conexion.php");
$sql = "SELECT * FROM usuarios";
foreach ($db->query($sql) as $row) {
    echo '<table border="1">';
    echo '<tr>';
    echo '<th> ID </th>';
    echo '<th> Primer nombre </th>';
    echo '<th> Segundo Nombre </th>';
    echo '<th> Primer Apellido </th>';
    echo '<th> Segundo Apellido </th>';
    echo '<th> ROL </th>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>' . $row['id_usuario'] . '</td>';
    echo '<td>' . $row['p_nombre'] . '</td>';
    echo '<td>' . $row['s_nombre'] . '</td>';
    echo '<td>' . $row['p_apellido'] . '</td>';
    echo '<td>' . $row['s_apellido'] . '</td>';
    echo '<td>' . $row['id_rol'] . '</td>';
    echo '</tr>';
    echo '</table>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD USUARIOS</title>
</head>

<body>
    <table>
        <h1>USUARIOS</h1>
        <tr>
            <?php echo $sql?>
            <?php echo $row['s_nombre']; ?>
        </tr>
    </table>

</body>

</html>