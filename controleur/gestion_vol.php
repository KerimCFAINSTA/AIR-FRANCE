<h2> Gestion des Vols</h2>
<?php
require_once("vue/vue_insert_vol.php");
if (isset($_POST['Valider'])) {
    //insertion de la ligne dans la table ligne
    insertVols($_POST);
    echo "<br> Insertion reussie du vol.";
}
//exctraciton des lignes
$lesVols = selectAllvols();
require_once("vue/vue_select_vol.php");
?>