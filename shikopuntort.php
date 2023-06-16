<?php include 'inc/header.php'; ?>

<?php include 'inc/functions.php'; ?>
<?php include 'inc/left.php'; ?>

<html>
<link rel="stylesheet" href="tabela.css">
<style> 
.search {
    padding: 6px 11px;
    border-radius: 10px;
    outline: none;
    border: none;
    background-color: #f2f2f2;
    border-bottom:  1px solid black;
    margin-bottom: 12px;
    
}
.btn{
    border-radius: 10px;
    padding: 5px 10px;
    background-color: #167a8b;
  border: none;
    color: white;
}

</style>
<div class="tab">
<form class="for" method="GET" action="">
  <input type="text" class="search" name="search" placeholder="Kërko"/>
  <button type="submit" class="btn">Search</button>
</form>
<table class="tabela">
    <tr>
        <th>Emri</th>
        <th>Mbiemri</th>
        <th>Telefoni</th>
        <th>NrPersonal</th>
        <th>DataFillimi</th>
        <th>Komuna</th>
        <th>Emri Departamentit</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
   if(isset($_GET['search']) && !empty($_GET['search'])){
        $emri = $_GET['search'];
       $puntort= search($emri);
    } else{
        $puntort = shikoPuntort();
   }
   while($r = mysqli_fetch_assoc($puntort)){
        $puntoretid = $r['puntoretid'];
        echo "<tr>";
        echo "<td>" . $r['emriPuntorit'] ."</td>";
        echo "<td>" . $r['mbiemri'] . "</td>";
        echo "<td>" . $r['telefoni'] . "</td>";
        echo "<td>" . $r['nrpersonal'] . "</td>";
        echo "<td>" . $r['datafillimit'] . "</td>";
        echo "<td>" . $r['komuna'] . "</td>";
        echo "<td>" . $r['emri'] . "</td>";
        echo "<td><a class='edit'href='modifikopuntort.php?puntoriid={$puntoretid}'>Edit</a></td>";     
        echo "<td><a class='delete' href='fshijpuntort.php?puntoriid={$puntoretid}'>Delete</a></td>";       
         echo "</tr>";
    }
    ?>
</table>
</div>

        