 <?php include_once '../../konfiguracija.php';  ?>
 <?php include_once '../../funkcije.php'; provjeralogin(); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../../predlosci/head.php'; ?>
  </head>
  <body>
  	<?php include_once '../../predlosci/menu.php'; ?>
  	
  	<div class ="grid-x">
  		<div class="medium-3 large-3 cell"></div>
  		<div class="medium-6 large-6 cell">	
  	
							<?php 
							$ukupno=0;
							//opet imamo parametar iz url-a
						    $sifra = $_GET['sifra'];
							//pripramamo upit tako da selektiramo lijek gdje je sifra jednaka nasoj sifri
							$izraz = $veza->prepare("select 
													p.sifra,
													po.sifra as podignuto_sifra,
													po.lijek,
													po.kolicina,
													l.naziv,
													l.cijena
													from posjeta p
													left join korisnik k on k.sifra= p.korisnik
													left join operater o on o.sifra=p.operater
													left join podignuto po on po.posjeta = p.sifra
													left join lijek l on l.sifra = po.lijek
													where p.sifra=:sifra");
							$izraz->execute(array("sifra" => $sifra));
							//rezultat koji dobijemo spremamo u našu varijabliu $lijek
							$lijekovi = $izraz->fetchAll(PDO::FETCH_OBJ);
							$izraz2 =  $veza->prepare("select 
													p.sifra,
													p.datum,
													k.ime,
													k.prezime,
													o.korisnicko_ime
													from posjeta p
													left join korisnik k on k.sifra= p.korisnik
													left join operater o on o.sifra=p.operater
													where p.sifra=:sifra");
						    $izraz2->execute(array("sifra" => $sifra));
							//rezultat koji dobijemo spremamo u našu varijabliu $lijek
							$detalji = $izraz2->fetch(PDO::FETCH_OBJ);				   
							       ?>
				     <h4 class="text-center"><b>Detalji posjete</b></h4>
	  
	    			<h5><td><b><?php echo date("d.m.Y G:i:s",strtotime($detalji->datum)); ?></b></td></h5>
	    			
	    		<div class="row grid-x">
	    			
  					<div class="medium-6 large-6 cell">
	    			<div class>Korisnik:<b style="color: #a53b2a"><?php echo $detalji->ime. " ". $detalji->prezime;?></b>
	    			<div>Operater:<b><?php echo $detalji->korisnicko_ime;?></b></div>
	    		</div>    
	    		</div>
	    		
	    		
	    			
	    		
  					
	    		<div class="large-12 medium-12 cell"> 
	    	 <table>
					<thead>
							<tr>
								<th>Naziv</th>
								<th>Cijena</th>
								<th>Količina</th>
								<th>Ukupna cijena</th>
								<th>Akcija</th>
							</tr>
					</thead>
			<tbody>
					<?php
					foreach($lijekovi as $lijek):
					?>
					
				<tr>
					<td><?php echo $lijek->naziv;?></td>
					<td><?php echo $lijek->cijena;?></td>
					<td><?php printf("%.3f", $lijek->kolicina);?></td>
					<td><?php printf("%.2f kn", ($lijek->kolicina * $lijek->cijena)); ?></td>
					<?php
					$ukupno = $ukupno + ($lijek->kolicina * $lijek->cijena);
					?>
					<td>
						<a href="<?php echo $putanjaAPP;?>privatno/posjeta/obrisiLijek.php?sifra=
							<?php echo $lijek->podignuto_sifra; ?>&posjeta=<?php echo $lijek->sifra; ?>"><i title="Obriši" class="step fi-trash size-48"></i> Obriši</a>
					</td>
				</tr>
						<?php endforeach;?>
						<tr>
							<td></td>
							<td></td>
							<td><b>Ukupno:</b></td>
							<td> <?php printf("%.2f kn", ($ukupno));?> </td>
							<td></td>
						</tr>
			</tbody>
	    </table>
	   </div>
	</div>
	    		
	    	<div class="large-12 medium-12 cell"> 
	    		
	    			<?php
	    			$izraz = $veza->prepare("select * from lijek");
							
				    $izraz->execute();
				    $lijekovi = $izraz->fetchAll(PDO::FETCH_OBJ);
	    			?>
	    			
	    			<form method="post" action="<?php echo $putanjaAPP;?>privatno/posjeta/dodajLijek.php">
	    				<input name="posjeta" value="<?php echo $sifra;?>" type="hidden"></input>
	    			<label>Lijek :
			         <select name="lijek">
			     	<?php
			     	foreach($lijekovi as $lijek):
						?>
  					<option value="<?php echo $lijek->sifra;?>"><?php echo $lijek->naziv;?></option>
  					<?php
					endforeach; ?>
				    </select> 
			  		</label>
			  		<label>Količina:
			    <input type="number" name="kolicina" placeholder="Unesite količinu">
			    <input type="submit" class="button expanded" value="Unesi"></input>
			     </form>
			  </label>
	    		
	    		<a href="<?php echo $putanjaAPP;?>privatno/posjeta/index.php">
			  <button class="alert button expanded" name="povratak">Povratak</button>
				</a>
      
	    </div>
	  
	<?php	include_once '../../predlosci/podnozje.php'; ?>
   <?php	include_once '../../predlosci/skripte.php'; ?>
  </body>
</html>


