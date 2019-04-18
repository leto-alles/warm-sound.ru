<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta property="og:title" content="warm-sound.ru">
	<meta property="og:description" content="warm-sound.ru - магазин виниловых пластинок">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.7/css/jquery.fancybox.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
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
        <div class="novelty_block slick-novelty"> 
            
        <a href="#novelty-popap" class="fancybox">
            <div class="novelty_block-item">
                <img data-lazy="/img/novelty/beatles/white/1.jpg"  alt="White Album The Beatles LP" class="novelty_block-img vinyl-img">
                <h3 class="novelty_block-title vinyl-title" data-name>The Beatles lkbyyjt yfpdfbyt fkm,jvf vf</h3>
                <p class="novelty_block-line"></p>
                <p class="novelty_block-album vinyl-album">White Album</p>
            </div>  
        </a>    

            
        <a href="#novelty-popap" class="fancybox">
            <div class="novelty_block-item">
                <img data-lazy="/img/novelty/beatles/white/2.jpg"  alt="White Album The Beatles LP" class="novelty_block-img vinyl-img">
                <h3 class="novelty_block-title vinyl-title" data-name>The Beatles</h3>
                <p class="novelty_block-line"></p>
                <p class="novelty_block-album vinyl-album">White Album</p>
            </div>  
        </a>    

            
        <a href="#novelty-popap" class="fancybox">
            <div class="novelty_block-item">
                <img data-lazy="/img/novelty/beatles/white/3.jpg"  alt="White Album The Beatles LP" class="novelty_block-img vinyl-img">
                <h3 class="novelty_block-title vinyl-title" data-name>The Beatles</h3>
                <p class="novelty_block-line"></p>
                <p class="novelty_block-album vinyl-album">White Album</p>
            </div>  
        </a>    

            
        <a href="#novelty-popap" class="fancybox">
            <div class="novelty_block-item">
                <img data-lazy="/img/novelty/beatles/white/4.jpg"  alt="White Album The Beatles LP" class="novelty_block-img vinyl-img">
                <h3 class="novelty_block-title vinyl-title" data-name>The Beatles</h3>
                <p class="novelty_block-line"></p>
                <p class="novelty_block-album vinyl-album">White Album</p>
            </div>  
        </a>    

            
        <a href="#novelty-popap" class="fancybox">
            <div class="novelty_block-item">
                <img data-lazy="/img/novelty/beatles/white/1.jpg"  alt="White Album The Beatles LP" class="novelty_block-img vinyl-img">
                <h3 class="novelty_block-title vinyl-title" data-name>The Beatles</h3>
                <p class="novelty_block-line"></p>
                <p class="novelty_block-album vinyl-album">White Album</p>
            </div>  
        </a>    

            
        <a href="#novelty-popap" class="fancybox">
            <div class="novelty_block-item">
                <img data-lazy="/img/novelty/beatles/white/2.jpg"  alt="White Album The Beatles LP" class="novelty_block-img vinyl-img">
                <h3 class="novelty_block-title vinyl-title" data-name>The Beatles</h3>
                <p class="novelty_block-line"></p>
                <p class="novelty_block-album vinyl-album">White Album</p>
            </div>  
        </a>    

            
        <a href="#novelty-popap" class="fancybox">
            <div class="novelty_block-item">
                <img data-lazy="/img/novelty/beatles/white/3.jpg"  alt="White Album The Beatles LP" class="novelty_block-img vinyl-img">
                <h3 class="novelty_block-title vinyl-title" data-name>The Beatles</h3>
                <p class="novelty_block-line"></p>
                <p class="novelty_block-album vinyl-album">White Album</p>
            </div>  
        </a>    

          
        </div>
    </div>
</section>


<div id="novelty-popap" class= "novelty_popap-wrapper">
    <div class="novelty_popap">
            <div class="novelty_popap-left">
                
            </div>

            <div class="novelty_popap-right">
                <h3 class="novelty_popap-group">The beatles</h3>
                <p class="novelty_popap-album">ДЛинное название альбома</p>
                <p class="novelty_popap-type">LP</p>
                <p class="novelty_popap-label">Мелодия</p>
                <p class="novelty_popap-country">РФ</p>
            </div>
    </div>
</div>



	</div>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.7/js/jquery.fancybox.min.js" defer="defer"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
