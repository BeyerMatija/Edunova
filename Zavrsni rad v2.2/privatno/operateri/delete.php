<?php
include_once '../../konfiguracija.php';
include_once '../../funkcije.php'; provjeralogin();
//uzimamo šifru odabranog operatera za brisanje koju smo dobili iz url-a pomoću get metode
$sifra = $_GET['sifra'];
//ovdje napraviti provjeru koristi li se taj operater negdje(racun, posjeta..) ako da,nemozes obrisati ako ne brisi (select * from posjeta where operater=:sifra) ...onda ide execute ...i ako postoji tj koristi se nemoj brisati
//pripremamo upit u bazu za delete...znaci brisemo iz tablice operater gdje je sifra operatera ona sifra koju smo dobili
$izraz= $veza->prepare("delete from operater where sifra=:sifra");
//nakon sto smo pripremili upit izvršimo ga s našom šifrom
$izraz->execute(array("sifra" => $sifra));
//nakon uspješnog brisanja vrati nas na listu operatera
header("Location: index.php");
