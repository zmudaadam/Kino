<?php

            


 session_start();
$dir = 'sqlite:baza.db';
$db = new PDO($dir) or die ("cannot open");
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$mail = $_POST['mail'];
$nr_telefonu = $_POST['nr_telefonu'];
$id_filmu = $_COOKIE['id_filmu'];
$sala = $_COOKIE['sala'];
$ile = current($db->query("SELECT COUNT(*) FROM rezerwacje WHERE nr_telefonu='$nr_telefonu'")->fetch());
$ile2 = current($db->query("SELECT COUNT(*) FROM rezerwacje WHERE mail='$mail'")->fetch());

setcookie("imie" , $imie, time()+3600);
setcookie("nazwisko" , $nazwisko, time()+3600);
setcookie("mail" , $mail, time()+3600);
setcookie("nr_telefonu" , $nr_telefonu, time()+3600);


$sprawdz = '/^[a-zA-Z0-9.\-_]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]{2,5}$/';


if($ile==0 && $ile2==0 && strlen($imie)>=3 && strlen($nazwisko)>=2 && preg_match($sprawdz, $mail) && strlen($nr_telefonu)==9 && isset($_POST['checkbox']) && $_POST['checkbox'] == 1)
{   
    
$msc;
$a = $_COOKIE['value'];
for($b=1; $b<=$a; $b++)
{
            $msc[$b] = $_COOKIE['miejsca'.$b];
            //print $nazwisko . $imie .$msc[$b];
           
  $sql = "INSERT INTO rezerwacje(nazwisko, imie, mail, nr_telefonu, sala, id_filmu, miejsce) 
        VALUES('$nazwisko', '$imie', '$mail', '$nr_telefonu', '$sala', '$id_filmu', '$msc[$b]')";
        $db->exec($sql);
    if($sql)
    {
        header("location: potwierdzenie.php");
    }
     
}
}
else{
    echo "<script type=\"text/javascript\"> window.alert('Prosze poprawnie uzupełnić wszystkie pola!');javascript:history.go(-1);</script>";
}
?>