<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta property="og:title" content="warm-sound.ru">
	<meta property="og:description" content="warm-sound.ru - магазин виниловых пластинок">

	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" rel="stylesheet">


	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:900%7CMontserrat:400,600,700,900&amp;subset=cyrillic" rel="stylesheet">

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css" media="(max-width: 1199px)">

	
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

		<section class="header">
	<nav class="header__nav">
		<a href="#vinyl" class="header__nav-link link-vinyl">Винил</a>
		<a href="#novelty" class="header__nav-link link-novelty">Новые поступления</a>
        <a href="#information" class="header__nav-link link-info">Инфо</a>
		<a href="#contacts" class="header__nav-link link-contacts">Контакты</a>
	</nav>

    <div class="header__menu-btn" id="menu-btn">
        <span class="icon"></span>
        <h2 class="text">Меню</h2>
    </div>
    <nav class="header__m-nav d-show">
        <a href="#vinyl" class="header__m-nav-link link-vinyl">Винил</a>
        <a href="#novelty" class="header__m-nav-link link-novelty">Новые поступления</a>
        <a href="#information" class="header__m-nav-link link-info">Инфо</a>
        <a href="#contacts" class="header__m-nav-link link-contacts">Контакты</a>
    </nav>

</section>







		<section class="header_title">
    <div class="header_title-top">
        <svg class="header_title-poligon" version="1.1"  width="100%" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" viewBox="0 0 100 100" preserveAspectRatio="none" >
            <polygon fill="#000000" points="0,100 0,0 100,0 100,20"/>
        </svg>
    </div>
        <h1 class="header_title-name">Warm-Sound</h1>
    <div class="header_title-back"></div>
</section>
		
		
		
		

	</div>

	<div class="d-none">
		
	</div><!-- d-none -->

	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js" defer="defer"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
	
</body>
</html>
