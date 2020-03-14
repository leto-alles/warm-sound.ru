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

?>

<body>

	

	<div class="wrapper">

		<section class="header">

	<nav class="header__nav">
		<a href="#vinyl" class="header__nav-link scroll">Винил</a>
		<a href="#novelty" class="header__nav-link scroll">Новые поступления</a>
        <a href="#information" class="header__nav-link scroll">Инфо</a>
		<a href="#contacts" class="header__nav-link scroll">Контакты</a>
	</nav>



    <nav class="header__m-nav h-show">
        <a href="#vinyl" class="header__m-nav-link scroll">Винил</a>
        <a href="#novelty" class="header__m-nav-link scroll">Новые поступления</a>
        <a href="#information" class="header__m-nav-link scroll">Инфо</a>
        <a href="#contacts" class="header__m-nav-link scroll">Контакты</a>
    </nav>

    <div class="header__menu-btn" id="menu-btn">
        <h2 class="header__menu-btn_title">Меню</h2>
    </div>

</section>







		<section class="intro">
      <h1 class="intro__title">Warm-Sound</h1>
</section>







		<section class="novelty" id="novelty">
    <div class="container">
        <h2 class="section-title novelty-title">Новые поступления</h2>
        <div class="novelty__block flex">
            <div class="novelty__block-item novelty__block-main flex">
                <div class="novelty__item">
                    <div class="novelty__item-main">
                        <img loading="lazy" src="img/products/coltrane/my_favorite_things/pic-1.jpg" alt="" class="novelty__item-main_pic">
                    </div>
                    <div class="novelty__item-slide">
                        <img loading="lazy" src="img/products/coltrane/my_favorite_things/pic-2.jpg" alt="" class="novelty__item-slide_pic">
                        <img loading="lazy" src="img/products/coltrane/my_favorite_things/pic-3.jpg" alt="" class="novelty__item-slide_pic">
                        <img loading="lazy" src="img/products/coltrane/my_favorite_things/pic-4.jpg" alt="" class="novelty__item-slide_pic">
                    </div>
                </div>
            </div>
            <div class="novelty__block-item novelty__block-aside"></div>
        </div>
    </div>
</section>
		<section class="fix2" id="information">
</section>







		<footer class="footer">
      <a href="#policy" class="footer__link footer__link-privacy fancybox">Политика конфиденциальности</a>
</footer>








	</div>

	<div class="d-none">
		<div class="popup-policy" id="popup-policy">
	<p class="popup-policy__text">бла-бла-бла</p>
</div>







	</div><!-- d-none -->

	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js" defer="defer"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
	
</body>
</html>
