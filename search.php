<?php
require 'config.php';

$searchQuery = $_GET['q'] ?? '';
$categorie = $_GET['categorie'] ?? '';
$subcategorie = $_GET['subcategorie'] ?? '';

$query = "SELECT * FROM produse WHERE nume LIKE ?";
$params = ['%' . $searchQuery . '%'];

if ($categorie) {
    $query .= " AND categorie = ?";
    $params[] = $categorie;
}

if ($subcategorie) {
    $query .= " AND subcategorie = ?";
    $params[] = $subcategorie;
}

$stmt = $pdo->prepare($query);
$stmt->execute($params);
$produse = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezultate căutare - Magazin Modern</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html">Magazin Modern</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Acasă</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="femeiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Femei
                    </a>
                    <div class="dropdown-menu" aria-labelledby="femeiDropdown">
                        <a class="dropdown-item" href="search.php?categorie=Femei&subcategorie=Haine">Haine</a>
                        <a class="dropdown-item" href="search.php?categorie=Femei&subcategorie=Încălțăminte">Încălțăminte</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="barbatiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="
