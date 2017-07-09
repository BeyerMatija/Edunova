<div class="row" style="max-width: 75rem; text-align: center;">
	<hr />
	&copy; Matija Beyer <?php echo date("Y",getdate()[0]); ?> 
	
	<?php 
	
	if($_SERVER["HTTP_HOST"]==="localhost"){
		echo ", <span style=\"color: red\">Lokalno</span>";
	}
	
	?>
	
</div>
