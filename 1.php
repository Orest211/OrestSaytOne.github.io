<?php
	require "db.php";
?>

<?php if( isset($_SESSION['logged_user'])) : ?>
	Автоизований!<br>
	Здоров, <?php echo $_SESSION["logged_user"]->login; ?>!;
	<a href="logout.php">Вийти</a>
<?php else : ?>
	<a href="/login.php">Авторизація</a><br>

	<a href="/signup.php">Регістрація</a><br>

<?php endif ; ?>