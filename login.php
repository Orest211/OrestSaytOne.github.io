<?php
	require "db.php";
	$data = $_POST;
	if ( isset($data['do_login']) )
	{
		$errors = array();
		$user = R::findOne('user', "login = ?", array($data['login']));
		if( $user)
		{
			//isnye
			if( $user->password == $data['password'])
			{
				$_SESSION['logged_user'] = $user;
				echo '<div style="color: green;">Ви авторизовані<br>Можете перейти на <a href="zalogin/zalogin.php">головну</a> сторінку!</div><hr>';
			}
			else{
				$errors[] = "Неправильний пароль";
			}
		}
		else
		{
			$errors[] = "Користувач з таким логіном не знайдений";
		}
		if( ! empty($errors))
		{
		echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
		}
	}
?>
<form action="login.php" method="POST">
	<p>
		<p>
			<p ><strong>ВАш логин</strong></p>
			<input type="text" name="login" value="<?php echo @$data['login']; ?>">
		</p>

		<p>
			<p><strong>Ваш пароль</strong></p>
			<input type="password" name="password" value="<?php echo @$data['password']; ?>">
		</p>
		<p>
			<button type="sumbit" name="do_login">Увійти</button>
		</p>
	</p>

</form>
<html>
	<head >
		<title id="Lo">Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body id="login" class="register">
		
	</body>
</html>