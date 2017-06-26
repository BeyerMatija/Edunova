<?php

include_once 'konfiguracija.php';

if(!isset($_POST["korisnik"]) || !isset($_POST["korisnik"])){
	header("location: " . $putanjaAPP . "index.php");
}

//kasije će doći spajanje na bazu
if($_POST["korisnik"]=="matijab" && $_POST["lozinka"]=="mb"){
	$_SESSION["logiran"]=$_POST["korisnik"];
	header("location: " . $putanjaAPP . "privatno/nadzornaploca.php");
}else{
	//nisi logiran
	header("location: " . $putanjaAPP . "javno/login.php?neuspio&korisnik=" . $_POST["korisnik"]);
}
