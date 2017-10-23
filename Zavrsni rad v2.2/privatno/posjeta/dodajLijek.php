<?php
include_once '../../konfiguracija.php';
include_once '../../funkcije.php'; provjeralogin();
//uzimamo podatke iz post metode i kreiramo upit
$izraz= $veza->prepare("insert into podignuto (lijek,kolicina, posjeta) values(:lijek, :kolicina, :posjeta)");
//nakon sto smo pripremili upi izvršimo ga s nasim parametrima
$izraz->execute(array("lijek" => $_POST['lijek'], "kolicina" => $_POST["kolicina"], "posjeta" => $_POST["posjeta"]));
//nakon uspješnog brisanja vrati nas na listu lijekova
$put = "Location: detalji.php?sifra=" . $_POST["posjeta"];
header($put);
