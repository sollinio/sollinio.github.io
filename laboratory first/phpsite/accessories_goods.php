<?php
/* Соеднинение с БД */
include ("blocks/bd.php");
$result = mysql_query ("SELECT title, meta_d, meta_k, text FROM settings WHERE page='accessories'",$db); /*ВЫБРАТЬ поля .. ИЗ таблицы .. ГДЕ .. */
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
<!-- Содержимое -->
<div class="content">
<div class="cont-f"></div>
<!-- Меню -->
<? include("blocks/menuP.php"); ?>
<!-- Контент-->
<div class='cont-tex'>
<?php
$result = mysql_query ("SELECT id, title,description,category,price FROM goods WHERE pick ='6'",$db);
$myrow = mysql_fetch_array ($result);

do{
printf ("<div class='co-go'>
<table class='cont-goods'>
<tr>
	<td class='cont-goods-title'><a href='view_goods.php?id=%s'><p>%s</p></a>
	</td>
</tr>
<tr>
	<td class='cont-goods-add'><p>Категория: %s</p></td>
</tr>
<tr>
	<td class='cont-goods-desc'> <a href='view_goods.php?id=%s'>%s </a></td>
</tr>
<tr>
	<td class='cont-goods-price'>Цена: <div class='price-tz'>%s </div>руб. за 1 шт. </td>
</tr>
</table>
</div>", $myrow["id"],$myrow["title"],$myrow["category"],$myrow["id"],$myrow["description"],$myrow["price"]);
}
while ($myrow= mysql_fetch_array ($result));
?>

</div><!-- Закрываем -->
<p>&nbsp;</p></div> <!-- закрыть Содержимое -->
<!-- Подвал-->
<div class="footer"><p>&nbsp;</p></div>
</div> <!-- закрыть Тело -->
<!-- jquery -->
<!-- easing plugin ( optional ) -->
<script src="JS/easing.js" type="text/javascript"></script>
<!-- UItoTop plugin -->
<script src="JS/jquery.ui.totop.js" type="text/javascript"></script>
<!-- Starting the plugin -->
<script type="text/javascript">
$(document).ready(function() {
/*
var defaults = {
containerID: 'toTop', // fading element id
containerHoverID: 'toTopHover', // fading element hover id
scrollSpeed: 1200,
easingType: 'linear'
};
*/
 
$().UItoTop({ easingType: 'easeOutQuart' });
 
});
</script>
</body>
</html>