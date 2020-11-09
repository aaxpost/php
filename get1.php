<html>
<head>
	<title>GET запросы_Задача 1 (самостоятельно)</title>
	<meta charset="utf-8">
</head>
<body>

<p>Отправьте GET-запрос с помощью ссылки следующего вида (см.
пример). Запишите эти данные в переменные $page и $article. 'domain.ru/index.php?article=1&page=3'</p>

<?php
	//Проверяем переменные на пустоту
	if (!empty($_GET['article']) and !empty($_GET['page']))
	{
	//var_dump ($_GET);
	//Помещаем данные в переменные
	$article = $_GET['article'];
	$page = $_GET['page'];
	echo 'Значение переменной $article=' .$article.'<br>';
	echo 'Значение переменной $page=' .$page.'<br>';
	}
	else
	{
	echo 'Нажмите ссылку для записи данных в переменные';	
	}
?>

<br>	
<br>
<a href = "get1.php?article=1&page=3">Записать данные в переменные</a>


</body>
</html>
