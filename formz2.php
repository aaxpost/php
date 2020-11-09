<html>
<head>
	<title>Формы_Задача_2</title>
	<meta charset="utf-8">
</head>
<body>

<p>Задача №2</p>
<p> Сделайте 3 поля ввода, в которые вводятся день, месяц и год.
Выведите на дату в формате '2013-12-31'.</p>


		<form action="" method="POST">
			<input type="text" placeholder = "Дата" name="date"><br><br>
			<input type="text" placeholder = "Месяц" name="months"><br><br>
			<input type="text" placeholder = "Год" name="year"><br><br>
			<input type="submit" value = "Нажмите для отправки">
		</form>


<?php
	//Если форма была отправлена и переменная не пустая:
	if (
			isset($_REQUEST['date']) and 
			isset($_REQUEST['months']) and 
			isset($_REQUEST['year'])
		) 
		{
			$date = strip_tags($_REQUEST['date']);
			$months = strip_tags($_REQUEST['months']);
			$year = strip_tags($_REQUEST['year']);
			echo $year.'-'.$months.'-'.$date.'<br>';
		}
		

?>

</body>
</html>

