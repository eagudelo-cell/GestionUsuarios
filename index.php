<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Usuarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>📋 Lista de Usuarios</h2>

<a class="btn btn-create" href="crear.php">➕ Crear Usuario</a>

<table>
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
            <a class='btn btn-edit' href='editar.php?id={$row['id']}'>✏️ Editar</a>
            <a class='btn btn-delete' href='eliminar.php?id={$row['id']}'>🗑 Eliminar</a>
        </td>
    </tr>";
}
?>

</table>

</div>

</body>
</html>