<h2>Gestion des pilotes</h2>

<?php
$lepilote = null;
if (isset($_GET['action']) && isset($_GET['idpilote'])) {
    $action = $_GET['action'];
    $idpilote = $_GET['idpilote'];
    switch ($action) {
        case "sup":
            deletePilote($idpilote);
            break;
        case "edit":
            $lePilote = selectWherePilote($idpilote);
            var_dump($lePilote);
            break;
    }
}
require_once("vue/vue_insert_pilote.php");
if (isset($_POST['Valider'])) {
    //insertion de la ligne dans la table pilote
    insertpilote ($_POST);
    echo "<br> Insertion reussi du pilote.";
}
if (isset($_POST['Modifier'])) {
    updatePilote($_POST);
    //recharger la page
    header(("Location: index.php?page=2"));
}
//extraction des pilotes
$lesPilotes = selectAllPilotes();
require_once("vue/vue_select_pilote.php");
?>