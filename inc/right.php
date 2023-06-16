<?php include 'inc/functions.php'; ?>
<div class="right">
    <div class="h2">
                <h2 >Dashboard</h2>
        <?php  echo "<h2>" . "Welcome: " .  $_SESSION['emri'] . " " . $_SESSION['mbiemri'] . "</h2>"; ?>
    </div>
                <div class="cards">
                <div class="card1">
                        <i class="fa-sharp fa-solid fa-users"></i>
                    <div class="text">
                    <h3>Puntorë të Regjistruar</h3>
                    <?php  $res = shuma();
                    while($row = mysqli_fetch_assoc($res)){
                        echo "<h4>" . $row['totali'] . "</h4>";
                    }
                    
                    ?>
                        
                    
                    </div>
                </div>
                <div class="card1">
               
                   <i class="fa-sharp fa-solid fa-building"></i>
                
                   <div class="text">
                    <h3> Departamentet </h3>
                   <?php  $res = shumaDepartamentev();
                    while($row = mysqli_fetch_assoc($res)){
                        echo "<h4>" . $row['tota'] . "</h4>";
                    }
                    ?>
                    </div>
                </div>
                   
               
                </div>
            </div>