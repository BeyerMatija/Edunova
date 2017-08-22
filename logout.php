<?php
include_once '../konfiguracija.php';
session_destroy();
header("Location: ../index.php");