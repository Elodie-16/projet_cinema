<?php
// config.example.php - Copy to config.php and edit for production
$host = 'localhost';
$dbname = 'projet_cinema';
$username = 'your_db_user';
$password = 'your_db_pass'; // Never commit real passwords!

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Erreur DB: " . $e->getMessage());
}
?>

