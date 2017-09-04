<?php
include_once '../../konfiguracija.php';
//uzimamo podatke iz post metode i kreiramo upit
$izraz= $veza->prepare("insert into korisnik (ime, prezime, oib) values(:ime, :prezime, :oib)");
//nakon sto smo pripremili upit izvršimo ga s nasim parametrima
$izraz->execute(array("ime" => $_POST["ime"],"prezime" => $_POST["prezime"],"oib" => $_POST["oib"]));

//nakon uspješnog unosa vrati nas na listu korisnika

header("Location: index.php");
