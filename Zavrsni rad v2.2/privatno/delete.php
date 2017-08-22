<?php
include_once '../../konfiguracija.php';
//uzimamo šifru odabranog lijeka yza brisanje koju smo dobili iz url-a pomoću get metode
$sifra = $_GET['sifra'];
//ovdje napraviti provjeru koristi li se taj lijek negdje(racun, posjeta..) ako da,nemozes obrisati ako ne brisi (select * from posjeta where lijek=:sifra) ...onda ide execute ...i ako postoji tj koristi se nemoj brisati
//pripremamo upit u bazu za delete...znaci brisemo iz tablice lijek gdje je sifra lijeka ona sifra koju smo dobili
$izraz= $veza->prepare("delete from lijek where sifra=:sifra");
//nakon sto smo pripremili upit izvršimo ga s našom šifrom
$izraz->execute(array("sifra" => $sifra));
//nakon uspješnog brisanja vrati nas na listu lijekova
header("Location: index.php");
