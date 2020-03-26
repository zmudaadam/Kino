<?php 
$miejsca;
$a=0;
if(isset($_POST['A1']))
{
$a++;    
$miejsca[$a] = $_POST['A1'];    
}
if(isset($_POST['A2']))
{
$a++;    
$miejsca[$a] = $_POST['A2'];       
}
if(isset($_POST['A3']))
{
$a++;    
$miejsca[$a] = $_POST['A3'];    
}
if(isset($_POST['A4']))
{
$a++;    
$miejsca[$a] = $_POST['A4'];       
}
if(isset($_POST['B1']))
{
$a++;    
$miejsca[$a] = $_POST['B1'];    
}
if(isset($_POST['B2']))
{
$a++;    
$miejsca[$a] = $_POST['B2'];       
}
if(isset($_POST['B3']))
{
$a++;    
$miejsca[$a] = $_POST['B3'];    
}
if(isset($_POST['B4']))
{
$a++;    
$miejsca[$a] = $_POST['B4'];       
}

if(isset($_POST['C1']))
{
$a++;    
$miejsca[$a] = $_POST['C1'];    
}
if(isset($_POST['C2']))
{
$a++;    
$miejsca[$a] = $_POST['C2'];       
}
if(isset($_POST['C3']))
{
$a++;    
$miejsca[$a] = $_POST['C3'];    
}
if(isset($_POST['C4']))
{
$a++;    
$miejsca[$a] = $_POST['C4'];       
}
if(isset($_POST['D1']))
{
$a++;    
$miejsca[$a] = $_POST['D1'];    
}
if(isset($_POST['D2']))
{
$a++;    
$miejsca[$a] = $_POST['D2'];       
}
if(isset($_POST['D3']))
{
$a++;    
$miejsca[$a] = $_POST['D3'];    
}
if(isset($_POST['D4']))
{
$a++;    
$miejsca[$a] = $_POST['D4'];       
}

if(isset($_POST['E1']))
{
$a++;    
$miejsca[$a] = $_POST['E1'];    
}
if(isset($_POST['E2']))
{
$a++;    
$miejsca[$a] = $_POST['E2'];       
}
if(isset($_POST['E3']))
{
$a++;    
$miejsca[$a] = $_POST['E3'];    
}
if(isset($_POST['E4']))
{
$a++;    
$miejsca[$a] = $_POST['E4'];       
}
if(isset($_POST['F1']))
{
$a++;    
$miejsca[$a] = $_POST['F1'];    
}
if(isset($_POST['F2']))
{
$a++;    
$miejsca[$a] = $_POST['F2'];       
}
if(isset($_POST['F3']))
{
$a++;    
$miejsca[$a] = $_POST['F3'];    
}
if(isset($_POST['F4']))
{
$a++;    
$miejsca[$a] = $_POST['F4'];       
}

if(isset($_POST['G1']))
{
$a++;    
$miejsca[$a] = $_POST['G1'];    
}
if(isset($_POST['G2']))
{
$a++;    
$miejsca[$a] = $_POST['G2'];       
}
if(isset($_POST['G3']))
{
$a++;    
$miejsca[$a] = $_POST['G3'];    
}
if(isset($_POST['G4']))
{
$a++;    
$miejsca[$a] = $_POST['G4'];       
}
if(isset($_POST['H1']))
{
$a++;    
$miejsca[$a] = $_POST['H1'];    
}
if(isset($_POST['H2']))
{
$a++;    
$miejsca[$a] = $_POST['H2'];       
}
if(isset($_POST['H3']))
{
$a++;    
$miejsca[$a] = $_POST['H3'];    
}
if(isset($_POST['H4']))
{
$a++;    
$miejsca[$a] = $_POST['H4'];       
}

    for($b=1; $b<=$a; $b++)
{
print $nazwisko . $imie . $mail. $nr_telefonu . $sala . $id_filmu . $miejsca[$b] ;    
/*$sql = "INSERT INTO rezerwacje(nazwisko, imie, mail, nr_telefonu, sala, id_filmu, miejsce) 
        VALUES('$nazwisko', '$imie', '$mail', '$nr_telefonu', '$sala', '$id_filmu', '$miejsca[$b]')";
        $db->exec($sql);
    if($sql)
    {
        header("location: potwierdzenie.php");
    }*/
                ?>