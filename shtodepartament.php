<?php include 'inc/header.php'; ?>

<?php include 'inc/functions.php'; ?>
<?php include 'inc/left.php'; ?>

<?php 
if(isset($_POST['regjistro'])){
    shtodepartament($_POST['emri'],$_POST['pershkrimi']);
}


?>
<html>
<link rel="stylesheet" href="tabela.css">

<form class="shtopun shto" action="" method="post">
                <h2>Forma për regjistrim</h2>
                <div class="forms">
            <div class="form1">
        <label>Emri: </label>
        <input type="text" id="emri" name="emri">
        <label>Pershkrimi: </label>
        <input type="text" id="mbiemri" name="pershkrimi">
    
            </div>
</div>
                <input type="submit" name="regjistro" id="regjistro" value="Regjistro">
                
            </form>

