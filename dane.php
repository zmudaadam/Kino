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

     
         <h2>Uzupełnij dane</h2>
             <form action="dane2.php" method="POST">
        Imie: <input type ="text" name="imie"/><br><br>
        Nazwisko: <input type ="text" name="nazwisko"/><br><br>
        Email: <input type ="text" name="mail"/><br><br>
        Numer Telefonu: <input type ="text" name="nr_telefonu"/><br><br>
                    <br><br>        
         <input type="checkbox" name="checkbox" value="1" /> Potwierdzam, że zapoznałem się z <a href="regulamin.html">regulaminem</a> <br><br>


    
        <input type="submit" value="Dalej"/> 
</form>
            <footer>

            <br>
            Copyright © 2017 KINO ZMUDZIK. All rights reserved.         
        </footer>
        </div>
    </body>
</html>