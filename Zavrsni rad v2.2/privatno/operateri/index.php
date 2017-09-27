 <?php include_once '../../konfiguracija.php';  ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../../predlosci/head.php'; ?>
  </head>
  <body>
  	<?php include_once '../../predlosci/menu.php'; ?>
  	<div class="row">
  		<div class="large-12">
  			<a href="<?php echo $putanjaAPP. "privatno/operateri/unesi.php";?>"><button class="success button">Unesi novi</button></a>
  			</div>
  	</div>
  	    <table>
						<thead>
							<tr>
								<th>Ime</th>
								<th>Prezime</th>
								<th>Korisničko ime</th>
								<th>OIB</th>
								<th>Obriši</th>
								<th>Promjeni</th>
								
							</tr>
						</thead>
						<tbody>
							<?php 
						
							$izraz = $veza->prepare("select 
													o.sifra, 
													o.korisnicko_ime,
													k.ime, 
													k.prezime, 
													k.oib
													from operater o
													left join korisnik k on k.sifra=o.korisnik");
							
							$izraz->execute();
							$operateri = $izraz->fetchAll(PDO::FETCH_OBJ);
							foreach ($operateri as $operater) :
							?>
							<tr>
								
								
								<td><?php echo $operater->ime; ?></td>
								<td><?php echo $operater->prezime; ?></td>
								<td><?php echo $operater->korisnicko_ime; ?></td>
								<td><?php echo $operater->oib; ?></td>
								<td><a href="<?php echo $putanjaAPP. "privatno/operateri/delete.php?sifra=".$operater->sifra?>"><i title="Obriši" class="step fi-page-delete size-48"></i></a></td>
								<td><a href="<?php echo $putanjaAPP. "privatno/operateri/uredi.php?sifra=".$operater->sifra?>"><i title="Uredi" class="step fi-page-edit size-48"></i></a></td>
								
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table> 	
       
	<?php	include_once '../../predlosci/podnozje.php'; ?>
   <?php	include_once '../../predlosci/skripte.php'; ?>
  </body>
</html>

