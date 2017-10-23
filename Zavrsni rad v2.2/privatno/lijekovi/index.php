 <?php include_once '../../konfiguracija.php'; ?>
 <?php include_once '../../funkcije.php'; provjeralogin(); ?> 
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../../predlosci/head.php'; ?>
  </head>
  <body>
  	<?php include_once '../../predlosci/menu.php'; ?>
  	
  	<div class="row grid-x">
  	<div class="medium-3 large-3 columns"></div>
  	<div class="small-12 medium-6 large-6 columns">
  		</br>
  			
  	  	    <table>
		<thead>
			<tr>
								
			<th>Naziv</th>
			<th>Cijena</th>
			<th>Akcija</th>
			
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
			
			<td>
				<a href="<?php echo $putanjaAPP. "privatno/lijekovi/uredi.php?sifra=".$lijek->sifra?>"><i title="Uredi" class="step fi-page-edit size-48"></i></a>
				<a href="<?php echo $putanjaAPP. "privatno/lijekovi/delete.php?sifra=".$lijek->sifra?>"><i title="Obriši" class="step fi-trash size-48"></i></a>
			    
			</td>
		</tr>
			    <?php endforeach; ?>
			</tbody>
		</table> 
	</div>
	<div class="small-12 medium-3 large-3 columns">
		<a href="<?php echo $putanjaAPP. "privatno/lijekovi/unesi.php";?>">
  			</br><button class="success button expanded" style="float: right; width:80%;background: #14679e; color:white; margin-right: 25px;">Unesi novi</button></a>
	</div>
	</div>

	<?php	include_once '../../predlosci/podnozje.php'; ?>
   <?php	include_once '../../predlosci/skripte.php'; ?>
  </body>
</html>

