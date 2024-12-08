<h3> Liste des pilotes</h3>

<table border="1">
    <tr>
        <td> Id pilote</td>
        <td> nom </td>
        <td> prenom </td>
        <td> email </td>
        <td> mdp </td>
        <td> bip </td>
        <td> statut </td>
    </tr>
    <?php
    foreach ($lesPilotes as $unPilote) {
        echo "<tr>";
        echo "<td>" . $unPilote['idpilote'] . "</td>";
        echo "<td>" . $unPilote['nom'] . "</td>";
        echo "<td>" . $unPilote['prenom'] . "</td>";
        echo "<td>" . $unPilote['email'] . "</td>";
        echo "<td>" . $unPilote['mdp'] . "</td>";
        echo "<td>" . $unPilote['bip'] . "</td>";
        echo "<td>" . $unPilote['statut'] . "</td>";
        echo  "<td>";
        echo "<a
             href='index.php?page=2&action=sup&idpilote=".
             $unPilote['idpilote']."'><img src='images/sup.png' heigth='50' width='50'></a>";
             echo "<a
             href='index.php?page=2&action=edit&idligne=".
             $unPilote['idpilote']."'><img src='images/edit.jpg' heigth='50' width='50'></a>";

        echo "</td>";     
        echo "</tr>";
    }
    ?>
</table>