<?php
	require_once "start.php";
	unset($_SESSION['admin']);
	redirect("login.php");
?>