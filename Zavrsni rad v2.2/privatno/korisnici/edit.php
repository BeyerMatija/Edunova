<?php
include_once '../../konfiguracija.php';
//uzimamo podatke iz post metode i kreiramo upit
$izraz= $veza->prepare("update korisnik set ime=:ime,prezime=:prezime,oib=:oib where sifra=:sifra");
//nakon sto smo pripremili upit izvršimo ga s nasim parametrima
$izraz->execute(array("ime" => $_POST['ime'],"prezime" => $_POST['prezime'],"oib" => $_POST['oib'], "sifra" => $_POST['sifra']));
//nakon uspješnog brisanja vrati nas na listu korisnika
header("Location: index.php");
