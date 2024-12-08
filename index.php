<?php
require_once("modele/modele.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Site RATP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Gestion des affectations des vols chez Air France</h1>
    </header>

    <center>
        <div class="nav">
            <a href="index.php?page=1"><img src="images/airfrance.png" height="100" width="100"></a>
            <a href="index.php?page=2"><img src="images/vol.jpg" height="100" width="100"></a>
            <a href="index.php?page=3"><img src="images/avion.jpg" height="100" width="100"></a>
            <a href="index.php?page=4"><img src="images/pilote.jpg" height="100" width="100"></a>

        </div>
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        switch ($page) {
            case 1:
                require_once("controleur/home.php");
                break;
            case 2:
                require_once("controleur/gestion_vol.php");
                break;
            case 3:
                require_once("controleur/gestion_avion.php");
                break;
            case 4:
                require_once("controleur/gestion_pilote.php");
                break;
        }
        ?>
    </center>

    <footer>
        Contact: mail.informations.generales@airfrance.fr.<br>
        numéro:09 69 39 36 54<br>
        Siége social : 7 Rue Vignon, 75009 Paris

        <!-- Ajouter des liens vers les réseaux sociaux -->
        <div class="social-media">
            <a href="https://www.facebook.com/airfrance/?locale=fr_FR" target="_blank">Facebook</a>
            <a href="https://twitter.com/airfrance" target="_blank">Twitter</a>
            <!-- Ajoutez d'autres liens vers d'autres réseaux sociaux selon vos besoins -->
        </div>
    </footer>
</body>

</html>