<?php
require_once "../model/localisationsModel.php";
require_once "../config.php";



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin - Old Locations | TI3-2025</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #f8f9fa;
        }
        .admin-header {
            background: #343a40;
            color: #fff;
            padding: 2rem 0;
        }
        .admin-header h1 {
            margin: 0;
        }
        .table thead {
            background: #343a40;
            color: #fff;
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

    <header class="admin-header text-center mb-4">
        <h1>Archived Locations Panel</h1>
        <p class="lead">Bienvenue, <?= htmlspecialchars($_SESSION['login']) ?> !</p>
    </header>

    <main class="container">
        <div class="card shadow-sm">
            <div class="card-header">
                <h3 class="mb-0">Liste des localisations archivées</h3>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Adresse</th>
                                <th>Code Postal</th>
                                <th>Ville</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Supprimé le</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($oldLocalisations)): ?>
                                <?php foreach ($oldLocalisations as $oldLoc): ?>
                                    <tr>
                                        <td><?= $oldLoc['id'] ?></td>
                                        <td><?= htmlspecialchars($oldLoc['nom']) ?></td>
                                        <td><?= htmlspecialchars($oldLoc['adresse']) ?></td>
                                        <td><?= htmlspecialchars($oldLoc['codepostal']) ?></td>
                                        <td><?= htmlspecialchars($oldLoc['ville']) ?></td>
                                        <td><?= $oldLoc['latitude'] ?></td>
                                        <td><?= $oldLoc['longitude'] ?></td>
                                        <td><?= $oldLoc['deleted_at'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="8" class="text-center">Aucune localisation archivée trouvée.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <?php require_once "../view/public/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
