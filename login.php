<?php
session_start();
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare('SELECT * FROM vanzatori WHERE username = ?');
    $stmt->execute([$username]);
    $vanzator = $stmt->fetch();

    if ($vanzator && password_verify($password, $vanzator['password'])) {
        $_SESSION['vanzator_id'] = $vanzator['id'];
        header('Location: add_product.html');
        exit;
    } else {
        echo "Nume de utilizator sau parolă incorectă!";
    }
}
?>
