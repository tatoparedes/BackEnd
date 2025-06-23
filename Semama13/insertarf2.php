<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    try {
        $conn = new PDO("mysql:host=localhost;dbname=ejemplo_db", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO productos (nombre, precio) VALUES (:nombre, :precio)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':precio', $precio);

        $stmt->execute();
        echo "Producto registrado con éxito.";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
}
?>
