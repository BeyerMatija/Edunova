<?php
function provjeralogin () {
	if (!isset($_SESSION["logiran"])) {
		header ("location :" . $GLOBALS["putanjaAPP"] . "javno/login.php?nemateOvlast");
		exit;
	}
}
	
