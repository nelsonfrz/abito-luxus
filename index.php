<?php
require __DIR__ . '/db.php';
?>

<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Luxus Rent</title>
    <link href="/assets/bootstrap.min.css" rel="stylesheet">
    <script defer src="/assets/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">LuxusRent</a>
    </div>
</nav>

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="https://static5.bolf.de/ger_pl_Bolf-Herren-Anzug-Schwarz-02-95289_2.jpg"
                 class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="500" height="100" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Luxus Anzüge mieten</h1>
            <p class="lead">Wir vermieten Luxus Anzüge zu günstigen Preisen.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="#gallery" type="button" class="btn btn-primary btn-lg px-4 me-md-2">Anzüge Entdecken</a>
            </div>
        </div>
    </div>
</div>

<div id="gallery" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Anzüge entdecken</h2>
        <div class="row">
            <?php foreach (getProducts() as $product) : ?>
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div class="card">
                        <img width="200" height="500" style="object-fit: cover"
                             src="<?php echo $product["image_url"] ?>" class="card-img-top"
                             alt="<?php echo $product["title"] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product["title"] ?></h5>
                            <p class="card-text"><?php echo $product["description"] ?></p>
                            <a href="/product.php?id=<?php echo $product["id"]; ?>" class="btn btn-primary">Mieten</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <span class="mb-3 mb-md-0 text-body-secondary">© 2024 LuxusRent, GmbH</span>
        </div>
    </footer>
</div>

</body>
</html>