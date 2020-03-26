<?php
$db = new
PDO( 'sqlite:baza.db' );
$sql = "SELECT * FROM rezerwacje ORDER BY id ";
$res = $db->query($sql);
while( $row= $res->fetch())
{
  
print  $row['id'] . ' - ' . $row['nazwisko'] . ' - ' . $row['imie']  . ' - ' . $row['mail'] . ' - ' . $row['nr_telefonu']  . ' - ' . $row['sala'] . ' - ' . $row['miejsce']  . ' - ' . $row['id_filmu'] . '<br> '.PHP_EOL;
}
?>