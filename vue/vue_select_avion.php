<h3> Liste des Avions </h3>

<table border="1">
    <tr>
        <td> ID Avion </td>
        <td> designation </td>
        <td> constructeur</td>
        <td> Nb Places </td>
    </tr>
    <?php
    foreach ($lesAvions as $unAvion) {
        echo "<tr>";
        echo "<td>" . $unAvion['idavion'] . "</td>";
        echo "<td>" . $unAvion['designation'] . "</td>";
        echo "<td>" . $unAvion['constructeur'] . "</td>";
        echo "<td>" . $unAvion['nbplaces'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>