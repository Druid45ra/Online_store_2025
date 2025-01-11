<?php
session_start();
require 'config.php';

if (!isset($_SESSION['vanzator_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nume = $_POST['nume'];
    $pret = $_POST['pret'];
    $categorie = $_POST['categorie'];
    $subcategorie = $_POST['subcategorie'];

    if (isset($_FILES['imagine']) && $_FILES['imagine']['error'] === UPLOAD_ERR_OK) {
        $imagineTmpName = $_FILES['imagine']['tmp_name'];
        $imagineName = $_FILES['imagine']['name'];
        $destination = 'img/' . $imagineName;

        if (!file_exists('img')) {
            mkdir('img', 0777, true);
        }

        if (move_uploaded_file($imagineTmpName, $destination)) {
            $stmt = $pdo->prepare('INSERT INTO produse (nume, pret, categorie, subcategorie, imagine) VALUES (?, ?, ?, ?, ?)');
            $stmt->execute([$nume, $pret, $categorie, $subcategorie, $imagineName]);

            echo "Produs adăugat cu succes!";
        } else {
            echo "Eroare la încărcarea imaginii.";
        }
    } else {
        echo "Eroare la încărcarea fișierului.";
    }
}
?>
