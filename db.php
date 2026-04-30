<?php
$host = "mysql-edwinagudelo.alwaysdata.net";
$user = "edwinagudelo";
$password = "clase1234";
$db = "edwinagudelo_usuarios";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>