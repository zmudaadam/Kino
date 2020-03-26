<?php
$db = new
PDO( 'sqlite:baza.db' );
$sql = "
CREATE TABLE miejsca (
miejsce VARCHAR PRIMARY KEY,
czy_zajete BOOLEAN,
sala NUMERIC)
";
$db->exec($sql);
$sql = "
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'A1', 1, 1);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'A2', 1, 1);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'A3', 1, 1);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'A4', 1, 1);

INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'B1', 1, 1);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'B2', 1, 1);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'B3', 1, 1);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'B4', 1, 1);

INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'C1', 1, 1);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'C2', 1, 1);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'C3', 1, 1);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'C4', 1, 1);

INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'D1', 1, 1);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'D2', 1, 1);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'D3', 1, 1);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'D4', 1, 1);

INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'E1', 1, 2);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'E2', 1, 2);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'E3', 1, 2);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'E4', 1, 2);

INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'F1', 1, 2);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'F2', 1, 2);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'F3', 1, 2);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'F4', 1, 2);

INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'G1', 1, 2);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'G2', 1, 2);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'G3', 1, 2);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'G4', 1, 2);

INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'H1', 1, 2);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'H2', 1, 2);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'H3', 1, 2);
INSERT INTO miejsca(miejsce, czy_zajete, sala) 
VALUES( 'H4', 1, 2);
";
$count = $db->exec($sql);
print "Do tabeli dodano $count wiersz(y)";
?>