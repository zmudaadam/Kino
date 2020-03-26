<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Kino Sopot</title>
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
                <h2>Repertuar</h2>
            <form>
<?php


$db = new PDO( 'sqlite:baza.db' ); 
  
$sql = "SELECT * FROM repertuar ORDER BY id_filmu";
$res = $db->query($sql);
while( $row= $res->fetch())
{
print ' - ' . $row['nazwa'] . ' - ' . $row['godzina'] . ' - ' . $row['data'] . ' - Sala: ' . $row['sala'] . ' - Cena: ' . $row['cena'] . ' PLN ' . '<br> '.PHP_EOL;
}
                ?>
</form>
         <h2>Już wkrótce</h2>
            <form>- MASMIX - PHP Reaktywacja<br>
            - Baywatch<br>
			- Man of Steel<br>
			- Batman Odkupienie<br>
			- Być, nie być<br>
			- Ojciec Chrzestny - odrodzenie<br>
			- Tatoo.. Niee!<br>
			- Sniper<br>
			- Kocha, nie rozumie..<br>
			- Man of Steel VS Grand mother<br>
            - Rocky X</form>
                <br><br>

        <footer>
 
            <br>
            Copyright © 2017 KINO ZMUDZIK. All rights reserved.          
        </footer>
        </div>
    </body>
</html>
		