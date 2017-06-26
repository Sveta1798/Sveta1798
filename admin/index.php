<?php
	require_once "start.php";

	if (isset($_SESSION['admin'])) {
		
		$calls = $DB->query("SELECT * FROM `calls` ORDER BY `id_call`, `sn`, `fn`")->fetchAll(PDO::FETCH_ASSOC);
		$data = $DB->query("SELECT * FROM `settings`")->fetchAll(PDO::FETCH_ASSOC);
		$data = $data[0];
		
		if (!empty($_POST['changeSaleTextButton'])) {
			$text = $_POST['text'];
			
			$uptd = $DB->prepare("UPDATE `settings` SET `sale_text`=:t WHERE `id`=1");
			
			$uptd->bindValue(":t", $text);
			
			if ($uptd->execute()) {
				showMessage("Ok!!!!!");
			} else {
				showMessage(":(");	
			}
			
			redirect("index.php");
		}
		
		if (!empty($_POST['changePicture'])) {
			$file = $_FILES["pic"];
			
			$path = "img/".$file["name"];
			
			if (move_uploaded_file($_FILES["pic"]["tmp_name"], "../".$path)) { 

				$uptd = $DB->prepare("UPDATE `settings` SET `img`=:i WHERE `id`=1");

				$uptd->bindValue(":i", $path);

				if ($uptd->execute()) {
					showMessage("Ok!!!!!");
				} else {
					showMessage(":(");	
				}
				
			} else {
				showMessage(":(");	
			}
			
			redirect("index.php");
		}
		
	} else {
		redirect("login.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Admin Panel</title>
	</head>
	<body>
		<a href="logout.php">Exit now!!!</a>
		<label>Здаров! <?= $_SESSION['admin']['login']; ?></label>
		<hr>
		<fieldset>
			<legend>Текст акции</legend>
			<form name="changeSaleText" method="POST">
				<input type="text" name="text" value="<?= $data['sale_text'] ?>">
				<input type="submit" name="changeSaleTextButton" value="Изменить">
			</form>
		</fieldset>
		<fieldset>
			<legend>Картинка</legend>
			<form name="picture" method="POST" enctype="multipart/form-data">
				<table width="100%">
					<tr>
						<td><img src="../<?= $data["img"] ?>"></td>
						<td><input type="file" name="pic"></td>
						<td><input type="submit" name="changePicture" value="Изменить"></td>
					</tr>
				</table>
			</form>
		</fieldset>
		<fieldset>
			<legend>Звонки</legend>
			<table width="100%">
				<tr>
					<td>№</td>
					<td>Фамилия</td>
					<td>Имя</td>
					<td>Телефон</td>
				</tr>
				<?php
				
					foreach ($calls as $call) {
						echo "<tr>";
						echo "<td>".$call['id_call']."</td>";
						echo "<td>".$call['sn']."</td>";
						echo "<td>".$call['fn']."</td>";
						echo "<td>".$call['tel']."</td>";
						echo "</tr>";
					}
				
				?>
			</table>
		</fieldset>
	</body>
</html>