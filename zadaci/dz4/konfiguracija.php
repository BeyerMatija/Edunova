<?php
session_start();

$naslovAplikacije = "Aplikacija verzija 1.0";

switch ($_SERVER["HTTP_HOST"]) {
	case 'localhost':
		$putanjaAPP="/dz4/";
		break;
	case 'matijab.byethost12.com':
		$putanjaAPP="/dz4/";
		break;
	default:
		$putanjaAPP="/";
		break;
}



