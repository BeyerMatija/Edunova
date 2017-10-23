<?php
include_once '../../konfiguracija.php'; 
include_once '../../funkcije.php'; provjeralogin(); 
//uzimamo šifru odabranog korisnika za brisanje koju smo dobili iz url-a pomoću get metode
$sifra = $_GET['sifra'];
//ovdje napraviti provjeru koristi li se taj lijek negdje(racun, posjeta..) ako da,nemozes obrisati ako ne brisi (select * from korisnici where korisnik=:sifra) ...onda ide execute ...i ako postoji tj koristi se nemoj brisati
//pripremamo upit u bazu za delete...znaci brisemo iz tablice korisnik gdje je sifra korisnika ona sifra koju smo dobili
$izraz= $veza->prepare("delete from korisnik where sifra=:sifra");
//nakon sto smo pripremili upit izvršimo ga s našom šifrom
$izraz->execute(array("sifra" => $sifra));
//nakon uspješnog brisanja vrati nas na listu korisnika
header("Location: index.php");
?>
