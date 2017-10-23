<?php

include_once '../konfiguracija.php';

$izraz=$veza->prepare("select operater.*,korisnik.ime as ime,korisnik.prezime as prezime from operater left join korisnik on korisnik.sifra = operater.korisnik where korisnicko_ime=:korisnicko_ime and lozinka=md5(:lozinka)");
//različitom mi se zovu POST parametri od parametara upita pa ih mapiram putem asocijativnog niza
$izraz->execute(array("korisnicko_ime"=>$_POST["korisnicko_ime"], "lozinka" =>$_POST["lozinka"]));
//dohvatim operatera
$operater = $izraz->fetch(PDO::FETCH_OBJ);
if($operater){

	if($operater->isAdmin == 1){
		$_SESSION["admin"]=1;
	}
	$_SESSION['user'] = $operater-> ime ." ". $operater->prezime;
	$_SESSION["user_id"] = $operater->sifra;
	header("Location: ../index.php");
}else{
	header("Location: ../javno/login.php?error=true");
}

?>
