<?php
$servername = "localhost";
$username = "ugb";
$password = "Ugb2024";
$dbname = "universidad";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
