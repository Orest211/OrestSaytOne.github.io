<?php
	require "db.php";
	$data = $_POST;
	if ( isset($data['do_signup']) )
	{
		


		$errors = array();
		if( trim($data['login']) == '' )
		{
			$errors[] = "Введіть логін!";
		}

		if( trim($data['emeil']) == '')
		{
			$errors[] = "Введіть логін!";
		}

		if( $data['password'] == '' )
		{
			$errors[] = "Введіть логін!";
		}

		if( $data['password_2'] !=  $data["password"])
		{
			$errors[] = "Повторний пароль неправильний";
		}

		if( R::count('user', "login = ?", array($data['login'])))
		{
			$errors[] = " Користувач з таким логіном вже існує!";
		}

		if( R::count('user', "emeil = ?", array($data['emeil'])))
		{
			$errors[] = " Користувач з таким емейлом вже існує";
		}
		if(empty($errors))
		{
		$user = R::dispense('user');
		$user->login = $data['login'];
		$user->emeil = $data['emeil'];
		$user->password = $data['password'];
		R::store($user);
		echo '<div style="color: green;">Ви успішно зареєстрованні</div><hr>';

		} else 
		{
			//registr
			echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
		}

	}
?>


<html>
	<head>
		<title id="Lo">Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body id="signup" class="register">

	<form  action="/signup.php" method="POST">

		<p>
			<p><strong>ВАш логин</strong></p>
			<input type="text" name="login" value="<?php echo @$data['login']; ?>">
		</p>

		<p>
			<p><strong>ВАш emeil</strong></p>
			<input type="emeil" name="emeil" value="<?php echo @$data['emeil']; ?>">
		</p>

		<p>
			<p><strong>Ваш пароль</strong></p>
			<input type="password" name="password" value="<?php echo @$data['password']; ?>">
		</p>

		<p>
			<p><strong>Пароль ще раз</strong></p>
			<input type="password" name="password_2" value="<?php echo @$data['password_2']; ?>">
		</p>

		<p>
			<button type="sumbit" name="do_signup">Зареєструватися</button>
		</p>

</form>
		
	</body>
</html>