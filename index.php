<html>
<head>
	<title>GET Задача №2 Самостоятельно</title>
	<meta charset="utf-8">
</head>
<body>
	
<p>GET Задача №2 Отправьте GET-запрос на показ определенной страницы и раздела
сайта. Запишите адрес страницы в переменную $page, а раздел в
переменную $topic. С помощью функции include() сделайте так,
чтобы к странице index.php подключалась определенная страница
($page) из определенной папки ($topic). Создайте 3 папки и 2 файла
в каждой папке с различными названиями и с их помощью проверьте
работу скрипта.</p>
<p>'domain.ru/index.php?topic=cms&page=test.php'</p>
<br>

<?php

	$topic = $_GET['topic'];
	$page = $_GET['page'];
	include $topic.'/'.$page;
	
?>

<br>
<br>	
<a href = "index.php?topic=cms1&page=test1.php">Папка 1, файл 1</a><br><br>
<a href = "index.php?topic=cms1&page=test2.php">Папка 1, файл 2</a><br><br>
<a href = "index.php?topic=cms2&page=test3.php">Папка 2, файл 3</a><br><br>
<a href = "index.php?topic=cms2&page=test4.php">Папка 2, файл 4</a><br><br>
<a href = "index.php?topic=cms3&page=test5.php">Папка 3, файл 5</a><br><br>
<a href = "index.php?topic=cms3&page=test6.php">Папка 3, файл 6</a><br><br>

</body>
</html>
