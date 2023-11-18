create database winkel1;
use winkel1;

create table producten(
product_code int,
prijs decimal(6.2),
maat enum ('small', 'medium', 'large', 'Xlarge'),
primary key(product_code)
);

create table medewerkers(
medewerker_code int,
naam varchar(50),
functie enum ('kassa', 'manager', 'schoonmaak'),
primary key(medewerker_code)
);

create table Filiaal(
filiaal_code int,
locatie enum ('Amsterdam', 'Rotterdam'),
primary key(filiaal_code)
);

INSERT INTO producten (product_code, prijs, maat)
VALUES (1, 4.30, 1);

INSERT INTO producten (product_code, prijs, maat)
VALUES (2, 2.30, 3);

INSERT INTO producten (product_code, prijs, maat)
VALUES (3, 1.30, 1);

INSERT INTO producten (product_code, prijs, maat)
VALUES (4, 4.30, 2);

INSERT INTO medewerkers (medewerker_code, naam, functie)
VALUES (1, "jan", 2);
INSERT INTO medewerkers (medewerker_code, naam, functie)
VALUES (2, "kosa", 1);
INSERT INTO medewerkers (medewerker_code, naam, functie)
VALUES (3, "mus", 3);

INSERT INTO Filiaal (filiaal_code, locatie)
VALUES (1, 1);
