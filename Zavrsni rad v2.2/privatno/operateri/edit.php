<?php
include_once '../../konfiguracija.php';
include_once '../../funkcije.php'; provjeralogin();
//uzimamo podatke iz post metode i kreiramo upit
$izraz= $veza->prepare("update operater set korisnicko_ime=:korisnicko_ime where sifra=:sifra");
//nakon sto smo pripremili upi izvršimo ga s nasim parametrima
$izraz->execute(array("korisnicko_ime" => $_POST["korisnicko_ime"],"sifra" => $_POST['sifra']));
//nakon uspješnog brisanja vrati nas na listu operatera
header("Location: index.php");
