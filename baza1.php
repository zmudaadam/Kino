<?php
$db = new
PDO( 'sqlite:baza.db' );
$sql = "SELECT * FROM miejsca ORDER BY miejsce ";
$res = $db->query($sql);
print 'miejsce   ---   czy_zajete   ---   sala  <br>';  
while( $row= $res->fetch())
{
  
print  $row['miejsce'] . ' - ' . $row['czy_zajete'] . ' - ' . $row['sala']  . '<br> '.PHP_EOL;
}
?>