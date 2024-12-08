<h2> Gestion des Avions </h2>

<?php
require_once("vue/vue_insert_avion.php");
if (isset($_POST['Valider'])) {
    //insertion de la ligne dans la table ligne 
    insertAvion($_POST);
    echo "<br> Insertion réussie de la ligne.";
}
//exctraciton des lignes
$lesAvions = selectAllAvion();
require_once("vue/vue_select_avion.php");

?>