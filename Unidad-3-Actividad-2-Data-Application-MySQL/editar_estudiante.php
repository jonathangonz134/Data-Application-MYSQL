<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $codigo = $_POST["codigo"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    $promedio = ($nota1 + $nota2 + $nota3) / 3;

    $sql = "UPDATE estudiantes SET codigo='$codigo', nombre='$nombre', apellidos='$apellidos', edad='$edad', sexo='$sexo', nota1='$nota1', nota2='$nota2', nota3='$nota3', promedio='$promedio' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
}

$id = $_GET["id"];
$sql = "SELECT * FROM estudiantes WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Estudiante no encontrado";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Estudiante</title>
</head>
<body>
    <h1>Editar Estudiante</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="codigo">Código:</label>
        <input type="text" id="codigo" name="codigo" value="<?php echo $row['codigo']; ?>" required><br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required><br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" value="<?php echo $row['apellidos']; ?>" required><br>
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" value="<?php echo $row['edad']; ?>"><br>
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo">
            <option value="Masculino" <?php if($row['sexo'] == 'Masculino') echo 'selected'; ?>>Masculino</option>
            <option value="Femenino" <?php if($row['sexo'] == 'Femenino') echo 'selected'; ?>>Femenino</option>
        </select><br>
        <label for="nota1">Examen 1:</label>
        <input type="number" id="nota1" name="nota1" value="<?php echo $row['nota1']; ?>"><br>
        <label for="nota2">Examen 2:</label>
        <input type="number" id="nota2" name="nota2" value="<?php echo $row['nota2']; ?>"><br>
        <label for="nota3">Actividad:</label>
        <input type="number" id="nota3" name="nota3" value="<?php echo $row['nota3']; ?>"><br>
        <input type="submit" value="Guardar Cambios">
    </form>
</body>
</html>