<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    $conn = new mysqli("localhost", "root", "", "ejemplo_db");

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO producto (nombre, precio) VALUES (?, ?)");
    $stmt->bind_param("sd", $nombre, $precio);

    if ($stmt->execute()) {
        echo "Producto registrado con éxito.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
