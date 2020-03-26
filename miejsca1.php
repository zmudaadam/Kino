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
            <h2>Sala 2: Wybór miejsc</h2>
            <h3>EKRAN</h3>
              <form action="zarezerwuj.php" method="POST" style="text-align:center;">     


<input name='E1' id="E1" value="E1" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='E1' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="E1" value='E1'></label>
                  
<input name='E2' id="E2" value="E2" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='E2' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="E2" value='E2'></label>                    
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name='E3' id="E3" value="E3" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='E3' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="E3" value='E3'></label> 
                  
<input name='E4' id="E4" value="E4" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='E4' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="E4" value='E4'></label> <br>                    
                  
<input name='F1' id="F1" value="F1" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='F1' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="F1" value='F1'></label>
                  
<input name='F2' id="F2" value="F2" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='F2' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="F2" value='F2'></label>                    
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name='F3' id="F3" value="F3" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='F3' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="F3" value='F3'></label> 
                  
<input name='F4' id="F4" value="F4" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='F4' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="F4" value='F4'></label> <br>    
                  
<input name='G1' id="G1" value="G1" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='G1' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="G1" value='G1'></label>
                  
<input name='G2' id="G2" value="G2" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='G2' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="G2" value='G2'></label>                    
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name='G3' id="G3" value="G3" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='G3' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="G3" value='G3'></label> 
                  
<input name='G4' id="G4" value="G4" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='G4' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="G4" value='G4'></label> <br>   
                  
<input name='H1' id="H1" value="H1" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='H1' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="H1" value='H1'></label>
                  
<input name='H2' id="H2" value="H2" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='H2' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="H2" value='H2'></label>                    
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name='H3' id="H3" value="H3" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='H3' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="H3" value='H3'></label> 
                  
<input name='H4' id="H4" value="H4" type="checkbox" <?php
$id_filmu = $_COOKIE['id_filmu'];       
$db = new
PDO( 'sqlite:baza.db' );
$sql = current($db->query("SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce WHERE miejsca.miejsce='H4' AND miejsca.czy_zajete=1 AND rezerwacje.id_filmu='$id_filmu'")->fetch());
if($sql==1)
{
    echo 'checked disabled';
}
?>><label for="H4" value='H4'></label> <br>                     
                  
                  
                  
                  
                  
                  
               <br>   
        <input type="submit" value="Dalej"/> 
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