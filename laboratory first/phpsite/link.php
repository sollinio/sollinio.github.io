<?php
/* Соеднинение с БД */
include ("blocks/bd.php");
$result = mysql_query ("SELECT title, meta_d, meta_k, text FROM settings WHERE page='link'",$db); /*ВЫБРАТЬ поля .. ИЗ таблицы .. ГДЕ .. */
$myrow = mysql_fetch_array ($result); /* заносим массив из переменной */
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name="description" content="<?php echo $myrow['meta_d']; ?>">
<meta name="keywords" content="<?php echo $myrow['meta_k']; ?>">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><?php echo $myrow['title']; ?></title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="JS/jquery-2.2.2.js"></script>
<script src="JS/jquery.flexslider-min.js"></script>
<script src="JS/slider.js"></script>
</head>

<body>
<div class="body">
<!-- Шапка сайта-->
<? include("blocks/header.php"); ?>
<!-- Слайдер-->
<? include("blocks/slider.php"); ?>
<!-- Контент-->
<?php echo $myrow['text']; ?>
<!-- Подвал-->
<div class="footer"><p>&nbsp;</p></div>
</div> <!-- закрыть Тело -->
</body>
</html>