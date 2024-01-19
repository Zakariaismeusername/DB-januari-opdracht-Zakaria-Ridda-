Create database Rent_a_car;

Use Rent_a_car;

Create table cars (
car_id int primary key,
Bouwjaar int,
model varchar (255),
merk varchar (255)
);

create table klanten (
klanten_id int primary key,
naam varchar(255),
telefoonnummer int,
adres varchar (255),
Email_adres text,
kenteken varchar (255)
);

create table verhuur (
verhuur_id int primary key,
auto_id int,
huur_datum date,
huur_periode date,
klanten_id int,
kosten decimal (6,2)
);







