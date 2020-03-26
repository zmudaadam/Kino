<?php
$db = new
PDO( 'sqlite:baza.db' );
$sql = "
CREATE TABLE repertuar (
id_filmu INTEGER PRIMARY KEY AUTOINCREMENT, 
nazwa VARCHAR,
data VARCHAR,
godzina VARCHAR,
sala NUMERIC,
cena NUMERIC
)
";
$db
->exec( 
$sql
)
;
$sql = "
INSERT INTO repertuar(nazwa, data, godzina, sala, cena) 
VALUES( 'KROL ARTUR; LEGENDA MIECZA', '07.07.2017', '14:00', 1, 20);
INSERT INTO repertuar(nazwa, data, godzina, sala, cena) 
VALUES( 'KROL ARTUR; LEGENDA MIECZA', '07.07.2017', '16:00', 1, 20);
INSERT INTO repertuar(nazwa, data, godzina, sala, cena) 
VALUES( 'GRU, DRU I MINIONKI ', '07.07.2017', '16:00', 2, 20);
INSERT INTO repertuar(nazwa, data, godzina, sala, cena) 
VALUES( 'KROL ARTUR; LEGENDA MIECZA', '07.07.2017', '18:00', 1, 20);


INSERT INTO repertuar(nazwa, data, godzina, sala, cena) 
VALUES( 'GRU, DRU I MINIONKI ', '08.07.2017', '13:00', 1, 20);
INSERT INTO repertuar(nazwa, data, godzina, sala, cena) 
VALUES( 'KROL ARTUR; LEGENDA MIECZA', '08.07.2017', '14:00', 2, 20);
INSERT INTO repertuar(nazwa, data, godzina, sala, cena) 
VALUES( 'GRU, DRU I MINIONKI ', '08.07.2017', '15:00', 1, 20);
INSERT INTO repertuar(nazwa, data, godzina, sala, cena) 
VALUES( 'KROL ARTUR; LEGENDA MIECZA', '08.07.2017', '16:00', 2, 20);
INSERT INTO repertuar(nazwa, data, godzina, sala, cena) 
VALUES( 'KROL ARTUR; LEGENDA MIECZA', '08.07.2017', '18:00', 1, 20);

INSERT INTO repertuar(nazwa, data, godzina, sala, cena) 
VALUES( 'KROL ARTUR; LEGENDA MIECZA', '09.07.2017', '14:00', 1, 20);
INSERT INTO repertuar(nazwa, data, godzina, sala, cena) 
VALUES( 'GRU, DRU I MINIONKI ', '09.07.2017', '15:00', 2, 20);
INSERT INTO repertuar(nazwa, data, godzina, sala, cena) 
VALUES( 'KROL ARTUR; LEGENDA MIECZA', '09.07.2017', '17:00', 2, 20);
INSERT INTO repertuar(nazwa, data, godzina, sala, cena) 
VALUES( 'GRU, DRU I MINIONKI ', '09.07.2017', '18:00', 1, 20);

";
$count = $db
->exec($sql);
print "Do tabeli dodano $count wiersz(y)";
?>