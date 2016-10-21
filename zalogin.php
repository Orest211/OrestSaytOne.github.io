<?php require "db.php"; ?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>ГОЛОВНА</title>
	</head>

	<body id="golovna" class="register">
		<h1 >Головна</h1>
		<form action="zalogin.php" method="post" enctype='multipart/form-data'>
			<input type="file" name="filename">
			<input type="submit" value="Load">
		</form>
		<?php
			$name = $_FILES["filename"]['name'];
			if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    			echo "Файл корректен и был успешно загружен.\n";
			} else {
   				 echo "Возможная атака с помощью файловой загрузки!\n";
			}	
			echo "image: $name<br> <img src='$name'/>";

		?>
		

	</body>
</html>
