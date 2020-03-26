<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>KINO ZMUDZIK</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            
            h3{
                margin-bottom:50px;
            }            
            
        input[type=checkbox] {
    display:none;
}

input[type=checkbox] + label {
   background:url(images/chair3.png); 
                background-size:100%;
    height: 50px;
    width: 50px;
    display:inline-block;
    margin: 3px;
}

input[type=checkbox]:checked + label {
    background: url(images/chair2.png); background-size:100%;
    height: 50px;
    width: 50px;
    display:inline-block;
    margin: 3px;
}
            
    input[type=checkbox]:disabled + label {
    background: url(images/chair.png); background-size:100%;
    height: 50px;
    width: 50px;
    display:inline-block;
    margin: 3px;
}
        </style>
        
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
            <h2>Sala 1: Wybór Miejsc</h2>
            <h3>EKRAN</h3>
              <form action="zarezerwuj.php" method="POST" style="text-align:center;">     


<input name='A1' id="A1" value="A1" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='A1' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="A1" value='A1'></label>
                  
<input name='A2' id="A2" value="A2" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='A2' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="A2" value='A2'></label>                    
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name='A3' id="A3" value="A3" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='A3' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="A3" value='A3'></label> 
                  
<input name='A4' id="A4" value="A4" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='A4' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="A4" value='A4'></label> <br>                    
                  
<input name='B1' id="B1" value="B1" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='B1' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="B1" value='B1'></label>
                  
<input name='B2' id="B2" value="B2" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='B2' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="B2" value='B2'></label>                    
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name='B3' id="B3" value="B3" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='B3' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="B3" value='B3'></label> 
                  
<input name='B4' id="B4" value="B4" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='B4' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="B4" value='B4'></label> <br>    
                  
<input name='C1' id="C1" value="C1" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='C1' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="C1" value='C1'></label>
                  
<input name='C2' id="C2" value="C2" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='C2' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="C2" value='C2'></label>                    
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name='C3' id="C3" value="C3" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='C3' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="C3" value='C3'></label> 
                  
<input name='C4' id="C4" value="C4" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='C4' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="C4" value='C4'></label> <br>   
                  
<input name='D1' id="D1" value="D1" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='D1' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="D1" value='D1'></label>
                  
<input name='D2' id="D2" value="D2" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='D2' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="D2" value='D2'></label>                    
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name='D3' id="D3" value="D3" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='D3' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="D3" value='D3'></label> 
                  
<input name='D4' id="D4" value="D4" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='D4' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="D4" value='D4'></label> <br>                     
                  
                  
                  
                  
                  
                  
               <br>   
        <input type="submit" value="Dalej"> 
        <input type="reset" value="Reset">
            <footer>
                
                
            <a href="#"><img src="images/fb.png"></a>&nbsp;
            <a href="#"><img src="images/gp.png"></a>&nbsp;

            
            <br>
            Copyright © 2017 KINO ZMUDZIK. All rights reserved.             
        </footer>
        </div>
    </body>
</html>