<?php include 'inc/header.php'; ?>

<?php include 'inc/functions.php'; ?>
<?php include 'inc/left.php'; ?>
<?php 

if(isset($_GET['puntoriid'])){
    $puntoriid = $_GET['puntoriid'];
}
$res = merrPuntoriid($puntoriid);
while($r= mysqli_fetch_assoc($res)){
    $emri = $r['emriPuntorit'];
    $mbiemri = $r['mbiemri'];
    $telefoni = $r['telefoni'];
    $nrpersonal = $r['nrpersonal'];
    $datalindjes= $r['datalindjes'];
    $datafillimit = $r['datafillimit'];
    $shteti = $r['shteti'];
    $komuna= $r['komuna'];
    $departamentiid = $r['departamentiid'];
};

if(isset($_POST['modifiko'])){
    modifikopuntor($puntoriid,$_POST['emri'],$_POST['mbiemri'],$_POST['telefoni'],$_POST['nrpersonal'],$_POST['datalindjes'],
    $_POST['datafillimit'],$_POST['shteti'],$_POST['komuna'],$_POST['departamenti']);
}



?>

<html>
<link rel="stylesheet" href="tabela.css">

<form class="shtopun"  action="" method="post">
                <h2>Forma për Modifikim</h2>
                <div class="forms">
            <div class="form1">
        <label>Emri: </label>
        <input type="text" value= <?php echo $emri ?>  id="emri" name="emri">
        <label>Mbiemri: </label>
        <input type="text" value= <?php echo $mbiemri ?> id="mbiemri" name="mbiemri">
        <label>Telefoni: </label>
        <input type="text" value= <?php echo $telefoni ?>  id="telefoni" name="telefoni">
        <label>NumriPersonal: </label>
        <input type="text"  value= <?php echo $nrpersonal ?>  id="nrpersonal" name="nrpersonal">
        <label>DataLindjes: </label>
        <input type="date"  value= <?php echo $datalindjes?>  id="datalindjes" name="datalindjes">
        </div>
        <div class="form2">
        <label>DataFillimit: </label>
        <input type="date" value= <?php echo $datafillimit?>  id="datafillimit" name="datafillimit">
        <label>Shteti: </label>
        <input type="text" value= <?php echo $shteti ?>  id="shteti" name="shteti">
        <label>Komuna: </label>
        <input type="text" value = <?php echo $komuna ?>  id="komuna" name="komuna">
        <label>Departamenti: </label>
        <select name="departamenti">
        <?php $depar=shikoDepartamentet();
             while ($departamenti=mysqli_fetch_assoc($depar)) {
                $id=$departamenti['departamentiid'];
                $emri=$departamenti['emri'];
                echo "<option value='{$id}'>$emri</option>";  } ?>
                </select>
   
            </div>
            </div>
                <input type="submit" name="modifiko" id="modifiko" value="modifiko">
                
            </form>