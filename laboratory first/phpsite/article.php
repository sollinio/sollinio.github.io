<?php
/* ����������� � �� */
include ("blocks/bd.php");
$result = mysql_query ("SELECT title, meta_d, meta_k, text FROM settings WHERE page='article'",$db); /*������� ���� .. �� ������� .. ��� .. */
$myrow = mysql_fetch_array ($result); /* ������� ������ �� ���������� */
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
<!-- ����� �����-->
<? include("blocks/header.php"); ?>
<!-- �������-->
<? include("blocks/slider.php"); ?>
<!-- ���������� -->
<div class="content">
<div class="cont-f"></div>
<!-- ���� -->
<? include("blocks/menuA.php"); ?>
<!-- �������-->
<div class='cont-tex'>
<?php
$result = mysql_query ("SELECT id, title,description,category FROM articles",$db);
$myrow = mysql_fetch_array ($result);

do{
printf ("<table class='cont-tex-table'>
<tr>
	<td class='cont-tex-table-title'>
	<a href='view_article.php?id=%s'><div class='cont-Zag'>%s</div></a>
	<div class='cont-add'>���������: %s</div>
	</td>
</tr>
<tr>
	<td class='text-descript'><br>%s</td>
</tr>
</table>", $myrow["id"],$myrow["title"],$myrow["category"],$myrow["description"]);

}
while ($myrow= mysql_fetch_array ($result));
?>
</div><!-- ��������� -->
<p>&nbsp;</p></div> <!-- ������� ���������� -->
<!-- ������-->
<div class="footer"><p>&nbsp;</p></div>
</div> <!-- ������� ���� -->
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