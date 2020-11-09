<html>
<head>
	<title>Формы_Задача_3</title>
	<meta charset="utf-8">
</head>
<body>

<p>Задача №3</p>
<p> Сделайте 5 полей ввода, в которые вводятся числа. Выведите на
экран максимальное и минимальное из них.</p>


		<form action="" method="POST">
			<input type="text" placeholder = "число 1" name="num1"><br><br>
			<input type="text" placeholder = "число 2" name="num2"><br><br>
			<input type="text" placeholder = "число 3" name="num3"><br><br>
			<input type="text" placeholder = "число 4" name="num4"><br><br>
			<input type="text" placeholder = "число 5" name="num5"><br><br>
			<input type="submit" value = "Нажмите для отправки">
		</form>


<?php
	//Если форма была отправлена и переменная не пустая:
	if (
			isset($_REQUEST['num1']) and 
			isset($_REQUEST['num2']) and
			isset($_REQUEST['num3']) and
			isset($_REQUEST['num4']) and
			isset($_REQUEST['num5'])
		) 
		{
			echo 'Самое большое число: '.max($_REQUEST).'<br>';
			echo 'Самое маленькое число: '.min($_REQUEST).'<br>';
		}
		

?>

</body>
</html>

