<?php include_once '../konfiguracija.php';  ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../predlosci/head.php'; ?>
  </head>
  <body>
  	<?php include_once '../predlosci/menu.php'; ?>
  	
    <div class="grid-container">
    	
      <div class="row">
      	
        <div class="large-8 cell">
        	 <br><br>
        	<h1 style="width: 100%; text-align: center"><?php echo $naslovAplikacije ?></h1>
        	
        	
			
			<form class="log-in-form">
			  <h4 class="text-center">Log in with you email account</h4>
			  <label>Email
			    <input type="email" placeholder="somebody@example.com">
			  </label>
			  <label>Password
			    <input type="password" placeholder="Password">
			  </label>
			  <input id="show-password" type="checkbox"><label for="show-password">Show password</label>
			  <p><input type="submit" class="button expanded" value="Log in"></input></p>
			  <p class="text-center"><a href="#">Forgot your password?</a></p>
			</form>
    	
         </div>
    </div>
 </div>
	<?php	include_once '../predlosci/podnozje.php'; ?>
   <?php	include_once '../predlosci/skripte.php'; ?>
  </body>
</html>
