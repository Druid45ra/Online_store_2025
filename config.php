<?php
$host = '127.0.0.1';
$db = 'magazin_modern';
$user = 'utilizator_baza_de_date';
$pass = 'parola_baza_de_date';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    // Mesaj de confirmare în cazul unei conexiuni reușite
    echo "Conexiune la baza de date realizată cu succes!";
} catch (\PDOException $e) {
    // Afișare mesaj de eroare pentru utilizator
    echo "Eroare la conectarea la baza de date: " . $e->getMessage();
    exit;
}
?>
