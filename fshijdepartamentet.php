<?php include 'inc/header.php'; ?>

<?php include 'inc/functions.php'; ?>
<?php include 'inc/left.php'; ?>



<html>
<?php 

            if(isset($_GET['departamentiid'])){
                $departamentiid = $_GET['departamentiid'];
            };
            if(isset($_POST['fshij'])){
            fshijdepartament($departamentiid); 
            }?>

<link rel="stylesheet" href="tabela.css">
<form class="shtopun shto"  action="" method="post">
                <h2>Forma për fshirje te Departamentit</h2>
                <input type="submit" name="fshij" id="fshij" value="fshij">

                