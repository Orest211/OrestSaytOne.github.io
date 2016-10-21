<?php require "db.php"; ?>
<?php if( isset($_SESSION['logged_user'])) : ?>
	Автоизований!<br>
	Здоров, <?php echo $_SESSION["logged_user"]->login; ?>!;
	<a href="zalogin.php">golovna</a>
	<a href="logout.php">Вийти</a>
<?php else : ?>
	<a href="/login.php">Авторизація</a><br>

	<a href="/signup.php">Регістрація</a><br>
<?php endif ; ?>

<html>
<head>
<title>ГОРДІСТЬ УКРАЇНИ</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body id="index" class="index">
	






	<h1>Крехів</h1>
	<div id="Knopki">
		<div>ГОловна</div>



	</div>
	
</body>



</html>