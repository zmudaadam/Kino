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
            <h2>Finalizacja</h2>
            <form>
            <?php 
            $dir = 'sqlite:baza.db';
    $db = new PDO($dir) or die ("cannot open");
            $mail = $_COOKIE['mail'];     
$nr_telefonu = $_COOKIE['nr_telefonu'];
            $id_filmu = $_COOKIE['id_filmu'];
            $ile = current($db->query("SELECT COUNT(*) FROM rezerwacje WHERE mail='$mail' AND nr_telefonu='$nr_telefonu' AND id_filmu='$id_filmu'")->fetch());
            $sql = "SELECT * FROM rezerwacje WHERE mail='$mail' AND nr_telefonu='$nr_telefonu' AND id_filmu='$id_filmu'";
            $res = $db->query($sql);
$row= $res->fetch();

    print  'Nazwisko: ' . $row['nazwisko'] . '<br> Imię: ' . $row['imie']  . '<br> Email: ' . $row['mail'] . '<br> Nr. Telefonu: ' . $row['nr_telefonu']  . '<br> Sala: ' . $row['sala'] . '<br> Miejsce: '.PHP_EOL;
            $msc = "SELECT miejsce FROM rezerwacje WHERE mail='$mail' AND nr_telefonu='$nr_telefonu' AND id_filmu='$id_filmu'";
                $res1 = $db->query($msc);
while($row1= $res1->fetch())
{
    print  $row1['miejsce'] . ', '.PHP_EOL;
}
                print '<br>Do zapłaty: ' . $ile*20 . ' PLN';
            ?></form>
            <footer>
                
                
            <a href="#"><img src="images/fb.png"></a>&nbsp;
            <a href="#"><img src="images/gp.png"></a>&nbsp;

            
            <br>
            Copyright © 2017 KINO ZMUDZIK. All rights reserved.             
        </footer>
        </div>
    </body>
</html>