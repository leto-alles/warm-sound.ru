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
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:900%7CMontserrat:400,600,700,900&amp;subset=cyrillic" rel="stylesheet">
	
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
		<a href="#" class="header__nav-link">Винил</a>
		<a href="#novelty" class="header__nav-link link-novelty">Новые поступления</a>
        <a href="#" class="header__nav-link">Инфо</a>
		<a href="#" class="header__nav-link">Контакты</a>
	</nav>
    <div class="header__menu-btn" id="menu-btn">
        <span class="icon"></span>
        <h2 class="text">Меню</h2>
    </div>
    <nav class="header__m-nav d-show">
        <a href="#" class="header__m-nav-link">Винил</a>
        <a href="#novelty" class="header__m-nav-link link-novelty">Новые поступления</a>
        <a href="#" class="header__m-nav-link">Инфо</a>
        <a href="#" class="header__m-nav-link">Контакты</a>
    </nav>

</section>

<div class="header-background">
    <h1 class="header-background-title">warm-sound</h1>
</div>




		

<section class="novelty" id="novelty">
    <div class="container">
        <h2 class="section-title novelty-title">Новые поступления</h2>
        <div class="novelty_block"> 
            
            <div class="novelty_block-item block-closed">
                <img src="/img/novelty/beatles/white/1.jpg" alt="White Album The Beatles LP" class="novelty_block-img vinyl-img">
                <h3 class="novelty_block-title vinyl-title">The Beatles</h3>
                <p class="novelty_block-album vinyl-album">White Album</p>
            </div>  
            
            <div class="novelty_block-item block-closed">
                <img src="" alt="" class="novelty_block-img vinyl-img">
                <h3 class="novelty_block-title vinyl-title"></h3>
                <p class="novelty_block-album vinyl-album">Revolver</p>
            </div>  
            
            <div class="novelty_block-item block-closed">
                <img src="" alt="" class="novelty_block-img vinyl-img">
                <h3 class="novelty_block-title vinyl-title"></h3>
                <p class="novelty_block-album vinyl-album">Lkbyyjt lkbyyjt yfpdfybt fkm,jvf rfr ntcn</p>
            </div>  
            
            <div class="novelty_block-item block-closed">
                <img src="" alt="" class="novelty_block-img vinyl-img">
                <h3 class="novelty_block-title vinyl-title"></h3>
                <p class="novelty_block-album vinyl-album">Album 545 long</p>
            </div>  
            
            <div class="novelty_block-item block-closed">
                <img src="" alt="" class="novelty_block-img vinyl-img">
                <h3 class="novelty_block-title vinyl-title"></h3>
                <p class="novelty_block-album vinyl-album">Album2 long</p>
            </div>  
            
            <div class="novelty_block-item block-closed">
                <img src="" alt="" class="novelty_block-img vinyl-img">
                <h3 class="novelty_block-title vinyl-title"></h3>
                <p class="novelty_block-album vinyl-album">Album2 long</p>
            </div>  
            
            <div class="novelty_block-item block-closed">
                <img src="" alt="" class="novelty_block-img vinyl-img">
                <h3 class="novelty_block-title vinyl-title"></h3>
                <p class="novelty_block-album vinyl-album">Album2 long</p>
            </div>  
            
            <div class="novelty_block-item block-closed">
                <img src="" alt="" class="novelty_block-img vinyl-img">
                <h3 class="novelty_block-title vinyl-title"></h3>
                <p class="novelty_block-album vinyl-album">Album2 long</p>
            </div>  
                 
        </div>
        
        <div class="novelty_show-more">
            <h4 style="color:#FFFFFF;">море</h4>
        </div>
         
    </div>
</section>


	</div>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.7/js/jquery.fancybox.min.js" defer="defer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer="defer"></script>
	<script src="js/script.js"></script>
</body>
</html>
