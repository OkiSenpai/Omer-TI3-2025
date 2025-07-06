<?php

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

        li:hover,
        li a:hover {
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
              html, body {
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
                        <input class="form-control" id="nom" name="nom" type="text" value="<?= $localisation['nom'] ?>"
                            required />
                    </div>
                    <div class="mb-3">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input class="form-control" id="inputAdresse" name="adresse" type="text"
                            value="<?= $localisation['adresse'] ?>" required />
                    </div>
                    <div class="mb-3">
                        <label for="codepostal" class="form-label">Code Postal</label>
                        <input class="form-control" id="codepostal" name="codepostal" type="text"
                            value="<?= $localisation['codepostal'] ?>" required />
                    </div>
                    <div class="mb-3">
                        <label for="ville" class="form-label">Ville</label>
                        <input class="form-control" id="ville" name="ville" type="text"
                            value="<?= $localisation['ville'] ?>" required />
                    </div>
                    <div class="mb-3">
                        <label for="latitude" class="form-label">Latitude</label>
                        <input class="form-control" id="latitude" name="latitude" type="text"
                            value="<?= $localisation['latitude'] ?>" required />
                    </div>
                    <div class="mb-3">
                        <label for="longitude" class="form-label">Longitude</label>
                        <input class="form-control" id="longitude" name="longitude" type="text"
                            value="<?= $localisation['longitude'] ?>" required />
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
 
            </div>
            <!-- Lista lokalizacija -->
            <div class="col-md-6 <?= $displayForm ?> " id="list">
                <h3>Liste de localisations</h3>
                <ul class="list-group point-list" id="pointList">
                    <div class="loading">Chargement des localisations...</div>
                </ul>
               
            </div>
        </div>
    </div>
                   <?php if (isset($jsRedirect)):
                    echo $jsRedirect ?>
                    <div class="alert alert-success text-center w-50 mx-auto " >✅ Vouz avez bien modifié... un instant... </div>
                <?php endif; ?>
    <?php require_once "../view/public/footer.php"; ?>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
     <script src="../public/js/listUpdate.js"></script>
    
</body>

</html>