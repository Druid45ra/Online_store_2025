<?php
require 'config.php';

$searchQuery = htmlspecialchars($_GET['q'] ?? '');
$categorie = htmlspecialchars($_GET['categorie'] ?? '');
$subcategorie = htmlspecialchars($_GET['subcategorie'] ?? '');

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
                <a class="nav-link dropdown-toggle" href="#" id="barbatiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Bărbați
                </a>
                <div class="dropdown-menu" aria-labelledby="barbatiDropdown">
                    <a class="dropdown-item" href="search.php?categorie=Bărbați&subcategorie=Haine">Haine</a>
                    <a class="dropdown-item" href="search.php?categorie=Bărbați&subcategorie=Încălțăminte">Încălțăminte</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="copiiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Copii
                </a>
                <div class="dropdown-menu" aria-labelledby="copiiDropdown">
                    <a class="dropdown-item" href="search.php?categorie=Copii&subcategorie=Haine">Haine</a>
                    <a class="dropdown-item" href="search.php?categorie=Copii&subcategorie=Încălțăminte">Încălțăminte</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add_product.html">Adaugă Produs</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
            <input class="form-control mr-sm-2" type="search" placeholder="Caută produse" aria-label="Search" name="q">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Caută</button>
        </form>
    </div>
</nav>
<div class="container mt-5">
    <h2>Rezultate căutare:</h2>
    <div class="row">
        <?php if (count($produse) > 0): ?>
            <?php foreach ($produse as $produs): ?>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <img src="img/<?php echo htmlspecialchars($produs['imagine']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($produs['nume']); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($produs['nume']); ?></h5>
                            <p class="card-text">Preț: <?php echo htmlspecialchars($produs['pret']); ?> RON</p>
                            <a href="#" class="btn btn-primary">Adaugă în coș</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="alert alert-warning" role="alert">
                Niciun produs găsit pentru termenul de căutare "<?php echo htmlspecialchars($searchQuery); ?>".
            </div>
        <?php endif; ?>
    </div>
</div>
[_{{{CITATION{{{_1{](https://github.com/frankyhung93/BookStackMailer/tree/e566f0332c4f01159206728a7f8028f05485f333/connect_db.php)[_{{{CITATION{{{_2{](https://github.com/ncfcdaniel/GroupDesignProject/tree/c3ff97d0d35b9bcf1f52800de8b3bc3b06e9fc08/Final%20Product%2FAdmin%2FAdminPermissions%2FSupplier%2FDeleteSupplier.php)[_{{{CITATION{{{_3{](https://github.com/YotaroHitomi/55contact_form/tree/beae7d575f52b4a45ba85d0a8612235e2cadf270/view.php)[_{{{CITATION{{{_4{](https://github.com/kausar-zaman/EmpireJobs/tree/04bcef980ed6e1e84f395c14845d48d3429a2da2/templates%2Finc%2Fheader.php)[_{{{CITATION{{{_5{](https://github.com/thebarbieshoe/todo/tree/609d86e0c914835b584def3a1d2fc45aff79531a/viewlist.php)[_{{{CITATION{{{_6{](https://github.com/Agilbay04/VLMS-JTI/tree/ac9dee3ecf421da62ff9cf5b76dee9de633b83de/bootstrap-4.6.0%2Fsite%2Fcontent%2Fdocs%2F4.6%2Fcomponents%2Fnavbar.md)[_{{{CITATION{{{_7{](https://github.com/Saurabh-Pandey79/BusinessWebsiteForACServicing/tree/06791782a0aed87eccfdc62cee66dea31231e696/about.php)[_{{{CITATION{{{_8{](https://github.com/MaxAlphaEngineer/inlab/tree/d9b9d28a382d710ee8038219d9a62d4943511abf/resources%2Fviews%2Fhome.blade.php)[_{{{CITATION{{{_9{](https://github.com/guillaumepoucet/portfolio/tree/b726b507273b866792005a938f08723e80654777/nav.php)[_{{{CITATION{{{_10{](https://github.com/Tanvipatel78/tspatelwebsite/tree/2e6304e1c6efd573086ab5dd015c47290201d20d/navbar.php)[_{{{CITATION{{{_11{](https://github.com/samuelmwangi729/eSUnisolTrue/tree/b2e3de0dc4d9541a72830d56832009351c2abcb3/resources%2Fviews%2Fwelcome.blade.php)[_{{{CITATION{{{_12{](https://github.com/LayShah5300/Blog/tree/938ef56d43b6dd06e786cc693fbc282be226961e/resources%2Fviews%2Fuser%2Flayouts%2Fheader.blade.php)[_{{{CITATION{{{_13{](https://github.com/adityaadhaygude/mp3-downloding-site/tree/d8bbd81d5acca5fdd6fc7f8b79e2eac12e469a23/index.php)[_{{{CITATION{{{_14{](https://github.com/panchanb/CS-Projects/tree/cbd649113cde892451117cc96a6484c3f78cffb2/BankingON%2FBankingON%2Flogin2.php)
