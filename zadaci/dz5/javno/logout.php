<?php include_once '../konfiguracija.php';  

session_destroy();
header("location: " . $putanjaAPP . "javno/login.php?odlogiranSi");