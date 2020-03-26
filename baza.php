<?php
$db = new
PDO( 'sqlite:baza.db' );
$sql = "SELECT * FROM repertuar ORDER BY id_filmu ";
$res = $db->query($sql);
print 'id_filmu   ---   nazwa   ---   godzina  ---   data   ---   sala    ---   cena  <br>';  
while( $row= $res->fetch())
{
  
print  $row['id_filmu'] . ' - ' . $row['nazwa'] . ' - ' . $row['data'] . ' - ' . $row['godzina'] . ' - ' . $row['sala'] . ' - ' . $row['cena'] . ' - ' . '<br> '.PHP_EOL;
}
?>