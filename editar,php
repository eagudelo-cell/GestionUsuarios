<?php
include "db.php";

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM usuarios WHERE id=$id");
$user = $result->fetch_assoc();

if ($_POST) {
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];

    $conn->query("UPDATE usuarios SET 
        nombre='$nombre',
        cedula='$cedula',
        telefono='$telefono'
        WHERE id=$id");

    header("Location: index.php");
}
?>

<form method="POST">
    Nombre: <input type="text" name="nombre" value="<?php echo $user['nombre']; ?>"><br>
    Cédula: <input type="text" name="cedula" value="<?php echo $user['cedula']; ?>"><br>
    Teléfono: <input type="text" name="telefono" value="<?php echo $user['telefono']; ?>"><br>
    <button type="submit">Actualizar</button>
</form>