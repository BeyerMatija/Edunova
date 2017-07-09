<?php include_once '../../konfiguracija.php'; provjeraLogin(); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<?php include_once '../../predlosci/head.php'; ?>
	</head>
	<body>
		<?php include_once '../../predlosci/izbornik.php'; ?>
		<div class="row">
			<div class="large-12 columns">
				<?php 
				
				abstract class  Osoba{
					
					private $podaci=array();
					
					//magic methods
					public function __get($kljuc){
						if (array_key_exists($kljuc, $this->podaci)){
							return $this->podaci[$kljuc];
						}
						return "";
					}
					
					public function __set($kljuc,$vrijednost){
						$this->podaci[$kljuc]=$vrijednost;
					}
					
				
					
					//konstruktor
					public function __construct($ime,$prezime){
						$this->ime=$ime;
						$this->prezime=$prezime;
					}
					
						//enkapsulacija - učahurivanje
					private $ime;
					private $prezime;
					
					
					//PHP može imati samo jedan konstruktor
					// public function __construct(){
						// $this->ime=$ime;
						// $this->prezime=$prezime;
					// }
					
					
					public function pozdrav(){
						return $this->ime . " " . $this->prezime;
					}
					
					// getteri, setteri
					public function getIme(){
						return $this->ime;
					}
					public function setIme($ime){
						$this->ime=$ime;
					}
					
					
					public function getPrezime(){
						return $this->prezime;
					}
				
					public function setPrezime($prezime){
						$this->prezime = $prezime;
					}
				}
				
				class Polaznik extends Osoba{
					
					public function __construct($ime, $prezime, $brojUgovora){
						parent::__construct($ime, $prezime);
						$this->brojUgovora=$brojUgovora;
					}
					
					private $brojUgovora;
					
					public function getBrojUgovora(){
						return $this->brojUgovora;
					}
				
					public function setBrojUgovora($brojUgovora){
						$this->brojUgovora = $brojUgovora;
					}
	
				}
				
				class Predavac extends Osoba{
					public function __construct($ime, $prezime, $ziroRacun){
						parent::__construct($ime, $prezime);
						$this->ziroRacun=$ziroRacun;
					}
					private $ziroRacun;
					
					public function getZiroRacun(){
						return $this->ziroRacun;
					}
				
					public function setZiroRacun($ziroRacun){
						$this->ziroRacun = $ziroRacun;
					}
	
				}
				
				
				//$o = new Osoba();
				//$o->ime="Pero";
				//$o->prezime="Perić";
				//$o=new Osoba("Pero","Perić");
				//echo $o->pozdrav();
				
				
				//echo $p->pozdrav();
				
				
				
			
				// $niz = array();
				// $niz[]=$o;
		
				// $o = new Osoba();
				// $o->ime="Mario";
				// $o->prezime="Petranović";
				
				// $niz[]=$o;
				
				// print_r($niz);
				
				?>
				<hr />
				
				
				<?php 
				//OVO ĆEMO KORISTITI
				$o = new stdClass();
				$o->visina=180;
				$o->tezina=78;
				
				print_r($o);
				
				?>
			</div>
		</div>
		<?php	include_once '../../predlosci/podnozje.php'; ?>
		<?php	include_once '../../predlosci/skripte.php'; ?>
		
	</body>
</html>
