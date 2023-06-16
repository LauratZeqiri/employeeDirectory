<?php include 'inc/header.php'; ?>

<?php include 'inc/functions.php'; ?>
<?php include 'inc/left.php'; ?>
<?php 
            if(isset($_GET['puntoriid'])){
                $puntoretid = $_GET['puntoriid'];
            };

            if(isset($_POST['fshij'])){
            fshijPuntor($puntoretid);
        };
             ?>

<link rel="stylesheet" href="tabela.css">
<form class="shtopun shto"  action="" method="post">
                <h2>Forma për fshirje</h2>
                <input type="submit" name="fshij" id="fshij" value="fshij">

                