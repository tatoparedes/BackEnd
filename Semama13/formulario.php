<!DOCTYPE html>
<html>
<head>
    <title>Registrar Producto</title>
</head>
<body>
    <?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=ejemplo_db", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insertar si hay POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $stmt = $conn->prepare("INSERT INTO producto (nombre, precio) VALUES (:nombre, :precio)");
        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':precio', $_POST['precio']);
        $stmt->execute();
    }

    // Mostrar productos
    echo "<h2>Lista de Productos</h2>";
    echo "<table border='1'><tr><th>ID</th><th>Nombre</th><th>Precio</th></tr>";

    $stmt = $conn->query("SELECT * FROM producto");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>{$row['idProducto']}</td><td>{$row['nombre']}</td><td>{$row['precio']}</td></tr>";
    }
    echo "</table>";

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
    <h2>Formulario de Producto</h2>
    <form method="post">
        <label>Nombre del producto:</label><br>
        <input type="text" name="nombre"><br><br>
        <label>Precio:</label><br>
        <input type="number" name="precio" step="0.01"><br><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>