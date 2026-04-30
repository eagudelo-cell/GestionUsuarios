<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Usuarios</title>
</head>
<body>

<h2>Lista de Usuarios</h2>
<a href="crear.php">Crear Usuario</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Cédula</th>
        <th>Teléfono</th>
        <th>Acciones</th>
    </tr>

<?php
$result = $conn->query("SELECT * FROM usuarios");

while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['nombre']}</td>
        <td>{$row['cedula']}</td>
        <td>{$row['telefono']}</td>
        <td>
            <a href='editar.php?id={$row['id']}'>Editar</a>
            <a href='eliminar.php?id={$row['id']}'>Eliminar</a>
        </td>
    </tr>";
}
?>

</table>

</body>
</html>