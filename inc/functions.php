
<?php 

$dbCon = null;

session_start();
dbConnection();
function dbConnection() {
    global $dbCon;
    $dbCon = mysqli_connect('localhost', 'root', '', 'employee');
    if (!$dbCon) {
        die("Deshtoi lidhja " . mysqli_error($dbCon));
    }
}


function shikoPuntort() {
    global $dbCon;
    $sql = "SELECT p.puntoretid, p.emriPuntorit, p.mbiemri, p.telefoni, p.nrpersonal, p.datafillimit, p.komuna, d.emri FROM puntoret p JOIN departamenti d ON p.departamentiid = d.departamentiid";
    $result = mysqli_query($dbCon, $sql);
    return $result;
}


function shtoPuntor($emriPuntorit, $mbiemri, $telefoni, $nrpersonal, $datalindjes, $datafillimit, $shteti, $komuna, $departamentiid) {
    global $dbCon;
    $sql = "INSERT INTO puntoret(emriPuntorit, mbiemri, telefoni, nrpersonal, datalindjes, datafillimit, shteti, komuna, departamentiid)";
    $sql .= " VALUES ('$emriPuntorit', '$mbiemri', '$telefoni', '$nrpersonal', '$datalindjes', '$datafillimit', '$shteti', '$komuna', '$departamentiid')";
    $result = mysqli_query($dbCon, $sql);
    if ($result) {
        header("Location: shikopuntort.php");
    } else {
        die("Deshtoi" . mysqli_error($dbCon));
    }
}

 function shikoDepartamentet(){
    global $dbCon;
    $sql = "SELECT * FROM `departamenti`";
    $result = mysqli_query($dbCon,$sql);
    return $result;
 }

 function fshijPuntor($puntoretid){
    global $dbCon;
    $sql = "DELETE FROM `puntoret` WHERE puntoretid = $puntoretid";
    $result = mysqli_query($dbCon,$sql);
    if($result){
       
        header("Location: shikopuntort.php");
    }else{
        die("deshtoi" . mysqli_error($dbCon));
    }
 }

 function shuma(){
    global $dbCon;
    $sql = "SELECT COUNT(*) as totali FROM puntoret";
    $result = mysqli_query($dbCon,$sql);
 return $result;
    
 }
 
 function shumaDepartamentev(){
    global $dbCon;
    $sql = "SELECT COUNT(*) as tota FROM departamenti";
    $result = mysqli_query($dbCon,$sql);
    return $result;

 }

 function modifikopuntor($puntoretid, $emriPuntorit, $mbiemri, $telefoni, $nrpersonal, $datalindjes, $datafillimit, $shteti, $komuna, $departamentiid) {
    global $dbCon;
    $sql = "UPDATE puntoret SET emriPuntorit='$emriPuntorit', mbiemri='$mbiemri', telefoni='$telefoni', nrpersonal='$nrpersonal', datalindjes='$datalindjes', datafillimit='$datafillimit', shteti='$shteti', komuna='$komuna', departamentiid='$departamentiid' WHERE puntoretid='$puntoretid'";
    $result = mysqli_query($dbCon, $sql);
    if ($result) {
        header("Location: shikopuntort.php");
    } else {
        die("Deshtoi " . mysqli_error($dbCon));
    }
}

function fshijdepartament($departamentiid){
    global $dbCon;
    $sql = "DELETE  FROM `departamenti` WHERE departamentiid = $departamentiid";
    $result = mysqli_query($dbCon,$sql);
    if($result){
        header("Location: shikodepartamentet.php");
    }else{
        die("Deshtoi" . mysqli_error($dbCon));
    }
}

function shtodepartament($emri,$pershkrimi){
    global $dbCon;
    $sql = "INSERT INTO departamenti(emri,pershkrimi) VALUES ('$emri','$pershkrimi')";
    $result = mysqli_query($dbCon,$sql);
    if($result){
        header("Location: shikodepartamentet.php");
        }else{
            die("deshtoi" . mysqli_error($dbCon));
        }
}
function search($emri){
    global $dbCon;
    $sql = "SELECT p.puntoretid, p.emriPuntorit, p.mbiemri, p.telefoni, p.nrpersonal, p.datafillimit, p.komuna, d.emri FROM puntoret p JOIN departamenti d ON p.departamentiid = d.departamentiid WHERE emriPuntorit LIKE '%$emri%'";
    $results = mysqli_query($dbCon,$sql);
    return $results;
}

function merrPuntoriid($puntoriid){
    global $dbCon;
    $sql = "SELECT * FROM puntoret WHERE puntoretid = $puntoriid";
    $results = mysqli_query($dbCon,$sql);
    return $results;
}


//Login FORM

function login($email,$fjalkalimi){
    global $dbCon;
    $sql = "SELECT * FROM administrator WHERE email = '$email' AND fjalekalimi= '$fjalkalimi'";
    $result = mysqli_query($dbCon,$sql);

    if($result){
        if(mysqli_num_rows($result) == 1) {
            while($row = mysqli_fetch_assoc($result)){
               $_SESSION['emri'] = $row['emri'];
               $_SESSION['mbiemri'] = $row['mbiemri'];
            }
            
            header("Location: index.php");
           
        }
            
        
    }
}


?>