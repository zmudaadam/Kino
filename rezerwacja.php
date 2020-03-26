<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>KINO ZMUDZIK</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    
        
    </head>


    <body>
        <header>
            <img src="images/logo.jpg">
        </header>
        <nav>

           <a href="index.php">Home</a>

           <a href="repertuar.php">Repertuar</a>

		   <a href="rezerwacja.html">Rezerwuj</a>

           <a href="kontakt.html">Kontakt</a>

            
        </nav>
        <div id="content">
            <p></p>
            <form><?php

if (isset($_POST['pt'])) {

 if(isset($_COOKIE['dzien']))    
{
     header('Location: rezerwacja.php');
    setcookie ("dzien", "", time() - 3600);
     $dzien = 1;
setcookie("dzien", $dzien, time()+3600);
}   
$dzien = 1;
setcookie("dzien", $dzien, time()+3600);
}

elseif (isset($_POST['sob'])) {

if(isset($_COOKIE['dzien']))    
{
    header('Location: rezerwacja.php');
    setcookie ("dzien", "", time() - 3600);
    $dzien = 2;
setcookie("dzien", $dzien, time()+3600);
}
header('Location: rezerwacja.php');    
$dzien = 2;
setcookie("dzien", $dzien, time()+3600);
}

elseif (isset($_POST['nie'])) {

if(isset($_COOKIE['dzien']))    
{
    header('Location: rezerwacja.php');
    setcookie ("dzien", "", time() - 3600);
    $dzien = 3;
setcookie("dzien", $dzien, time()+3600);
}    
$dzien = 3;
setcookie("dzien", $dzien, time()+3600);   
}
                    
                


?>     </form> 
         <h2>Uzupełnij dane</h2>
             <form action="rezerwuj.php" method="POST">
        
        Seans: <select name="seans">
  <?php $dzien = $_COOKIE['dzien']; if($dzien==1) {print'<option value="1">';} ?>
<?php $db = new PDO( 'sqlite:baza.db' ); $sql = "SELECT * FROM repertuar WHERE id_filmu=1"; $res = $db->query($sql); $row= $res->fetch(); print  $row['id_filmu'] . ' - ' . $row['nazwa'] . ' - ' . $row['data'] . ' - ' . $row['godzina'] .PHP_EOL; ?></option>
  <?php $dzien = $_COOKIE['dzien']; if($dzien==1) {print'<option value="2">';} ?>
      <?php $db = new PDO( 'sqlite:baza.db' ); $sql = "SELECT * FROM repertuar WHERE id_filmu=2"; $res = $db->query($sql); $row= $res->fetch(); print  $row['id_filmu'] . ' - ' . $row['nazwa'] . ' - ' . $row['data'] . ' - ' . $row['godzina'] .PHP_EOL; ?></option>
  <?php $dzien = $_COOKIE['dzien']; if($dzien==1) {print'<option value="3">';} ?><?php $db = new PDO( 'sqlite:baza.db' ); $sql = "SELECT * FROM repertuar WHERE id_filmu=3"; $res = $db->query($sql); $row= $res->fetch(); print  $row['id_filmu'] . ' - ' . $row['nazwa'] . ' - ' . $row['data'] . ' - ' . $row['godzina'] .PHP_EOL; ?></option>
