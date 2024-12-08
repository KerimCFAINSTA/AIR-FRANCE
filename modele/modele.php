<?php
/*
	dans ce fichier, on réalise toutes les fonctions de connexion à la BDD, deconnexion de la BDD et exécution de l'ensemble des requetes sur les tables de la BDD : insert, delete, update, select.
	*/

function connexion()
{
    $connexion = mysqli_connect("localhost", "root", "", "air_france_284");
    if ($connexion == null) {
        echo "Erreur de connexion au serveur Mysql.";
    }
    return $connexion;
}
function deconnexion($connexion)
{
    mysqli_close($connexion);
}
/****************** Gestion des pilotes ******/
function insertpilote($tab)
{
    $requete = "insert into ligne values (null,'"
        . $tab['nom'] . "','"
        . $tab['prenom'] . "','"
        . $tab['email'] . "','"
        . $tab['mdp'] . "','"
        . $tab['bip'] . "','"
        . $tab['station'] . "');";

    $con = connexion(); //appel de la connexion
    mysqli_query($con, $requete); //execution de la requete
    deconnexion($con); // deconnexion de la base de données
}
function selectAllPilotes()
{
    $requete = "select * from pilote; ";
    $con = connexion();
    $lesPilotes = mysqli_query($con, $requete);
    deconnexion($con);
    return $lesPilotes;
}
function deletePilote ($idpilote){
    $requete ="delete from Pilote where idpilote=".$idpilote;
    $con = connexion(); //appel de la connexion
    mysqli_query($con, $requete); //execution de la requete
    deconnexion($con); // deconnexion de la base de données
    
}
function updatePilote ($tab){
    $requete="update pilote set nom="
    .$tab['nom']+"' , prenom="
    .$tab['prenom']+"', email="
    .$tab['email']+"' , mdp="
    .$tab['mdp']+"', bip="
    .$tab['bip']+"', statut="
    .$tab['statut']+"' , where idpilote="
    .$tab['idpilote'];
    $con = connexion(); //appel de la connexion
    mysqli_query($con, $requete); //execution de la requete
    deconnexion($con); // deconnexion de la base de données


}
function selectwherePilote ($idpilote){
    $requete= "select * from pilote where idpilote=".$idpilote;
    $con = connexion(); 
    $resultats = mysqli_query($con, $requete); 
    $lesPilotes = mysqli_fetch_assoc($resultats); 
    deconnexion($con); 
    return $lesPilotes ;
    
}
/******* Gestion des Avions  ***********/
function insertAvion($tab)
{
    $requete = "insert into Avion values (null,'"
        . $tab['designation'] . "','"
        . $tab['constructeur'] . "','"
        . $tab['nbplaces'] . "');";

    $con = connexion();  //appel de la connexion 
    mysqli_query($con, $requete); //execution de la requete
    deconnexion($con); //deconnexion de la base de données
}
function selectAllAvion()
{
    $requete = "select *from Avion;";
    $con = connexion();
    $lesAvions = mysqli_query($con, $requete);
    deconnexion($con);
    return $lesAvions;
}

/******* Gestion des Vols  ***********/
function insertVols($tab)
{
    $requete = "insert into vol values (null,'"
        . $tab['designation'] . "','"
        . $tab['datevol'] . "','"
        . $tab['heurevol'] . "','"
        . $tab['idpilote1'] . "','"
        . $tab['idpilote2'] . "','"
        . $tab['idavion'] . "');";

    $con = connexion(); //appel de la connexion 
    mysqli_query($con, $requete); //execution de la requete
    deconnexion($con); //deconnexion de la base de données
}
function selectAllvols()
{
    $requete = "select *from Vol;";
    $con = connexion();
    $lesVols = mysqli_query($con, $requete);
    deconnexion($con);
    return $lesVols;
}
