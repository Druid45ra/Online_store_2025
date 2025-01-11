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
    <link rel="stylesheet" href="styles.css">
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
                        Femei[_{{{CITATION{{{_19{[_{{{CITATION{{{_1{](https://github.com/EleanorEllingson/web-dev/tree/b2f2a382e77a20fd6895677c8b8f402ac4bae352/7-bank-project%2F1-template-route%2Ftranslations%2FREADME.ko.md)[_{{{CITATION{{{_2{](https://github.com/Agilbay04/VLMS-JTI/tree/ac9dee3ecf421da62ff9cf5b76dee9de633b83de/bootstrap-4.6.0%2Fsite%2Fcontent%2Fdocs%2F4.6%2Fcomponents%2Fnavbar.md)[_{{{CITATION{{{_3{](https://github.com/Saurabh-Pandey79/BusinessWebsiteForACServicing/tree/06791782a0aed87eccfdc62cee66dea31231e696/about.php)[_{{{CITATION{{{_4{](https://github.com/Gitsarah/dev_qualijuris/tree/c8dc0a886b863a122de934ab7a59f3df8a00a03e/index.php)[_{{{CITATION{{{_5{](https://github.com/samuelmwangi729/eSUnisolTrue/tree/b2e3de0dc4d9541a72830d56832009351c2abcb3/resources%2Fviews%2Fwelcome.blade.php)[_{{{CITATION{{{_6{](https://github.com/LayShah5300/Blog/tree/938ef56d43b6dd06e786cc693fbc282be226961e/resources%2Fviews%2Fuser%2Flayouts%2Fheader.blade.php)[_{{{CITATION{{{_7{](https://github.com/adityaadhaygude/mp3-downloding-site/tree/d8bbd81d5acca5fdd6fc7f8b79e2eac12e469a23/index.php)[_{{{CITATION{{{_8{](https://github.com/panchanb/CS-Projects/tree/cbd649113cde892451117cc96a6484c3f78cffb2/BankingON%2FBankingON%2Flogin2.php)[_{{{CITATION{{{_9{](https://github.com/nimishbhandari/snowden-lite/tree/02b703426600fff2b9fa15d653a22ecdc9e3e64f/levels%2Ftheme_g%2Fg1.php)[_{{{CITATION{{{_10{](https://github.com/rkustas/techarticles/tree/598d65a5c026d9ecd3c7f0258f4a44f93e7029d0/client%2Fpages%2F_document.js)[_{{{CITATION{{{_11{](https://github.com/themrzlyv/movieland/tree/e10cbc7fda8f8cf1ef44fd0328e11ba52715d0bd/src%2Fpages%2F_document.js)[_{{{CITATION{{{_12{](https://github.com/SantiSL5/ANGULARJS_FW_PHP_MVC_OO/tree/2fd91086fa2eea7c56948aaa023a1c5c0ece9e1b/frontend%2Fassets%2Finc%2Ftop_page_cart.php)[_{{{CITATION{{{_13{](https://github.com/nurulamin8392/phpcrud/tree/9e1617d7f8c123ebc8d6aa329b27424429b942c5/edit.php)[_{{{CITATION{{{_14{](https://github.com/frankyhung93/BookStackMailer/tree/e566f0332c4f01159206728a7f8028f05485f333/connect_db.php)[_{{{CITATION{{{_15{](https://github.com/ncfcdaniel/GroupDesignProject/tree/c3ff97d0d35b9bcf1f52800de8b3bc3b06e9fc08/Final%20Product%2FAdmin%2FAdminPermissions%2FSupplier%2FDeleteSupplier.php)[_{{{CITATION{{{_16{](https://github.com/YotaroHitomi/55contact_form/tree/beae7d575f52b4a45ba85d0a8612235e2cadf270/view.php)[_{{{CITATION{{{_17{](https://github.com/MaxAlphaEngineer/inlab/tree/d9b9d28a382d710ee8038219d9a62d4943511abf/resources%2Fviews%2Fhome.blade.php)[_{{{CITATION{{{_18{](https://github.com/guillaumepoucet/portfolio/tree/b726b507273b866792005a938f08723e80654777/nav.php)](https://github.com/Tanvipatel78/tspatelwebsite/tree/2e6304e1c6efd573086ab5dd015c47290201d20d/navbar.php)
