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
								<th>Datum</th>
								<th>Korisnik</th>
								<th>Operater</th>
								<th>Akcija</th>
							</tr>
						</thead>
						<tbody>
							<?php 
						
							$izraz = $veza->prepare("select 
													p.sifra,
													p.datum,
													k.ime,
													k.prezime,
													o.korisnicko_ime
													from posjeta p
													left join korisnik k on k.sifra= p.korisnik
													left join operater o on o.sifra=p.operater
													order by p.datum DESC;
													");
							
							$izraz->execute();
							$posjete = $izraz->fetchAll(PDO::FETCH_OBJ);
							foreach ($posjete as $posjeta) :
							?>
							<tr>
								<td><?php echo $posjeta->datum; ?></td>
								<td><?php echo $posjeta->ime ." ". $posjeta->prezime; ?></td>
								<td><?php echo $posjeta->korisnicko_ime;?></td>
								<td>
									
									<a href="<?php echo $putanjaAPP. "privatno/posjeta/detalji.php?sifra=".$posjeta->sifra?>"><i title="Detalji" class="step fi-eye size-48"></i></a>
							   </td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table> 	
       </div>
  		<div class="small-12 medium-3 large-3 columns"> 
  			<a href="<?php echo $putanjaAPP. "privatno/posjeta/unesi.php";?>">
  				<button class="success button expanded" style="float: right; width:80%;background: #14679e; color:white; margin-right: 25px;">Unesi novu</button></a>
  		</div>
  	</div>   
	<?php	include_once '../../predlosci/podnozje.php'; ?>
   <?php	include_once '../../predlosci/skripte.php'; ?>
  </body>
</html>

