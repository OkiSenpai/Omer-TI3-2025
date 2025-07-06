<?php
require_once "../model/utilisateursModel.php";
require_once "../model/localisationsModel.php";
require_once "../config.php";


if (isset($_GET['json'])) {
    $localisations = selectAllFromLocalisations($db);
    echo json_encode($localisations);
    exit();
}


//home
//home
//home
if (!isset($_GET['page'])) {
    require_once "../view/public/home.php";
}
//dec
//dec   
//dec
elseif ($_GET['page'] === 'dec') {

    disUser();
    header("Location: ./");
    exit();
}
//admin
//admin
//admin
elseif ($_GET['page'] === 'admin') {


    $localisations = selectAllFromLocalisations($db);
    require_once "../view/private/admin.php";


}
//old
//old
//old
elseif ($_GET['page'] === 'old') {


    $localisations = selectAllFromLocalisations($db);
    $oldLocalisations = selectAllFromOldLocalisations($db);
    require_once "../view/private/adminOld.php";
} 
// create
// create
// create
elseif ($_GET['page'] === 'create') {
    $displaySucces = "d-none";
    $displayError = "d-none";
    $displayForm = "";

    if (isset($_POST['nom'], $_POST['adresse'])) {
        $insert = insertlocalisation($db, $_POST);
        if ($insert) {
            $displaySucces = "";
            $displayForm = "d-none";
            $jsRedirect = "<script>
    setTimeout(() => {
  window.location.href = './?page=admin';
}, 2000); // Redirects after 2 seconds
</script>";
        } else {
            $displayError = "";
        }
    }

    require_once "../view/private/createPoints.php";

} 

// delete
// delete
// delete
elseif ($_GET['page'] === 'delete' && isset($_GET['id'])) {

    $db = new PDO(DB_DSN, DB_LOGIN, DB_PWD);
    deleteLocalisationById($db, $_GET['id']);
    header("Location: ./?page=admin");
    exit;
} 

//update
//update    
//update
elseif ($_GET['page'] === 'update' && isset($_GET['id']) && ctype_digit($_GET['id'])) {
    $displaySucces = "d-none";
    $displayError = "d-none";
    $displayForm = "";
    $id = (int) $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        updateLocalisationById($db, $_POST, $id);

        $displayForm = "d-none";
        $jsRedirect = "<script>
            setTimeout(() => {
         window.location.href = './?page=admin';
        }, 2000); // Redirects after 2 seconds
        </script>";
        $localisations = selectAllFromLocalisations($db);
        require_once "../view/private/updatePoint.php";
    } else {
        $localisation = selectLocalisationById($db, $id);
        $localisations = selectAllFromLocalisations($db);
        require_once "../view/private/updatePoint.php";
        exit;
    }
} else {
    header("Location: ./");
}