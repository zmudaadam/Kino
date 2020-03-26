<?php
 session_start();
$dir = 'sqlite:baza.db';
$db = new PDO($dir) or die ("cannot open");
$id_filmu = $_POST['seans'];
setcookie("id_filmu", $id_filmu, time()+3600);
    if($id_filmu==3 || $id_filmu==6 || $id_filmu==8 || $id_filmu==11 || $id_filmu==12 )
    {
        setcookie("sala", "2", time()+3600);
        header("Location: miejsca1.php");
    }
    elseif($id_filmu==1 || $id_filmu==2 || $id_filmu==4 || $id_filmu==5 || $id_filmu==7 || $id_filmu==9 || $id_filmu==10 || $id_filmu==13 )
    {
        setcookie("sala", "1", time()+3600);
        header("Location: miejsca2.php");
    }
    else {
        echo "<script type=\"text/javascript\"> window.alert('Podano zły numer seansu!');javascript:history.go(-1);</script>";    
    }

?>