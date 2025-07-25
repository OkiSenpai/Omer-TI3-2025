<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | TI3-2025</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
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
        <h1>Admin Panel</h1>
        <p class="lead">Bienvenue, <?= htmlspecialchars($_SESSION['login']) ?> !</p>
    </header>

    <main class="container">
        <div class="mb-4">
            <a href="./?page=create" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Add a point
            </a>
        </div>
        <div class="card shadow-sm">
            <div class="card-header">
                <h3 class="mb-0">Liste des localisations</h3>
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($localisations)): ?>
                                <?php foreach ($localisations as $loc): ?>
                                    <tr>
                                        <td><?= $loc['id'] ?></td>
                                        <td><?= $loc['nom'] ?></td>
                                        <td><?= $loc['adresse'] ?></td>
                                        <td><?= $loc['codepostal'] ?></td>
                                        <td><?= $loc['ville'] ?></td>
                                        <td><?= $loc['latitude'] ?></td>
                                        <td><?= $loc['longitude'] ?></td>
                                        <td>
                                            <a href="./?page=update&id=<?= $loc['id'] ?>" class="btn btn-warning btn-sm btnAdmin w-100">
                                                <i class="bi bi-pencil"></i> Update
                                            </a>
                                            <a href="./?page=delete&id=<?= $loc['id'] ?>" class="btn btn-danger btn-sm mt-2 btnAdmin w-100"
                                                onclick="return confirm('Vous êtes sûr de vouloir supprimer <?= $loc['nom'] ?> ?');">
                                                <i class="bi bi-trash"></i> Delete
                                            </a>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="9" class="text-center">Aucune localisation trouvée.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <?php require_once "../view/public/footer.php"; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>
