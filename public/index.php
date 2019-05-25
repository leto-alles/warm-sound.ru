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
                    <img data-lazy="/img/novelty/beatles/white/1.jpg"  alt="White Album The Beatles LP" data-pic class="novelty_block-img vinyl-img" data-pic>
                    <h3 class="novelty_block-title vinyl-title" data-name>The Beatles lkbyyjt yfpdfbyt fkm,jvf vf</h3>
                    <p class="novelty_block-line"></p>
                    <p class="novelty_block-album vinyl-album" data-album>White Album</p>

                    <ul class="novelty_block-hidden">
                        <li class="novelty_block-hidden_options" data-photo_main>/img/novelty/beatles/white/1.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_2>/img/novelty/beatles/white/2.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_3>/img/novelty/beatles/white/3.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_4>/img/novelty/beatles/white/4.jpg</li>
                        <li class="novelty_block-hidden_options" data-type>LP</li>
                        <li class="novelty_block-hidden_options" data-label>Мелодия</li>
                        <li class="novelty_block-hidden_options" data-country>USSSR</li>
                        <li class="novelty_block-hidden_options" data-released>1976</li>
                        <li class="novelty_block-hidden_options" data-label_disc>UAS 29885</li>
                        <li class="novelty_block-hidden_options" data-short_description>This is minimalistic, but fantastic album famous group in the world.</li>
                        <li class="novelty_block-hidden_options" data-full_description>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</li>
                        <li class="novelty_block-hidden_options" data-remark>colored vinyl</li>
                        <li class="novelty_block-hidden_options" data-envelope_status>EX</li>
                        <li class="novelty_block-hidden_options" data-plate_status>G</li>
                        <li class="novelty_block-hidden_options" data-price>400</li>
                    </ul>
                </div>  
            </a>    
            
            <a href="#novelty-popap" class="fancybox">
                <div class="novelty_block-item">
                    <img data-lazy="/img/novelty/beatles/white/2.jpg"  alt="White Album The Beatles LP" data-pic class="novelty_block-img vinyl-img" data-pic>
                    <h3 class="novelty_block-title vinyl-title" data-name>The Beatles</h3>
                    <p class="novelty_block-line"></p>
                    <p class="novelty_block-album vinyl-album" data-album>Album title</p>

                    <ul class="novelty_block-hidden">
                        <li class="novelty_block-hidden_options" data-photo_main>/img/novelty/beatles/white/2.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_2>/img/novelty/beatles/white/2.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_3>/img/novelty/beatles/white/3.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_4>/img/novelty/beatles/white/4.jpg</li>
                        <li class="novelty_block-hidden_options" data-type>LP</li>
                        <li class="novelty_block-hidden_options" data-label>Мелодия</li>
                        <li class="novelty_block-hidden_options" data-country>USSSR</li>
                        <li class="novelty_block-hidden_options" data-released>1976</li>
                        <li class="novelty_block-hidden_options" data-label_disc>UAS 29885</li>
                        <li class="novelty_block-hidden_options" data-short_description>This is minimalistic, but fantastic album famous group in the world.</li>
                        <li class="novelty_block-hidden_options" data-full_description>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</li>
                        <li class="novelty_block-hidden_options" data-remark>colored vinyl</li>
                        <li class="novelty_block-hidden_options" data-envelope_status>EX</li>
                        <li class="novelty_block-hidden_options" data-plate_status>G</li>
                        <li class="novelty_block-hidden_options" data-price>400</li>
                    </ul>
                </div>  
            </a>    
            
            <a href="#novelty-popap" class="fancybox">
                <div class="novelty_block-item">
                    <img data-lazy="/img/novelty/beatles/white/3.jpg"  alt="White Album The Beatles LP" data-pic class="novelty_block-img vinyl-img" data-pic>
                    <h3 class="novelty_block-title vinyl-title" data-name>The Beatles</h3>
                    <p class="novelty_block-line"></p>
                    <p class="novelty_block-album vinyl-album" data-album>White Album</p>

                    <ul class="novelty_block-hidden">
                        <li class="novelty_block-hidden_options" data-photo_main>/img/novelty/beatles/white/3.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_2>/img/novelty/beatles/white/2.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_3>/img/novelty/beatles/white/3.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_4>/img/novelty/beatles/white/4.jpg</li>
                        <li class="novelty_block-hidden_options" data-type>LP</li>
                        <li class="novelty_block-hidden_options" data-label>Мелодия</li>
                        <li class="novelty_block-hidden_options" data-country>USSSR</li>
                        <li class="novelty_block-hidden_options" data-released>1976</li>
                        <li class="novelty_block-hidden_options" data-label_disc>UAS 29885</li>
                        <li class="novelty_block-hidden_options" data-short_description>This is minimalistic, but fantastic album famous group in the world.</li>
                        <li class="novelty_block-hidden_options" data-full_description>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</li>
                        <li class="novelty_block-hidden_options" data-remark>colored vinyl</li>
                        <li class="novelty_block-hidden_options" data-envelope_status>EX</li>
                        <li class="novelty_block-hidden_options" data-plate_status>G</li>
                        <li class="novelty_block-hidden_options" data-price>400</li>
                    </ul>
                </div>  
            </a>    
            
            <a href="#novelty-popap" class="fancybox">
                <div class="novelty_block-item">
                    <img data-lazy="/img/novelty/beatles/white/4.jpg"  alt="White Album The Beatles LP" data-pic class="novelty_block-img vinyl-img" data-pic>
                    <h3 class="novelty_block-title vinyl-title" data-name>The Beatles</h3>
                    <p class="novelty_block-line"></p>
                    <p class="novelty_block-album vinyl-album" data-album>White Album</p>

                    <ul class="novelty_block-hidden">
                        <li class="novelty_block-hidden_options" data-photo_main>/img/novelty/beatles/white/4.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_2>/img/novelty/beatles/white/2.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_3>/img/novelty/beatles/white/3.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_4>/img/novelty/beatles/white/4.jpg</li>
                        <li class="novelty_block-hidden_options" data-type>LP</li>
                        <li class="novelty_block-hidden_options" data-label>Мелодия</li>
                        <li class="novelty_block-hidden_options" data-country>USSSR</li>
                        <li class="novelty_block-hidden_options" data-released>1976</li>
                        <li class="novelty_block-hidden_options" data-label_disc>UAS 29885</li>
                        <li class="novelty_block-hidden_options" data-short_description>This is minimalistic, but fantastic album famous group in the world.</li>
                        <li class="novelty_block-hidden_options" data-full_description>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</li>
                        <li class="novelty_block-hidden_options" data-remark>colored vinyl</li>
                        <li class="novelty_block-hidden_options" data-envelope_status>EX</li>
                        <li class="novelty_block-hidden_options" data-plate_status>G</li>
                        <li class="novelty_block-hidden_options" data-price>400</li>
                    </ul>
                </div>  
            </a>    
            
            <a href="#novelty-popap" class="fancybox">
                <div class="novelty_block-item">
                    <img data-lazy="/img/novelty/beatles/white/1.jpg"  alt="White Album The Beatles LP" data-pic class="novelty_block-img vinyl-img" data-pic>
                    <h3 class="novelty_block-title vinyl-title" data-name>The Beatles</h3>
                    <p class="novelty_block-line"></p>
                    <p class="novelty_block-album vinyl-album" data-album>White Album</p>

                    <ul class="novelty_block-hidden">
                        <li class="novelty_block-hidden_options" data-photo_main>/img/novelty/beatles/white/1.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_2>/img/novelty/beatles/white/2.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_3>/img/novelty/beatles/white/3.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_4>/img/novelty/beatles/white/4.jpg</li>
                        <li class="novelty_block-hidden_options" data-type>LP</li>
                        <li class="novelty_block-hidden_options" data-label>Мелодия</li>
                        <li class="novelty_block-hidden_options" data-country>USSSR</li>
                        <li class="novelty_block-hidden_options" data-released>1976</li>
                        <li class="novelty_block-hidden_options" data-label_disc>UAS 29885</li>
                        <li class="novelty_block-hidden_options" data-short_description>This is minimalistic, but fantastic album famous group in the world.</li>
                        <li class="novelty_block-hidden_options" data-full_description>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</li>
                        <li class="novelty_block-hidden_options" data-remark>colored vinyl</li>
                        <li class="novelty_block-hidden_options" data-envelope_status>EX</li>
                        <li class="novelty_block-hidden_options" data-plate_status>G</li>
                        <li class="novelty_block-hidden_options" data-price>400</li>
                    </ul>
                </div>  
            </a>    
            
            <a href="#novelty-popap" class="fancybox">
                <div class="novelty_block-item">
                    <img data-lazy="/img/novelty/beatles/white/2.jpg"  alt="White Album The Beatles LP" data-pic class="novelty_block-img vinyl-img" data-pic>
                    <h3 class="novelty_block-title vinyl-title" data-name>The Beatles</h3>
                    <p class="novelty_block-line"></p>
                    <p class="novelty_block-album vinyl-album" data-album>White Album</p>

                    <ul class="novelty_block-hidden">
                        <li class="novelty_block-hidden_options" data-photo_main>/img/novelty/beatles/white/2.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_2>/img/novelty/beatles/white/2.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_3>/img/novelty/beatles/white/3.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_4>/img/novelty/beatles/white/4.jpg</li>
                        <li class="novelty_block-hidden_options" data-type>LP</li>
                        <li class="novelty_block-hidden_options" data-label>Мелодия</li>
                        <li class="novelty_block-hidden_options" data-country>USSSR</li>
                        <li class="novelty_block-hidden_options" data-released>1976</li>
                        <li class="novelty_block-hidden_options" data-label_disc>UAS 29885</li>
                        <li class="novelty_block-hidden_options" data-short_description>This is minimalistic, but fantastic album famous group in the world.</li>
                        <li class="novelty_block-hidden_options" data-full_description>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</li>
                        <li class="novelty_block-hidden_options" data-remark>colored vinyl</li>
                        <li class="novelty_block-hidden_options" data-envelope_status>EX</li>
                        <li class="novelty_block-hidden_options" data-plate_status>G</li>
                        <li class="novelty_block-hidden_options" data-price>400</li>
                    </ul>
                </div>  
            </a>    
            
            <a href="#novelty-popap" class="fancybox">
                <div class="novelty_block-item">
                    <img data-lazy="/img/novelty/beatles/white/3.jpg"  alt="White Album The Beatles LP" data-pic class="novelty_block-img vinyl-img" data-pic>
                    <h3 class="novelty_block-title vinyl-title" data-name>The Beatles</h3>
                    <p class="novelty_block-line"></p>
                    <p class="novelty_block-album vinyl-album" data-album>White Album</p>

                    <ul class="novelty_block-hidden">
                        <li class="novelty_block-hidden_options" data-photo_main>/img/novelty/beatles/white/3.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_2>/img/novelty/beatles/white/2.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_3>/img/novelty/beatles/white/3.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_4>/img/novelty/beatles/white/4.jpg</li>
                        <li class="novelty_block-hidden_options" data-type>LP</li>
                        <li class="novelty_block-hidden_options" data-label>Мелодия</li>
                        <li class="novelty_block-hidden_options" data-country>USSSR</li>
                        <li class="novelty_block-hidden_options" data-released>1976</li>
                        <li class="novelty_block-hidden_options" data-label_disc>UAS 29885</li>
                        <li class="novelty_block-hidden_options" data-short_description>This is minimalistic, but fantastic album famous group in the world.</li>
                        <li class="novelty_block-hidden_options" data-full_description>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</li>
                        <li class="novelty_block-hidden_options" data-remark>colored vinyl</li>
                        <li class="novelty_block-hidden_options" data-envelope_status>EX</li>
                        <li class="novelty_block-hidden_options" data-plate_status>G</li>
                        <li class="novelty_block-hidden_options" data-price>400</li>
                    </ul>
                </div>  
            </a>    
          
        </div>
    </div>
</section>


<div id="novelty-popap" class= "novelty_popap-wrapper">
    <div class="novelty_popap fade">
            <div class="novelty_popap-left">
                <img src="" alt="" class="novelty_popap-img novelty_popap-img-1">
                <img src="" alt="" class="novelty_popap-img novelty_popap-img-2">
                <img src="" alt="" class="novelty_popap-img novelty_popap-img-3">
                <img src="" alt="" class="novelty_popap-img novelty_popap-img-4">
            </div>

            <div class="novelty_popap-right">
                <h3 class="novelty_popap-title"></h3>
                <p class="novelty_popap-album"></p>
                <p class="novelty_popap-type"></p>
                <p class="novelty_popap-label"></p>
                <p class="novelty_popap-country"></p>
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
