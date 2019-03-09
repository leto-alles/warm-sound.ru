<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta property="og:title" content="warm-sound.ru">
	<meta property="og:description" content="warm-sound.ru - магазин виниловых пластинок">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.7/css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:900|Montserrat:400,600,700,900&amp;subset=cyrillic" rel="stylesheet">
	
	<title>warm-sound.ru</title>
</head>

<?php
$partner = isset($_GET['partner']) ? trim($_GET['partner']) : '';
$version = isset($_GET['version']) ? trim($_GET['version']) : '';
include_once 'version.php';
include_once 'prices.php';
?>

<body>

	

	<div class="wrapper">

		<div class="header">
	<nav class="header__nav">
		<a href="#" class="header__nav-link">Винил</a>
		<a href="#" class="header__nav-link">Новые поступления</a>
		<a href="#" class="header__nav-link">Контакты</a>
	</nav>    
</div>

<div class="header-background">
	<h1 class="header-background-title">warm-sound</h1>
</div>

		<section class="main"></section>
<div class="container"></div>


	</div>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.7/js/jquery.fancybox.min.js" defer="defer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer="defer"></script>
	<script src="js/script.js"></script>
</body>
</html>
