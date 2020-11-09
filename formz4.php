<html>
<head>
	<title>Формы_Задача_4</title>
	<meta charset="utf-8">
</head>
<body>

<p>Задача №4</p>
<p> Реализуйте заготовку регистрации пользователя. Спросите у него
логин, пароль (в браузере должен быть звездочками) и
подтверждение пароля (тоже звездочками). Сравните пароль и его
подтверждение: если они не совпадают — выведите сообщение об
этом. Проверьте то, что пароль больше 5-ти символов и меньше 9-ти,
а логин больше 3-х и меньше 12-ти символов. Если все правильно —
выведите пользователю сообщение о том, что он успешно
зарегистрирован.</p>


		<form action="" method="POST">
			<input type="text" placeholder = "логин" name="login"><br><br>
			<input type="password" placeholder = "Пароль" name="password_1"><br><br>
			<input type="password" placeholder = "Пароль для проверки" name="password_2"><br><br>
			<input type="submit" value = "Нажмите для регистрации">
		</form>


<?php
	//Если форма была отправлена и переменная не пустая:
	if (
			isset($_REQUEST['login']) and 
			isset($_REQUEST['password_1']) and 
			isset($_REQUEST['password_2'])
		) 
		{
			$login = trim(strip_tags($_REQUEST['login']));
			$pass1 = trim(strip_tags($_REQUEST['password_1']));
			$pass2 = trim(strip_tags($_REQUEST['password_2']));
			if ($pass1 != $pass2)
			{
				echo 'Введенные пароли не совпадают! Повторите попытку.';
			}
			else
			{
				if (((strlen($pass1)) > 5 and (strlen($pass1)) < 9) and
					((strlen($login)) > 3 and (strlen($login)) < 12))
				{
					echo 'Вы успешно прошли регистрацию';
				}	
			}
		}
		

?>

</body>
</html>

