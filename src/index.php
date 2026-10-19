<?php
$host = getenv('DB_HOST');
$db   = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');

echo "<h1>¡Hola Mundo!</h1>";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    echo "<p style='color:green'>✔ Conexión exitosa a la base de datos MySQL.</p>";

    // Crear tabla y registrar cada visita
    $pdo->exec("CREATE TABLE IF NOT EXISTS visitas (
        id INT AUTO_INCREMENT PRIMARY KEY,
        fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");
    $pdo->exec("INSERT INTO visitas () VALUES ()");

    $total = $pdo->query("SELECT COUNT(*) FROM visitas")->fetchColumn();
    $version = $pdo->query("SELECT VERSION()")->fetchColumn();

    echo "<p>Versión de MySQL: <strong>" . htmlspecialchars($version) . "</strong></p>";
    echo "<p>Total de visitas registradas en la BD: <strong>$total</strong></p>";
} catch (PDOException $e) {
    echo "<p style='color:red'>✘ Error de conexión: " . htmlspecialchars($e->getMessage()) . "</p>";
}
