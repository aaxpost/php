<html>
<head>
	<title>Формы_Задача_1</title>
	<meta charset="utf-8">
</head>
<body>

<p>Задача №1</p>
<p> Спросите у пользователя имя, фамилию, автобиографию (textarea).
Выведите эти данные на экран в формате, приведенном под данной
задачей. Позаботьтесь о том, чтобы пользователь не мог вводить теги
и таким образом сломать сайт.</p>


		<form action="" method="POST">
			<input type="text" placeholder = "Ваше имя" name="name"><br><br>
			<input type="text" placeholder = "Ваша фамилия" name="lastname"><br><br>
			<textarea name = "text" placeholder = "Ваша автобиография" ></textarea><br><br>
			<input type="submit" value = "Нажмите для отправки">
		</form>


<?php
	//Если форма была отправлена и переменная не пустая:
	if (
			isset($_REQUEST['name']) and 
			isset($_REQUEST['lastname']) and 
			isset($_REQUEST['text'])
		) 
		{
			$name = strip_tags($_REQUEST['name']);
			$lastname = strip_tags($_REQUEST['lastname']);
			$text = strip_tags($_REQUEST['text']);
			echo $lastname.' '.$name.'<br>';
			echo $text;
		}
		

?>

</body>
</html>

