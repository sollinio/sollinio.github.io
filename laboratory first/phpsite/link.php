<?php
/* ����������� � �� */
include ("blocks/bd.php");
$result = mysql_query ("SELECT title, meta_d, meta_k, text FROM settings WHERE page='link'",$db); /*������� ���� .. �� ������� .. ��� .. */
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
<!-- �������-->
<?php echo $myrow['text']; ?>
<!-- ������-->
<div class="footer"><p>&nbsp;</p></div>
</div> <!-- ������� ���� -->
</body>
</html>