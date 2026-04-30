<?php
include "db.php";

// Guardar usuario cuando se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO usuarios (nombre, cedula, telefono)
            VALUES ('$nombre', '$cedula', '$telefono')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // vuelve al listado
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Crear Usuario</title>
</head>
<body>

<h2>Crear Usuario</h2>

<form method="POST">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Cédula:</label><br>
    <input type="text" name="cedula" required><br><br>

    <label>Teléfono:</label><br>
    <input type="text" name="telefono" required><br><br>

    <button type="submit">Guardar</button>
</form>

<br>
<a href="index.php">Volver</a>

</body>
</html>