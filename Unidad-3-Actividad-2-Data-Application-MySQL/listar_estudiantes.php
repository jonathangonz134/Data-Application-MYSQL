<?php
include('config.php');

$sql = "SELECT id, codigo, nombre, apellidos, edad, sexo, nota1, nota2, nota3, promedio FROM estudiantes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Código</th><th>Nombre</th><th>Apellidos</th><th>Edad</th><th>Sexo</th><th>Nota 1</th><th>Nota 2</th><th>Nota 3</th><th>Promedio</th><th>Acciones</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["codigo"]."</td>";
        echo "<td>".$row["nombre"]."</td>";
        echo "<td>".$row["apellidos"]."</td>";
        echo "<td>".$row["edad"]."</td>";
        echo "<td>".$row["sexo"]."</td>";
        echo "<td>".$row["nota1"]."</td>";
        echo "<td>".$row["nota2"]."</td>";
        echo "<td>".$row["nota3"]."</td>";
        echo "<td>".$row["promedio"]."</td>";
        echo "<td>";
        echo "<a href='editar_estudiante.php?id=".$row["id"]."'>Editar</a> | ";
        echo "<a href='eliminar_estudiante.php?id=".$row["id"]."'>Eliminar</a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados";
}
$conn->close();

?>
