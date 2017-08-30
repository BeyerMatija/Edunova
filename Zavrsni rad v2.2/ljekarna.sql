drop database if exists ljekarna;
create database ljekarna default character set utf8;
use ljekarna;


create table korisnik(
sifra   int not null primary key auto_increment,
oib     char(11) not null,
ime     varchar(50) not null,
prezime varchar(50) not null
);

create table operater(
sifra  int not null primary key auto_increment,
korisnik int not null,
korisnicko_ime varchar(50) not null,
lozinka varchar(50) not null,
ljekarna int not null
);

create table posjeta(
sifra  int not null primary key auto_increment,
datum datetime not null,
korisnik int,
operater int not null
);

create table lijek(
sifra  int not null primary key auto_increment,
naziv  varchar(50) not null,
cijena decimal(18,2) default 0
);

create table podignuto(
posjeta int not null,
lijek int not null,
kolicina decimal(18,3) not null
);

// ALTERI //

alter table operater add foreign key (korisnik) references korisnik(sifra);

alter table posjeta add foreign key (operater) references operater(sifra);

alter table posjeta add foreign key (korisnik) references korisnik(sifra);

alter table podignuto add foreign key (lijek) references lijek(sifra);

alter table podignuto add foreign key (posjeta) references posjeta(sifra);

// LJEKARNA //

insert into ljekarna (naziv,oib) values ('Ljekarna1','12345678910');

// KORISNICI //

insert into korisnik (oib,ime,prezime) values (12345678911,'Matija','Beyer');
insert into korisnik (oib,ime,prezime) values (12345678912,'Ivan','Peric');
insert into korisnik (oib,ime,prezime) values (12345678913,'Domagoj','Beyer');
insert into korisnik (oib,ime,prezime) values (12345678914,'Ruben','Beyer');
insert into korisnik (oib,ime,prezime) values (54578545215,'Pero','Perić');
insert into korisnik (oib,ime,prezime) values (78954787458,'Marko','Blažević');
insert into korisnik (oib,ime,prezime) values (11114547892,'Roko','Rupić');
insert into korisnik (oib,ime,prezime) values (78954787457,'Marija','Blažević');
insert into korisnik (oib,ime,prezime) values (54578545214,'Anđa','Ivanković');
insert into korisnik (oib,ime,prezime) values (78954787451,'Jadranka','Matić');
insert into korisnik (oib,ime,prezime) values (11114547899,'Željko','Kendelić');
insert into korisnik (oib,ime,prezime) values (78954787445,'Mihovila','Budiselić');
insert into korisnik (oib,ime,prezime) values (54578545457,'Vera','Zec');
insert into korisnik (oib,ime,prezime) values (78954787458,'Marko','Blazević');
insert into korisnik (oib,ime,prezime) values (11114547457,'Anica','Benko');
insert into korisnik (oib,ime,prezime) values (78954787411,'Vera','Majher');
insert into korisnik (oib,ime,prezime) values (54578545201,'Ivan','Rašić');
insert into korisnik (oib,ime,prezime) values (78954787458,'Jerko','Tomić');
insert into korisnik (oib,ime,prezime) values (11114547892,'Davor','Bernardić');
insert into korisnik (oib,ime,prezime) values (78954787457,'Željko','Pervan');
insert into korisnik (oib,ime,prezime) values (54578545214,'Ante','Mrvica');
insert into korisnik (oib,ime,prezime) values (78954787451,'Domagoj','Matičić');
insert into korisnik (oib,ime,prezime) values (11114547899,'Hrvoje','Rendulić');
insert into korisnik (oib,ime,prezime) values (78954787445,'Miroslava','Nađ');
insert into korisnik (oib,ime,prezime) values (54578545457,'Veronika','Ivić');
insert into korisnik (oib,ime,prezime) values (78954787458,'Blaženka','Vekić');
insert into korisnik (oib,ime,prezime) values (11114547457,'Mirko','Subotić');
insert into korisnik (oib,ime,prezime) values (78954787411,'Marko','Buljubašić');
insert into korisnik (oib,ime,prezime) values (54578545201,'Ivan','Rajšić');

// OPERATERI //

insert into operater (korisnik, korisnicko_ime, lozinka,ljekarna) values (1, 'mb', md5('1234'), 1);
insert into operater (korisnik, korisnicko_ime, lozinka,ljekarna) values (2, 'ip', md5('1234'), 1);
insert into operater (korisnik, korisnicko_ime, lozinka,ljekarna) values (3, 'db', md5('1234'), 1);
insert into operater (korisnik, korisnicko_ime, lozinka,ljekarna) values (4, 'rb', md5('1234'), 1);

// LIJEKOVI //

