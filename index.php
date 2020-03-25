<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Parser</title>
</head>

<link href="css/main.css" rel="stylesheet" />

<body>

<form method="post" id="parseForm">
Что парсим?
<select name="itemToParse">
    <option>http://www.simzikov.site/</option>
	<option>https://habr.com/ru/</option>
	<option>https://ru.wikipedia.org</option>
</select>
Что хотим достать?
<select name="dataType">
    <option>картинки</option>
	<option>ссылки</option>
</select>
<input type="submit" value="Парсить!">
</form>
<br>
<hr>
<br>

<div id="resultDiv"></div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="js/main.js"></script>

</body>
</html>