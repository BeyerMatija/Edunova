<?php include_once '../../konfiguracija.php'; 

if(!isset($_SESSION["logiran"])){
	header("location: " . $putanjaAPP . "javno/login.php?nemateOvlasti");
	exit;
}

?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
 <head>
    <?php include_once '../../predlosci/head.php'; ?>
  </head>
  
  <body>
           
	<?php include_once '../../predlosci/izbornik.php'; ?>

    <div class="row">
			<div class="large-12 columns">
				<div class="callout">
					<div class="row">
						<div class="large-6 columns">
						
								<input type="text" placeholder="dio naziva" name="uvjet" />
						
						</div>
						<div class="large-6 columns">
							<a href="#" class="success button expanded">Dodaj novi</a>
						</div>
					</div>				
									
					<table>
						<thead>
							<tr>
								<th>Proizvod 1</th>
								<th>Proizvod 2</th>
								<th>Proizvod 3</th>
								<th>Proizvod 4</th>
								<th>Akcija</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							for($i=0;$i<10;$i++):
							?>
							<tr>
								<td>Naziv proizvoda</td>
								<td>Cijena proizvoda</td>
								<td>Količina</td>
								<td>Rok isporuke</td>
								<td><a href="#">Promjeni</a> <a href="#">Obriši</a></td>
							</tr>
							
							<?php
							endfor;
							 ?>
						</tbody>
					</table>
					<ul class="pagination text-center" role="navigation" aria-label="Pagination">
					  <li class="pagination-previous disabled">Previous <span class="show-for-sr">page</span></li>
					  <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
					  <li><a href="#" aria-label="Page 2">2</a></li>
					  <li><a href="#" aria-label="Page 3">3</a></li>
					  <li><a href="#" aria-label="Page 4">4</a></li>
					  <li class="ellipsis" aria-hidden="true"></li>
					  <li><a href="#" aria-label="Page 12">12</a></li>
					  <li><a href="#" aria-label="Page 13">13</a></li>
					  <li class="pagination-next"><a href="#" aria-label="Next page">Next <span class="show-for-sr">page</span></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<?php	include_once '../../predlosci/podnozje.php'; ?>
		<?php	include_once '../../predlosci/skripte.php'; ?>
						
		</body>
	</html>
