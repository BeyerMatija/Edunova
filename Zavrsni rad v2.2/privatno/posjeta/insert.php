<?php
include_once '../../konfiguracija.php';
include_once '../../funkcije.php'; provjeralogin();
//uzimamo podatke iz post metode i kreiramo upit
$izraz= $veza->prepare("insert into posjeta (datum, korisnik, operater) values(NOW(), :korisnik, :operater)");
//nakon sto smo pripremili upi izvršimo ga s nasim parametrima
$izraz->execute(array("korisnik" => $_POST['korisnik'], "operater" => $_POST["operater"]));
//nakon uspješnog brisanja vrati nas na listu lijekova
header("Location: index.php");
