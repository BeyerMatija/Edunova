 <?php include_once '../../konfiguracija.php';  ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../../predlosci/head.php'; ?>
  </head>
  <body>
  	<?php include_once '../../predlosci/menu.php'; ?>
  	
  	<div class="row">
  		<div class="large-6">
  			<a href="<?php echo $putanjaAPP. "privatno/lijekovi/unesi.php";?>"><button class="success button">Unesi novi</button></a>
  			</div>
  	</div>
  	  	    <table>
		<thead>
			<tr>
								
			<th width="200">Naziv</th>
			<th>Cijena</th>
			<th>Obriši</th>
			<th>Uredi</th>
			
			
			</tr>
		</thead>
			<tbody>
				<?php 
						
				$izraz = $veza->prepare("select * from lijek");
							
				$izraz->execute();
				$lijekovi = $izraz->fetchAll(PDO::FETCH_OBJ);
				foreach ($lijekovi as $lijek) :
				?>
		<tr>
			<td><?php echo $lijek->naziv; ?></td>
			<td><?php echo $lijek->cijena; ?></td>
			<td><a href="<?php echo $putanjaAPP. "privatno/lijekovi/delete.php?sifra=".$lijek->sifra?>">OBRIŠI</a></td>
			<td><a href="<?php echo $putanjaAPP. "privatno/lijekovi/uredi.php?sifra=".$lijek->sifra?>">UREDI</a></td>
			
		</tr>
			    <?php endforeach; ?>
			</tbody>
		</table> 	
       
	<?php	include_once '../../predlosci/podnozje.php'; ?>
   <?php	include_once '../../predlosci/skripte.php'; ?>
  </body>
</html>

