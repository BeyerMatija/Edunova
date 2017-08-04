drop database if exists ljekarna;
create database ljekarna default character set utf8;
use ljekarna;

create table ljekarna(
sifra   int not null primary key auto_increment,
naziv   varchar(50) not null,
oib     char(11) not null
);

create table korisnik(
sifra   int not null primary key auto_increment,
oib     char(11) not null,
ime     varchar(50) not null,
prezime varchar(50) not null,
racun   decimal(18,2)    
);

create table operater(
sifra  int not null primary key auto_increment,
ime    varchar(50) not null,
prezime varchar(50) not null,
ljekarna int not null
);

create table lijek(
sifra  int not null primary key auto_increment,
naziv  varchar(50) not null,
cijena decimal(18,2) default 0
);

create table posjeta(
sifra  int not null primary key auto_increment,
datum datetime not null,
ljekarna int not null,
korisnik int not null
);

create table podignuto(
posjeta datetime not null,
lijek int not null,
kolicina decimal(18,3) not null,
cijena decimal(18,2)
);


alter table operater add foreign key (ljekarna) references ljekarna(sifra);

alter table posjeta add foreign key (korisnik) references korisnik(sifra);
alter table posjeta add foreign key (ljekarna) references ljekarna(sifra);

alter table podignuto add foreign key (lijek) references lijek(sifra);
alter table podignuto add foreign key (posjeta) references posjeta(sifra);


insert into ljekarna (naziv,oib) values ('Ljekarna1','12345678910');

insert into operater (ime,prezime,ljekarna) values ('Matija','Beyer',1);
insert into operater (ime,prezime,ljekarna) values ('Ivan','Peric',1);
insert into operater (ime,prezime,ljekarna) values ('Domagoj','Beyer',1);
insert into operater (ime,prezime,ljekarna) values ('Ruben','Beyer',1);

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
insert into lijek (naziv,cijena) values ('šprice pvc Chirana',431);
insert into lijek (naziv,cijena) values ('Paracetamol 500 mg',12.10);
insert into lijek (naziv,cijena) values ('ibuprofen 600 mg',20.01);
insert into lijek (naziv,cijena) values ('Lasix 40 mg',44.50);
insert into lijek (naziv,cijena) values ('manitol 250 ml',45.12);
insert into lijek (naziv,cijena) values ('Ringer otopina 500 ml',47.30);

insert into korisnik (oib,ime,prezime) values (54578545214,'Pero','Peric');
insert into korisnik (oib,ime,prezime) values (78954787458,'Marko','Blazevic');
insert into korisnik (oib,ime,prezime) values (11114547892,'Roko','Rupic');
insert into korisnik (oib,ime,prezime) values (78954787457,'Marija','Blazevic');
insert into korisnik (oib,ime,prezime) values (54578545214,'Anđa','Ivankovic');
insert into korisnik (oib,ime,prezime) values (78954787451,'jadranka','Matic');
insert into korisnik (oib,ime,prezime) values (11114547899,'Željko','Kendelic');
insert into korisnik (oib,ime,prezime) values (78954787445,'Mihovila','Budiselic');
insert into korisnik (oib,ime,prezime) values (54578545457,'Vera','Zec');
insert into korisnik (oib,ime,prezime) values (78954787458,'Marko','Blazevic');
insert into korisnik (oib,ime,prezime) values (11114547457,'Anica','Benko');
insert into korisnik (oib,ime,prezime) values (78954787411,'Vera','Majher');
insert into korisnik (oib,ime,prezime) values (54578545201,'Ivan','Rasic');

insert into posjeta (datum,ljekarna,korisnik) values (2017-06-25, 1, 1);
insert into posjeta (datum,ljekarna,korisnik) values (2017-06-26, 1, 2);
insert into posjeta (datum,ljekarna,korisnik) values (2017-06-27, 1, 3);
insert into posjeta (datum,ljekarna,korisnik) values (2017-06-28, 1, 4);
insert into posjeta (datum,ljekarna,korisnik) values (2017-06-29, 1, 5);
insert into posjeta (datum,ljekarna,korisnik) values (2017-06-30, 1, 6);
insert into posjeta (datum,ljekarna,korisnik) values (2017-06-31, 1, 7);
insert into posjeta (datum,ljekarna,korisnik) values (2017-07-12, 1, 8);
insert into posjeta (datum,ljekarna,korisnik) values (2017-06-26, 1, 2);

insert into podignuto (posjeta,lijek,kolicina,cijena) values ('Racun 1','Heparin 5 ml',2.0,73.14);

