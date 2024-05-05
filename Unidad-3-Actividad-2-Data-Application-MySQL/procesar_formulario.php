<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST["codigo"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    $promedio = ($nota1 + $nota2 + $nota3) / 3;

    $sql = "INSERT INTO estudiantes (codigo, nombre, apellidos, edad, sexo, nota1, nota2, nota3, promedio)
    VALUES ('$codigo', '$nombre', '$apellidos', '$edad', '$sexo', '$nota1', '$nota2', '$nota3', '$promedio')";

    if ($conn->query($sql) === TRUE) {
        echo "<p></p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();


include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesando Formulario</title>
</head>
<body>
    <h1>**REGISTRO EXITOSO**.</h1>
    

    <!-- Agregar el botón para regresar a index.php -->
    <form action="index.php" method="GET">
        <input type="submit" value="Regresar a Inicio">
    </form>
</body>
</html>


