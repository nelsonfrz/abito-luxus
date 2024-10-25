<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Luxus Mieten</title>
    <link href="/assets/bootstrap.min.css" rel="stylesheet">
    <script defer src="/assets/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-body-tertiary">

<div class="container">
    <main>
        <div class="py-5 text-center">
            <h2>Bezahlung</h2>
        </div>

        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Dein Warenkorb</span>
                    <span class="badge bg-primary rounded-pill">1</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">JOOP! Herren Anzug</h6>
                            <small class="text-body-secondary">Beige, Slim Fit mit 2-Knopf-Sakko</small>
                        </div>
                        <span class="text-body-secondary">25€ x 5 Tage</span>
                    </li>


                    <li class="list-group-item d-flex justify-content-between">
                        <span>Gesamt (EUR)</span>
                        <strong>125€</strong>
                    </li>
                </ul>

            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Rechnungsadresse</h4>
                <form class="needs-validation" novalidate="">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Vorname</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Ein gültiger Vorname ist erforderlich.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Nachname</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Ein gültiger Nachname ist erforderlich.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">E-Mail <span
                                        class="text-body-secondary">(Optional)</span></label>
                            <input type="email" class="form-control" id="email" placeholder="du@example.com">
                            <div class="invalid-feedback">
                                Bitte geben Sie eine gültige E-Mail-Adresse für Versandaktualisierungen ein.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Adresse</label>
                            <input type="text" class="form-control" id="address" placeholder="Hauptstraße 123"
                                   required="">
                            <div class="invalid-feedback">
                                Bitte geben Sie Ihre Versandadresse ein.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Anzahl Tage der Vermietung</label>
                            <input type="number" class="form-control" id="address" placeholder="Anzahl Tage"
                                   required="">
                            <div class="invalid-feedback">
                                Bitte geben Sie die Anzahl der Tage für der Vermietung an.
                            </div>
                        </div>

                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3">Zahlung</h4>

                    <div class="row gy-3">
                        <div class="col-md-6">
                            <label for="cc-name" class="form-label">Name auf der Karte</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                            <small class="text-body-secondary">Vollständiger Name, wie auf der Karte angezeigt</small>
                            <div class="invalid-feedback">
                                Name auf der Karte ist erforderlich
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="cc-number" class="form-label">Kreditkartennummer</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                            <div class="invalid-feedback">
                                Kreditkartennummer ist erforderlich
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="cc-expiration" class="form-label">Ablaufdatum</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                            <div class="invalid-feedback">
                                Ablaufdatum erforderlich
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="cc-cvv" class="form-label">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                            <div class="invalid-feedback">
                                Sicherheitscode erforderlich
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <a href="/" class="w-100 btn btn-primary btn-lg" type="submit">Weiter zur Bezahlung</a>
                </form>
            </div>
        </div>
    </main>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span class="mb-3 mb-md-0 text-body-secondary">© 2024 LuxusRent, GmbH</span>
            </div>
        </footer>
    </div>
</div>
</body>
</html>
