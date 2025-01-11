<?php
session_start();
require 'config.php';

if (!isset($_SESSION['vanzator_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nume = htmlspecialchars($_POST['nume']);
    $pret = htmlspecialchars($_POST['pret']);
    $categorie = htmlspecialchars($_POST['categorie']);
    $subcategorie = htmlspecialchars($_POST['subcategorie']);

    if (isset($_FILES['imagine']) && $_FILES['imagine']['error'] === UPLOAD_ERR_OK) {
        $imagineTmpName = $_FILES['imagine']['tmp_name'];
        $imagineName = basename($_FILES['imagine']['name']);
        $extensie = strtolower(pathinfo($imagineName, PATHINFO_EXTENSION));
        $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
        
        if (in_array($extensie, $allowed_ext)) {
            $destination = 'img/' . uniqid('', true) . '.' . $extensie;

            if (!file_exists('img')) {
                mkdir('img', 0777, true);
            }

            if (move_uploaded_file($imagineTmpName, $destination)) {
                $stmt = $pdo->prepare('INSERT INTO produse (nume, pret, categorie, subcategorie, imagine) VALUES (?, ?, ?, ?, ?)');
                $stmt->execute([$nume, $pret, $categorie, $subcategorie, $destination]);

                echo "Produs adăugat cu succes!";
            } else {
                echo "Eroare la încărcarea imaginii.";
            }
        } else {
            echo "Format de fișier invalid. Doar jpg, jpeg, png și gif sunt permise.";
        }
    } else {
        echo "Eroare la încărcarea fișierului.";
    }
}
?>
