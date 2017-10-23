<?php include_once 'konfiguracija.php';  ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlosci/head.php'; ?>
    <style>
    	.frame {  
		    height: 500px; /*can be anything*/
		    width: 100%; /*can be anything*/
		    position: relative;
		}
		img {  
		    max-height: 100%;  
		    max-width: 100%; 
		    height: auto;
		    position: absolute;  
		    top: 0;  
		    bottom: 0;  
		    left: 0;  
		    right: 0;  
		    margin: auto;
		}
    </style>
  </head>
  <body>
  	<?php include_once 'predlosci/menu.php'; ?>
  	       	
      <div class="row">
      	
        <div class="large-12 cell frame" style=" background-color: #586ca0;">
        	
      <img src="img/ljekarna.svg" />      
      
       </div>
    </div>
 </div>
	<?php	include_once 'predlosci/podnozje.php'; ?>
   <?php	include_once 'predlosci/skripte.php'; ?>
  </body>
</html>
