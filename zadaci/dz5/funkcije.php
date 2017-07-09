<?php

function provjeraLogin() {
	if (!isset($_SESSION["logiran"])) {
		header("location: " . $GLOBALS["putanjaAPP"] . "javno/login.php?nemateOvlasti");
		exit ;
	}
}
