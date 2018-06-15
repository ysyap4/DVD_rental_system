<?php

	session_start();
	unset($_SESSION['ID']);
	unset($_SESSION['USER']);
	unset($_SESSION['PASS']);
	unset($_SESSION['LEVEL']);
	unset ($_SESSION["Login"]);
	session_destroy();
	header("Location: login.php");

?>