<?php
include_once '../../konfiguracija.php';
include_once '../../funkcije.php'; provjeralogin();
//uzimamo podatke iz post metode i kreiramo upit
$izraz= $veza->prepare("insert into operater (korisnik, korisnicko_ime,lozinka) values(:korisnik, :korisnicko_ime, md5(:lozinka))");
//nakon sto smo pripremili upi izvršimo ga s nasim parametrima
$izraz->execute(array("korisnik" => $_POST["korisnik"],"korisnicko_ime" => $_POST["korisnicko_ime"], "lozinka" => $_POST["lozinka"]));
//nakon uspješnog brisanja vrati nas na listu operateri
header("Location: index.php");
