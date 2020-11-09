<html>
<head>
	<title>Атрибуты value и placeholder_Задача_1</title>
	<meta charset="utf-8">
</head>
<body>

<p>Задача №1</p>
<p> Спросите возраст пользователя с помощью формы. Результат
запишите в переменую $age. Сделайте так, чтобы после отправки
формы значения ее полей не пропадали.</p>




		<form action="" method="GET">
			<input type="text" value = "<?php if(isset($_GET['ageform'])) echo $_GET['ageform'];?>" name="ageform"><br><br>
			<input type="submit" value = "Отправить данные">
		</form>

<?php
		$age = $_GET['ageform'];
		echo $age;

?>


</body>
</html>

