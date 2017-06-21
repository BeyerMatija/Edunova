
<?php

print_r($_POST);

if($_POST["korisnik"]=="matijab" && $_POST["lozinka"]=="mb"){
	
	//logiran si
	
	session_start();
	$_SESSION["logiran"]=$_POST["korisnik"];
	header("location: privatno/nadzornaploca.php");
}else{
	
	//nisi logiran
	
	header("location: login.php?neuspio&korisnik=" . $_POST["korisnik"]);
}

