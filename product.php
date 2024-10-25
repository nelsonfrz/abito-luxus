<?php
require __DIR__ . '/db.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$product = getProduct($id); // Fetch the product based on the ID
?>

<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produkt Details</title>
    <link href="/assets/bootstrap.min.css" rel="stylesheet">
    <script defer src="/assets/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">LuxusRent</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="container my-5">
    <div class="row">
        <?php if ($product): ?>
            <div class="col-md-6">
                <img src="<?php echo $product['image_url']; ?>" class="img-fluid"
                     alt="<?php echo $product['title']; ?>">
            </div>
            <div class="col-md-6">
                <h1><?php echo $product['title']; ?></h1>
                <p><?php echo $product['description']; ?></p>
                <a href="/sign-in.php" class="btn btn-primary btn-lg">Jetzt mieten</a>
                <ul class="list-group list-group-flush mt-3">
                    <li class="list-group-item"><strong>Preis:</strong> €<?php echo $product["price_per_day"] ?>/Tag
                    </li>
                    <li class="list-group-item"><strong>Kategorie:</strong> <?php echo $product["category"] ?></li>
                    <li class="list-group-item"><strong>Verfügbarkeit:</strong> <?php echo $product["availability"] ?>
                    </li>
                    <li class="list-group-item"><strong>ID:</strong> <?php echo $id ?></li>
                </ul>
            </div>
        <?php else: ?>
            <div class="col-12">
                <div class="alert alert-danger" role="alert">
                    Das angeforderte Produkt wurde nicht gefunden.
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
</body>
</html>