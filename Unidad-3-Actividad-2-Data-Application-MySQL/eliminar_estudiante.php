<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM estudiantes WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error al eliminar el registro: " . $conn->error;
    }
} else {
    echo "ID de estudiante no especificado";
}
$conn->close();
?>
