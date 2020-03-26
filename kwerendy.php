<?php
$db = new
PDO( 'sqlite:baza.db' );
$sql = "SELECT COUNT(*) FROM rezerwacje INNER JOIN miejsca ON miejsca.miejsce = rezerwacje.miejsce ";
if($sql==1)
{
    echo 1;
}
else
{
   echo 0;
}

?>