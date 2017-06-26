<?php

	$DB = new PDO("mysql:dbname=flowers;host=localhost:3306", "root", "");
	$DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Сообщение на экран
	$DB->exec("SET NAMES utf8");

	 function showMessage($msg)
	  {
		echo "<script type='text/javascript'>alert('$msg');</script>";
	  }

	  function redirect($to)
	  {
		echo "<script type='text/javascript'>document.location = '$to';</script>";
	  }  

?>