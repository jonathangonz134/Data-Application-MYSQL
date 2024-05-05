<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Notas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <p>Integrantes: <br> Jonathan Guillermo González Henríquez, Código: ISNP100522 <br> Ingrid Esther Martinez Sorto, Código: ISNP138721</p>
        <h1>Control de Notas de Estudiantes Virtuales</h1>
        <form action="procesar_formulario.php" method="POST">
            <label for="codigo">Código:</label>
            <input type="text" id="codigo" name="codigo" required><br>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required><br>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad"><br>
            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select><br>
            <label for="nota1">Examen 1:</label>
            <input type="number" id="nota1" name="nota1"><br>
            <label for="nota2">Examen 2:</label>
            <input type="number" id="nota2" name="nota2"><br>
            <label for="nota3">Actividad:</label>
            <input type="number" id="nota3" name="nota3"><br>
            <input type="submit" value="Registrar">
        </form>

        <?php include('listar_estudiantes.php'); ?>
    </div>
</body>
</html>

