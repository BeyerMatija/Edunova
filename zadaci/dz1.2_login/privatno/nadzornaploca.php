<?php 
session_start();

if(!isset($_SESSION["logiran"])){
	header("location: ../login.php?nemateOvlasti");
	exit;
}


?>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<h1>Logirani ste!</h1>