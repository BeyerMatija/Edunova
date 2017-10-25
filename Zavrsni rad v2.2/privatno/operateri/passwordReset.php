<?php
include_once '../../konfiguracija.php';
include_once '../../funkcije.php'; provjeralogin(); 

if(isset($_POST["lozinka"]) && isset($_POST["passwordConfirm"]) && $_POST["lozinka"] == $_POST["passwordConfirm"])
{
//uzimamo podatke iz post metode i kreiramo upit
$izraz= $veza->prepare("update operater set lozinka=md5(:lozinka) where sifra=:sifra");
//nakon sto smo pripremili upit izvršimo ga s nasim parametrima
$izraz->execute(array("lozinka" => $_POST['lozinka'], "sifra" => $_POST['sifra']));
//nakon uspješnog brisanja vrati nas na listu korisnika
header("Location: index.php");
}else{
	$put = "Location: passEdit.php?sifra=".$_POST["sifra"]. "&ERROR=1";

	header($put);
}
