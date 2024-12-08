<h3>Liste des Vols </h3>
<table border="1">
    <tr>
        <td> Designation </td>
        <td> Date Vol </td>
        <td> Heure Vol </td>
        <td> Premier Pilote </td>
        <td> Deuxieume Pilote </td>
        <td> Avion </td>
    </tr>
    <?php
    foreach ($lesVols as $unVol) {
        echo "<tr>";
        echo "<td>" . $unVol['designation'] . "</td>";
        echo "<td>" . $unVol['datevol'] . "</td>";
        echo "<td>" . $unVol['heurevol'] . "</td>";
        echo "<td>" . $unVol['idpilote1'] . "</td>";
        echo "<td>" . $unVol['idpilote2'] . "</td>";
        echo "<td>" . $unVol['idavion'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>