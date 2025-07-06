<?php
// création des variables vides pour éviter l'erreur d'about
$activeHome = $activeCreate = $activeAdmin = $activelogIn = $activeOld = "";
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case "create":
            $activeCreate = "active";
            break;
        case "admin":
            $activeAdmin = "active";
            break;
        case "login":
            $activelogIn = "active";
            break;
        case "old":
            $activeOld = "active";
            break;
    }
} else {
    $activeHome = "active";
}


?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="./">TI3-2025</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= $activeHome ?> " href="./">Home</a>
                </li>
                <?php if (isset($_SESSION['login'])): ?>
                    <li class="nav-item">
                        <a class="nav-link <?= $activeAdmin ?>" href="./?page=admin">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $activeOld  ?>" href="./?page=old">Old Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $activeCreate ?>" href="./?page=create">Create Point</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./?page=dec">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link <?= $activelogIn ?>" href="./?page=login">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>