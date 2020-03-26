<?php
$db = new
PDO( 'sqlite:baza.db' );
$sql = "
CREATE TABLE rezerwacje (
id INTEGER PRIMARY KEY AUTOINCREMENT, 
nazwisko VARCHAR,
imie VARCHAR,
mail VARCHAR,
nr_telefonu VARCHAR,
sala NUMERIC,
miejsce VARCHAR,
id_filmu INTEGER,
FOREIGN KEY(id_filmu) REFERENCES repertuar(id_filmu),
FOREIGN KEY(miejsce) REFERENCES miejsca(miejsce)

)
";
$db
->exec( 
$sql
)
;
$sql = "
INSERT INTO rezerwacje(nazwisko, imie, mail, nr_telefonu, sala, miejsce, id_filmu) 
VALUES( 'Kowalski', 'Jan', 'kowalski@wp.pl', '508916500', 2, 'E1', 3);
";
$count = $db
->exec($sql);
print "Do tabeli dodano $count wiersz(y)";
?>