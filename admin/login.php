<?php
	require_once "start.php";

	if (isset($_SESSION['admin'])) {
		redirect("index.php");
	} else {
		
		if (!empty($_POST['loginButton'])) {
			$login = $_POST['login'];
			$password = $_POST['password'];
			
			if ($login == "admin" && $password == "admin") {
				$_SESSION['admin'] = array(
					"login" => $login,
					"password" => $password
				);
				
				redirect("index.php");
			} else {
				showMessage("Хех, хорошая попытка");
			}
			
		}
		
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
	</head>
	<body>
		<div>
			<form name="login" method="post">
				<input type="text" name="login">
				<input type="password" name="password">
				<input type="submit" name="loginButton" value="Login!!">
			</form>
		</div>
	</body>
</html>