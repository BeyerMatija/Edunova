<?php
include_once '../konfiguracija.php';
$izraz=$veza->prepare("select operater.*, korisnik.ime as ime from operater left join korisnik on korisnik.sifra = operater.korisnik where korisnicko_ime=:korisnicko_ime and lozinka=:lozinka");
//različitom mi se zovu POST parametri od parametara upita pa ih mapiram putem asocijativnog niza
$izraz->execute(array("korisnicko_ime"=>$_POST["korisnicko_ime"], "lozinka" =>$_POST["lozinka"]));
//dohvatim operatera
$operater = $izraz->fetch(PDO::FETCH_OBJ);
if($operater){
	$_SESSION['user'] = $operater->ime;
	header("Location: ../index.php");
}else{
	echo 'uneseni podaci nisu ispravni';
}

?>