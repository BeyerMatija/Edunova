<?php
include_once '../../konfiguracija.php';
include_once '../../funkcije.php'; provjeralogin();
//uzimamo podatke iz post metode i kreiramo upit
$izraz= $veza->prepare("update lijek set naziv=:naziv, cijena=:cijena where sifra=:sifra");
//nakon sto smo pripremili upi izvršimo ga s nasim parametrima
$izraz->execute(array("naziv" => $_POST['naziv'], "cijena" => $_POST["cijena"],"sifra" => $_POST['sifra']));
//nakon uspješnog brisanja vrati nas na listu lijekova
header("Location: index.php");
