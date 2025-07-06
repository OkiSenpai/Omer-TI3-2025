<?php
require_once "../model/localisationsModel.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ajouter | TI3-2025</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }

        .errorMessage {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <?php require_once "../view/public/nav.php"; ?>

    <main class="container mt-5">
        <h1 class="mb-4 text-center">Ajouter un point</h1>
        <form class="<?= $displayForm ?>" method="post" action="" style="max-width: 600px; margin: 0 auto;">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" required>
            </div>
            <div class="mb-3">
                <label for="codepostal" class="form-label">Code Postal</label>
                <input type="text" class="form-control" id="codepostal" name="codepostal" required>
            </div>
            <div class="mb-3">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" class="form-control" id="ville" name="ville" required>
            </div>
            <div class="mb-3">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="text" class="form-control" id="latitude" name="latitude" required>
            </div>
            <div class="mb-3">
                <label for="longitude" class="form-label">Longitude</label>
                <input type="text" class="form-control" id="longitude" name="longitude" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Ajouter</button>
        </form>
        <?php if (!isset($jsRedirect)): ?>
            <div class="alert alert-danger mt-4 text-center errorMessage <?= $displayError ?>">
           Il faut remplir ce formulaire correctement!       
        </div>
        <?php endif; ?>


        <?php if (isset($jsRedirect)): echo $jsRedirect ?>
            <div class="alert alert-success mt-4 text-center">
                ✅ Vous êtes bien ajouté une localisation... un instant svp...
            </div>
            <?= $jsRedirect ?>
        <?php endif; ?>
    </main>

    <?php require_once "../view/public/footer.php"; ?>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
</body>

</html>