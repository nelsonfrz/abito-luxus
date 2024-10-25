<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Luxus Rent</title>
    <link href="/assets/bootstrap.min.css" rel="stylesheet">
    <script defer src="/assets/bootstrap.bundle.min.js"></script>
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
<main class="form-signin w-50 m-auto container">
    <div class="py-5 text-center">
        <h2>Anmeldung</h2>
    </div>

    <form action="/checkout.php" method="get">
        <h1 class="h3 mb-3 fw-normal">Bitte melden Sie sich an</h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email Adresse</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Passwort">
            <label for="floatingPassword">Passwort</label>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Anmelden</button>
    </form>
</main>
</body>
</html>