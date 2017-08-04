<?php

include_once 'konfiguracija.php';

if (!isset ($_POST ["korisnik"]) || !isset ($_POST ["korisnik"])) {
	header ("location: " . $putanjaAPP . "index.php");	
}
//upit

$izraz=$veza->prepare ("select * from operater where email=:email and lozinka=md5(:lozinka)");

$izraz->execute (array ("email"=>$_POST["korisnik"], "lozinka"=>$_POST ["lozinka"]));

//operateri 

$opetater=$izraz->fetch (PDO::FETCH_OBJ);
if($operater=! null){
	$_SESSION["logiran"]=$operater;
	header ("location: " . $putanjaAPP . "privatno/nadzornaPloca.php");	
}else{
	header("location: " . $putanjaAPP . "javno/login.php?neuspio&korisnik=" . $_POST["korisnik"]);
}


