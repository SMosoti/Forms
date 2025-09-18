<?php
// Database configuration
$host = 'localhost';
$port = '5432';
$dbname = 'PatPress';
$username = 'root';
$password = 'Mokoro111*';

try {
    // Create connection
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $username, $password);
    
    // Set PDO attributes
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    echo "Connected to PostgreSQL successfully!";
    
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>