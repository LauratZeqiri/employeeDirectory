<?php include 'inc/header.php'; ?>

<?php include 'inc/functions.php'; ?>
<?php include 'inc/left.php'; ?>
<?php
if(isset($_POST['regjistro'])){
    shtoPuntor($_POST['emri'],$_POST['mbiemri'],$_POST['telefoni'],$_POST['nrpersonal'],$_POST['datalindjes'],$_POST['datafillimit'],$_POST['shteti'],$_POST['komuna'],$_POST['departamenti']);
};

?>
<html>
<link rel="stylesheet" href="tabela.css">

<form class="shtopun"  action="" method="post">
                <h2>Forma për regjistrim</h2>
                <div class="forms">
            <div class="form1">
        <label>Emri: </label>
        <input type="text" required id="emri" name="emri">
        <label>Mbiemri: </label>
        <input type="text"   required id="mbiemri" name="mbiemri">
        <label>Telefoni: </label>
        <input type="text"  required id="telefoni" name="telefoni">
        <label>NumriPersonal: </label>
        <input type="text"  required id="nrpersonal" name="nrpersonal">
        <label>DataLindjes: </label>
        <input type="date"  required id="datalindjes" name="datalindjes">
        </div>
        <div class="form2">
        <label>DataFillimit: </label>
        <input type="date"  required id="datafillimit" name="datafillimit">
        <label>Shteti: </label>
        <input type="text"  required id="shteti" name="shteti">
        <label>Komuna: </label>
        <input type="text"  required id="komuna" name="komuna">
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
                <input type="submit" name="regjistro" id="regjistro" value="Regjistro">
                
            </form>


</html>