<?php $dzien = $_COOKIE['dzien']; if($dzien==1) {print'<option value="4">';} ?><?php $db = new PDO( 'sqlite:baza.db' ); $sql = "SELECT * FROM repertuar WHERE id_filmu=4"; $res = $db->query($sql); $row= $res->fetch(); print  $row['id_filmu'] . ' - ' . $row['nazwa'] . ' - ' . $row['data'] . ' - ' . $row['godzina'] .PHP_EOL; ?></option>
<?php $dzien = $_COOKIE['dzien']; if($dzien==2) {print'<option value="5">';} ?><?php $db = new PDO( 'sqlite:baza.db' ); $sql = "SELECT * FROM repertuar WHERE id_filmu=5"; $res = $db->query($sql); $row= $res->fetch(); print  $row['id_filmu'] . ' - ' . $row['nazwa'] . ' - ' . $row['data'] . ' - ' . $row['godzina'] .PHP_EOL; ?></option>
<?php $dzien = $_COOKIE['dzien']; if($dzien==2) {print'<option value="6">';} ?><?php $db = new PDO( 'sqlite:baza.db' ); $sql = "SELECT * FROM repertuar WHERE id_filmu=6"; $res = $db->query($sql); $row= $res->fetch(); print  $row['id_filmu'] . ' - ' . $row['nazwa'] . ' - ' . $row['data'] . ' - ' . $row['godzina'] .PHP_EOL; ?></option>
<?php $dzien = $_COOKIE['dzien']; if($dzien==2) {print'<option value="7">';} ?><?php $db = new PDO( 'sqlite:baza.db' ); $sql = "SELECT * FROM repertuar WHERE id_filmu=7"; $res = $db->query($sql); $row= $res->fetch(); print  $row['id_filmu'] . ' - ' . $row['nazwa'] . ' - ' . $row['data'] . ' - ' . $row['godzina'] .PHP_EOL; ?></option>
<?php $dzien = $_COOKIE['dzien']; if($dzien==2) {print'<option value="8">';} ?><?php $db = new PDO( 'sqlite:baza.db' ); $sql = "SELECT * FROM repertuar WHERE id_filmu=8"; $res = $db->query($sql); $row= $res->fetch(); print  $row['id_filmu'] . ' - ' . $row['nazwa'] . ' - ' . $row['data'] . ' - ' . $row['godzina'] .PHP_EOL; ?></option>
<?php $dzien = $_COOKIE['dzien']; if($dzien==2) {print'<option value="9">';} ?><?php $db = new PDO( 'sqlite:baza.db' ); $sql = "SELECT * FROM repertuar WHERE id_filmu=9"; $res = $db->query($sql); $row= $res->fetch(); print  $row['id_filmu'] . ' - ' . $row['nazwa'] . ' - ' . $row['data'] . ' - ' . $row['godzina'] .PHP_EOL; ?></option>
<?php $dzien = $_COOKIE['dzien']; if($dzien==3) {print'<option value="10">';} ?><?php $db = new PDO( 'sqlite:baza.db' ); $sql = "SELECT * FROM repertuar WHERE id_filmu=10"; $res = $db->query($sql); $row= $res->fetch(); print  $row['id_filmu'] . ' - ' . $row['nazwa'] . ' - ' . $row['data'] . ' - ' . $row['godzina'] .PHP_EOL; ?></option>
<?php $dzien = $_COOKIE['dzien']; if($dzien==3) {print'<option value="11">';} ?><?php $db = new PDO( 'sqlite:baza.db' ); $sql = "SELECT * FROM repertuar WHERE id_filmu=11"; $res = $db->query($sql); $row= $res->fetch(); print  $row['id_filmu'] . ' - ' . $row['nazwa'] . ' - ' . $row['data'] . ' - ' . $row['godzina'] .PHP_EOL; ?></option>
<?php $dzien = $_COOKIE['dzien']; if($dzien==3) {print'<option value="12">';} ?><?php $db = new PDO( 'sqlite:baza.db' ); $sql = "SELECT * FROM repertuar WHERE id_filmu=12"; $res = $db->query($sql); $row= $res->fetch(); print  $row['id_filmu'] . ' - ' . $row['nazwa'] . ' - ' . $row['data'] . ' - ' . $row['godzina'] .PHP_EOL; ?></option>
<?php $dzien = $_COOKIE['dzien']; if($dzien==3) {print'<option value="13">';} ?><?php $db = new PDO( 'sqlite:baza.db' ); $sql = "SELECT * FROM repertuar WHERE id_filmu=13"; $res = $db->query($sql); $row= $res->fetch(); print  $row['id_filmu'] . ' - ' . $row['nazwa'] . ' - ' . $row['data'] . ' - ' . $row['godzina'] .PHP_EOL; ?></option>
  
</select>         
    <br><br>        
         


    
        <input type="submit" value="Dalej"/> 
</form>
            <footer>

            <br>
            Copyright © 2017 KINO ZMUDZIK. All rights reserved.         
        </footer>
        </div>
    </body>
</html>