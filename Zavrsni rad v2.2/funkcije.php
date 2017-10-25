<?php
function provjeralogin () {
	
	if (!isset($_SESSION["user"])) {
		
		 $a = "Location: " . $GLOBALS["putanjaAPP"] . "javno/login.php?nemateOvlast";
		
		header($a);
		
	}
}

 /*function provjeraUloga (){
	if( !(isset($_SESSION["user"]) && $_SESSION["neuspio"])) {
		$a = "Location: " . $GLOBALS["putanjaAPP"] . "login.php?error=true";
		
		header($a);
	}
}	
*/
