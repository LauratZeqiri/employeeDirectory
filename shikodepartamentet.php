<?php include 'inc/header.php'; ?>

<?php include 'inc/functions.php'; ?>
<?php include 'inc/left.php'; ?>

<html>
<link rel="stylesheet" href="tabela.css">
<div class="tab">
<table class="tabela">
    <tr>
        <th>Emri</th>
        <th>Pershkrimi</th>
        <th>Delete</th>
    </tr>
    <?php
    $dep= shikoDepartamentet();
    while ($d = mysqli_fetch_assoc($dep)) {
        $departamentiid = $d['departamentiid'];
        echo "<tr>";
        echo "<td>" . $d['emri'] ."</td>";
        echo "<td>" . $d['pershkrimi'] . "</td>";
        echo "<td><a class='delete' href='fshijdepartamentet.php?departamentiid={$departamentiid}'>Delete</a></td>";
        echo "</tr>";
    }
    ?>
</table>