insert into lijek (naziv,cijena) values ('Klavocin 600 mg',21.50);
insert into lijek (naziv,cijena) values ('Natrii cloridi 1000 ml',8.00);
insert into lijek (naziv,cijena) values ('Fursemid 20 mg',41.00);
insert into lijek (naziv,cijena) values ('Pelene za odrasle',35.30);
insert into lijek (naziv,cijena) values ('Acipan 40 mg',45.50);
insert into lijek (naziv,cijena) values ('Artenerol 25 ml',84.21);
insert into lijek (naziv,cijena) values ('Glukoza 5 %',47.30);
insert into lijek (naziv,cijena) values ('Valnorm 160 mg',101.50);
insert into lijek (naziv,cijena) values ('Duphalac 500 ml',98.30);
insert into lijek (naziv,cijena) values ('Ebrantil 60 mg',45.35);
insert into lijek (naziv,cijena) values ('Byol 5 mg',78.50);
insert into lijek (naziv,cijena) values ('Ciprinol 500 mg',73.14);
insert into lijek (naziv,cijena) values ('Fraxiparine 0.4 ml',44.40);
insert into lijek (naziv,cijena) values ('Heparin 5 ml',70.00);
insert into lijek (naziv,cijena) values ('Šprice Pvc Chirana',431);
insert into lijek (naziv,cijena) values ('Paracetamol 500 mg',12.10);
insert into lijek (naziv,cijena) values ('Ibuprofen 600 mg',20.01);
insert into lijek (naziv,cijena) values ('Lasix 40 mg',44.50);
insert into lijek (naziv,cijena) values ('Manitol 250 ml',45.12);
insert into lijek (naziv,cijena) values ('Ringer otopina 500 ml',47.30);
insert into lijek (naziv,cijena) values ('Clexane amp 40mg',21.50);
insert into lijek (naziv,cijena) values ('Aminoplasmal E 5%',8.00);
insert into lijek (naziv,cijena) values ('Almunorm 20%',41.00);
insert into lijek (naziv,cijena) values ('Baby Syst 21g',35.30);
insert into lijek (naziv,cijena) values ('Glucosi infudibile 5% BRAUN 250ml',45.50);
insert into lijek (naziv,cijena) values ('Pinox film tbl 160mg',84.21);
insert into lijek (naziv,cijena) values ('Moxaviv film tbl 0.2mg',47.30);
insert into lijek (naziv,cijena) values ('Moxaviv film tbl 0.4mg',101.50);
insert into lijek (naziv,cijena) values ('Moxaviv film tbl 0.6mg',98.30);
insert into lijek (naziv,cijena) values ('Fraxiparine amp 0.4 ml',45.35);
insert into lijek (naziv,cijena) values ('Byol 5 mg',78.50);
insert into lijek (naziv,cijena) values ('Ciprinol tbl 500mg',73.14);
insert into lijek (naziv,cijena) values ('Tritace tbl 2.5mg',44.40);
insert into lijek (naziv,cijena) values ('Lancete accu check safe-t-pro-plus Lancetar',70.00);
insert into lijek (naziv,cijena) values ('Paracetamol 1000 mg',431);
insert into lijek (naziv,cijena) values ('Vacutainer 367652',12.10);
insert into lijek (naziv,cijena) values ('Vacutainer 367614',20.01);
insert into lijek (naziv,cijena) values ('Vacutainer 363048',44.50);
insert into lijek (naziv,cijena) values ('Rukavice nitrilne 100 kom',45.12);
insert into lijek (naziv,cijena) values ('Diazepam amp. 10ml',47.30);
insert into lijek (naziv,cijena) values ('Dexametazolin amp 4ml',21.25);
insert into lijek (naziv,cijena) values ('Subclavis kat.XTP 126 mg',70.00);
insert into lijek (naziv,cijena) values ('Dermalon 30/1',70.00);
insert into lijek (naziv,cijena) values ('Ensure plus tetrapak 220ml JAGODA',8.00);
insert into lijek (naziv,cijena) values ('Ensure plus tetrapak 220ml VANILIJA',8.00);
insert into lijek (naziv,cijena) values ('Ensure plus tetrapak 220ml ČOKOLADA',8.00);
insert into lijek (naziv,cijena) values ('Ensure plus tetrapak 220ml NATURAL',8.00);
insert into lijek (naziv,cijena) values ('Lasix tbl 40mg',21.00);
insert into lijek (naziv,cijena) values ('Decortin tbl 45mg',28.00);
insert into lijek (naziv,cijena) values ('Duphalac tbl 10mg',27.00);
insert into lijek (naziv,cijena) values ('Aska pro tbl 100mg',21.00);
insert into lijek (naziv,cijena) values ('Amicasil amp 500mg',45.00);
insert into lijek (naziv,cijena) values ('Advagraf caps 3mg',21.00);
insert into lijek (naziv,cijena) values ('Myfortic tbl 340mg',21.00);
insert into lijek (naziv,cijena) values ('Diflucan caps 140mg',21.00);
insert into lijek (naziv,cijena) values ('Vankomicin lag 1mg',21.00);
insert into lijek (naziv,cijena) values ('Andol tbl 50mg',21.00);
insert into lijek (naziv,cijena) values ('Andol tbl 100mg',25.00);
insert into lijek (naziv,cijena) values ('Andol tbl 500mg',30.00);
insert into lijek (naziv,cijena) values ('Nisita 10g',26.00);


