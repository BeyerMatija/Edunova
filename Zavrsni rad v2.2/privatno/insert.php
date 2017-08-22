<?php
include_once '../../konfiguracija.php';
//uzimamo podatke iz post metode i kreiramo upit
$izraz= $veza->prepare("insert into lijek (naziv, cijena) values(:naziv, :cijena)");
//nakon sto smo pripremili upi izvršimo ga s nasim parametrima
$izraz->execute(array("naziv" => $_POST['naziv'], "cijena" => $_POST["cijena"]));
//nakon uspješnog brisanja vrati nas na listu lijekova
header("Location: index.php");
