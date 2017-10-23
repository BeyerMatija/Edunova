
<?php
function provjeralogin () {
	
	if (!isset($_SESSION["user"])) {
		
		 $a = "Location: " . $GLOBALS["putanjaAPP"] . "javno/login.php?nemateOvlast";
		
		header($a);
		
	}
}
	
