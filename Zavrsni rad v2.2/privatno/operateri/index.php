 <?php include_once '../../konfiguracija.php';  ?>
 <?php include_once '../../funkcije.php'; provjeralogin(); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../../predlosci/head.php'; ?>
  </head>
  <body>
  	<?php include_once '../../predlosci/menu.php'; ?>
  	
  	<div class="row grid-x margin-top-20">
  	<div class="medium-3 large-3 columns"></div>
  	<div class="small-12 medium-6 large-6 columns">
  	
  	    <table>
				<thead>
					<tr>
						<th>Ime i Prezime</th>
						<th>Korisničko ime</th>
						<th>Akcija</th>
								
						<?php
								
						if(isset($_SESSION["admin"])){
							
								?>
						<th>Promjena lozike</th>
						
							<?php  } ?>
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
								
								<td>
									<?php echo $operater->ime; ?>
									<?php echo $operater->prezime; ?>
								</td>
								<td><?php echo $operater->korisnicko_ime; ?></td>
								
								<td>
									<a href="<?php echo $putanjaAPP. "privatno/operateri/uredi.php?sifra=".$operater->sifra?>"><i title="Uredi" class="step fi-page-edit size-48"></i></a>
									<a href="<?php echo $putanjaAPP. "privatno/operateri/delete.php?sifra=".$operater->sifra?>"><i title="Obriši" class="step fi-trash size-48"></i></a>
								</td>
								<?php
								if(isset($_SESSION["admin"])){
									
								
								?>
								<td> 
									<a href="<?php echo $putanjaAPP. "privatno/operateri/passEdit.php?sifra=".$operater->sifra?>">
										<i title="Promjeni lozinku" class="step fi-key size-48"></i></a></td>
								<?php  }; ?>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<div class="small-12 medium-3 large-3 columns">
					
		<a href="<?php echo $putanjaAPP. "privatno/operateri/unesi.php";?>">
			
  		<button class="success button expanded" style="float: right; width:80%;background: #14679e; color:white; margin-right: 25px;">Unesi novi</button></a>
  	</div>
  </div>				
	<?php	include_once '../../predlosci/podnozje.php'; ?>
   <?php	include_once '../../predlosci/skripte.php'; ?>
  </body>
</html>