// POSJETE //

insert into posjeta (datum,operater,korisnik) values ('2017-06-25 12:05:36',1,1);
insert into posjeta (datum,operater) values ('2017-06-26 11:35:28',1,2);
insert into posjeta (datum,operater,korisnik) values ('2017-06-27 08:15:11',4,3);
insert into posjeta (datum,operater) values ('2017-06-28 09:45:12',1);
insert into posjeta (datum,operater,korisnik) values ('2017-06-29 10:21:59',2,5);
insert into posjeta (datum,operater,korisnik) values ('2017-06-30 17:45:15',2,6);
insert into posjeta (datum,operater) values ('2017-06-30 12:15:15',2);
insert into posjeta (datum,operater,korisnik) values ('2017-07-12 13:48:10',3,8);
insert into posjeta (datum,operater,korisnik) values ('2017-06-26 14:25:18',4,2);
insert into posjeta (datum,operater,korisnik) values ('2017-01-20 15:15:15',2,9);
insert into posjeta (datum,operater) values ('2017-10-15 16:32:25',1);
insert into posjeta (datum,operater) values ('2017-05-03 16:24:10',3);
insert into posjeta (datum,operater) values ('2017-12-14 17:14:21',2);
insert into posjeta (datum,operater,korisnik) values ('2017-05-12 14:48:10',3,11);
insert into posjeta (datum,operater,korisnik) values ('2017-06-20 16:25:18',4,15);
insert into posjeta (datum,operater,korisnik) values ('2017-09-22 17:15:15',2,18);
insert into posjeta (datum,operater) values ('2017-11-15 18:32:25',4);
insert into posjeta (datum,operater) values ('2017-05-10 19:24:10',3);
insert into posjeta (datum,operater) values ('2017-11-14 19:20:21',2);


// PODIGNUTO //

insert into podignuto (posjeta,lijek,kolicina) values (1,2,2.0);
insert into podignuto (posjeta,lijek,kolicina) values (2,2,2.0);
insert into podignuto (posjeta,lijek,kolicina) values (2,3,2.0);
insert into podignuto (posjeta,lijek,kolicina) values (2,5,1.0);
insert into podignuto (posjeta,lijek,kolicina) values (3,6,3.0);
insert into podignuto (posjeta,lijek,kolicina) values (5,7,3.0);
insert into podignuto (posjeta,lijek,kolicina) values (7,9,4.2);
insert into podignuto (posjeta,lijek,kolicina) values (9,11,2.5);
insert into podignuto (posjeta,lijek,kolicina) values (13,13,1.7);
insert into podignuto (posjeta,lijek,kolicina) values (14,15,3.7);
insert into podignuto (posjeta,lijek,kolicina) values (15,17,2.2);
insert into podignuto (posjeta,lijek,kolicina) values (16,18,2.0);
insert into podignuto (posjeta,lijek,kolicina) values (17,19,2.0);
insert into podignuto (posjeta,lijek,kolicina) values (18,20,1.0);
insert into podignuto (posjeta,lijek,kolicina) values (19,21,0.5);
insert into podignuto (posjeta,lijek,kolicina) values (20,22,0.7);
insert into podignuto (posjeta,lijek,kolicina) values (21,23,0.8);
insert into podignuto (posjeta,lijek,kolicina) values (22,24,0.9);
insert into podignuto (posjeta,lijek,kolicina) values (23,25,1.0);
insert into podignuto (posjeta,lijek,kolicina) values (24,26,3.0);
insert into podignuto (posjeta,lijek,kolicina) values (25,27,2.0);
insert into podignuto (posjeta,lijek,kolicina) values (26,28,2.0);
insert into podignuto (posjeta,lijek,kolicina) values (27,23,2.0);
insert into podignuto (posjeta,lijek,kolicina) values (28,35,1.0);
insert into podignuto (posjeta,lijek,kolicina) values (29,36,0.1);
insert into podignuto (posjeta,lijek,kolicina) values (30,31,2.0);
insert into podignuto (posjeta,lijek,kolicina) values (31,32,2.0);
insert into podignuto (posjeta,lijek,kolicina) values (32,33,2.0);
insert into podignuto (posjeta,lijek,kolicina) values (33,35,1.0);
insert into podignuto (posjeta,lijek,kolicina) values (34,36,3.0);
insert into podignuto (posjeta,lijek,kolicina) values (35,37,2.0);
insert into podignuto (posjeta,lijek,kolicina) values (36,20,2.0);
insert into podignuto (posjeta,lijek,kolicina) values (38,38,2.0);
insert into podignuto (posjeta,lijek,kolicina) values (39,45,1.0);
insert into podignuto (posjeta,lijek,kolicina) values (40,46,3.0);
insert into podignuto (posjeta,lijek,kolicina) values (41,47,0.2);
