<?php include 'inc/header.php'; ?>
<?php include 'inc/functions.php'; ?>

<?php 
if(isset($_POST['login'])){
    login($_POST['email'],$_POST['fjalkalimi']);
}
?>
<html>

<link rel="stylesheet" href="tabela.css">



    
<form  style='width:400px' class="shtopun" id="login" action="" method="post">
                <h2>Login</h2>
                <div class="forms">
            <div class="form1">
            <?php    if(!isset($_SESSION['emri']) && isset($_POST['login'])){
            echo  "<h4 class='login'>" ."Email ose Fjalekalimi jan te pasakta" . "</h4>";
        } ?>
        <label>Email: </label>
        <input type="text" required  name="email">
        <label>Fjalekalimi: </label>
        <input type="text"  required  name="fjalkalimi">
                <input type="submit" name="login" value="Login">
        </div>

</html>
