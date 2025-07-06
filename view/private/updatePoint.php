<?php
// Pretpostavljam da su $localisation, $localisations, $displayForm, $jsRedirect već postavljeni u kontroleru
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update | TI3-2025</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #list {
            height: 500px;
            overflow: auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        li:hover, li a:hover {
            cursor: pointer;
            text-decoration: underline;
        }
        .list-group-item a {
            color: inherit;
            text-decoration: none;
            display: block;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <?php require_once "../view/public/nav.php"; ?>
    <div class="container mt-5">
        <div class="row">
            <h1>Update point</h1>
            <!-- Forma za update -->
            <div class="col-md-6">
                <form class="<?= $displayForm ?>" method="post" action="">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" required
                            value="<?= htmlspecialchars($localisation['nom'] ?? '') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" required
                            value="<?= htmlspecialchars($localisation['adresse'] ?? '') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="codepostal" class="form-label">Code Postal</label>
                        <input type="text" class="form-control" id="codepostal" name="codepostal" required
                            value="<?= htmlspecialchars($localisation['codepostal'] ?? '') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="ville" class="form-label">Ville</label>
                        <input type="text" class="form-control" id="ville" name="ville" required
                            value="<?= htmlspecialchars($localisation['ville'] ?? '') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="latitude" class="form-label">Latitude</label>
                        <input type="text" class="form-control" id="latitude" name="latitude" required
                            value="<?= htmlspecialchars($localisation['latitude'] ?? '') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="longitude" class="form-label">Longitude</label>
                        <input type="text" class="form-control" id="longitude" name="longitude" required
                            value="<?= htmlspecialchars($localisation['longitude'] ?? '') ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
                <?php if (isset($jsRedirect)):
                    echo $jsRedirect ?>
                    <div class="alert alert-success">✅ Vouz avez bien modifié... un instant... </div>
                <?php endif; ?>
            </div>
            <!-- Lista lokalizacija -->
            <div class="col-md-6" id="list">
                <h3>Liste des localisations</h3>
                <ul class="list-group point-list" id="pointList">
                    <div class="loading">Chargement des localisations...</div>
                </ul>
                <script src="../public/js/listUpdate.js"></script>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
    <script src="./js/map.js"></script>
</body>

</html>