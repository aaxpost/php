<html>
<head>
	<title>Атрибуты value и placeholder_Задача_2</title>
	<meta charset="utf-8">
</head>
<body>

<p>Задача №2</p>
<p> Спросите у пользователя имя, а также попросите его ввести
сообщение (textarea). Сделайте так, чтобы после отправки формы
значения ее полей не пропадали.</p>




		<form action="" method="GET">
			<input type="text" value = "<?php if(isset($_REQUEST['ageform'])) echo $_REQUEST['ageform'];?>" name="ageform"><br><br>
			<textarea name="textform"><?php if(isset($_REQUEST['textform'])) echo $_REQUEST['textform'];?></textarea><br><br>
			<input type="submit" value = "Отправить данные">
		</form>



</body>
</html>

