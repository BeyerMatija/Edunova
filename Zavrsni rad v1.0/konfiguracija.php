<?php 
session_start();


include_once 'funkcije.php';


$naslovAplikacije = "Ljekarna Beyer v1.0";

switch ($_SERVER["HTTP_HOST"] ) {
	case 'localhost':
			$putanjaAPP="/ZavrsniRad v1.0/";
			$mysqlHost='localhost';
			$mysqlBaza="ljekarna";
			
			// PROMIJENITI KORISNIKA I PASSWORD NA LOCALHOSTU //
			$mysqlKorisnik="edunova";
			$mysqlLozinka="edunova";
		break;
		
	case 'matijab.byethost12.com':
			$putanjaAPP="/ZavrsniRad/";
			$mysqlHost="sql303.byethost12.com";
			$mysqlBaza="b12_20152931_ljekarna";
			$mysqlKorisnik="b12_20152931";
			$mysqlLozinka="matrix091";
			break;
			
		default:
		$putanjaAPP="/";
		break;		
	}

try{
	$veza = new PDO ("mysql:host=" . $mysqlHost . ";dbname=" . $mysqlBaza,$mysqlKorisnik,$mysqlLozinka);
	$veza->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$veza->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$veza->exec("SET CHARACTER SET utf8");
	$veza->exec("SET NAMES utf8");
}catch(PDOException $e){
	switch ($e->getCode()) {
		case 2002:
			echo "Ne mogu se spojiti na MySQL server";
			break;
		case 1049:
			echo "Na MySQL serveru ne postoji baza s danim imenom";
			break;
		case 1045:
			echo "Na MySQL serveru ne postoji kombinacija danog korisničkom imena i lozinke";
			break;
		default:
			print_r($e);
			break;
	}
	exit;
}