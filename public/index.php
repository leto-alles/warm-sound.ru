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
        <div class="novelty_block"> 
            
            <a href="#novelty-popap" class="novelty_block-trg fancybox">
                <div class="novelty_block-item">
                    <img src="/img/common/police/synchronicity/pic-1.jpg"  alt="LP Police Synchronicity" data-pic class="novelty_block-img vinyl-img" data-pic>
                    <h3 class="novelty_block-title vinyl-title" data-name>The Police</h3>
                    <p class="novelty_block-line"></p>
                    <p class="novelty_block-album vinyl-album" data-album>Synchronicity</p>

                    <ul class="novelty_block-hidden">
                        <li class="novelty_block-hidden_options" data-photo_main>/img/common/police/synchronicity/pic-1.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_2>/img/common/police/synchronicity/pic-2.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_3>/img/common/police/synchronicity/pic-3.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_4>/img/common/police/synchronicity/pic-4.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_alt>LP Police Synchronicity</li>
                        <li class="novelty_block-hidden_options" data-type>LP</li>
                        <li class="novelty_block-hidden_options" data-label>A&amp;M Records</li>
                        <li class="novelty_block-hidden_options" data-country>UK</li>
                        <li class="novelty_block-hidden_options" data-label_disc>AMLX 63735</li>
                        <li class="novelty_block-hidden_options" data-short_description></li>
                        <li class="novelty_block-hidden_options" data-full_description></li>
                        <li class="novelty_block-hidden_options" data-remark>colored vinyl</li>
                        <li class="novelty_block-hidden_options" data-envelope_status>4/5</li>
                        <li class="novelty_block-hidden_options" data-plate_status>4/5</li>
                        <li class="novelty_block-hidden_options" data-price>1200</li>
                    </ul>
                </div>  
            </a>    
            
            <a href="#novelty-popap" class="novelty_block-trg fancybox">
                <div class="novelty_block-item">
                    <img src="/img/common/coltrane/My Favorite Things/pic-1.jpg"  alt="LP Coltrane John My Favorite Things" data-pic class="novelty_block-img vinyl-img" data-pic>
                    <h3 class="novelty_block-title vinyl-title" data-name>Coltrane John</h3>
                    <p class="novelty_block-line"></p>
                    <p class="novelty_block-album vinyl-album" data-album>My Favorite Things</p>

                    <ul class="novelty_block-hidden">
                        <li class="novelty_block-hidden_options" data-photo_main>/img/common/coltrane/My Favorite Things/pic-1.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_2>/img/common/coltrane/My Favorite Things/pic-2.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_3>/img/common/coltrane/My Favorite Things/pic-3.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_4>/img/common/coltrane/My Favorite Things/pic-4.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_alt>LP Coltrane John My Favorite Things</li>
                        <li class="novelty_block-hidden_options" data-type>2 LP</li>
                        <li class="novelty_block-hidden_options" data-label>Not Now Music</li>
                        <li class="novelty_block-hidden_options" data-country>USSSR</li>
                        <li class="novelty_block-hidden_options" data-label_disc>NOT2LP149</li>
                        <li class="novelty_block-hidden_options" data-short_description></li>
                        <li class="novelty_block-hidden_options" data-full_description></li>
                        <li class="novelty_block-hidden_options" data-remark>colored vinyl</li>
                        <li class="novelty_block-hidden_options" data-envelope_status>5/5</li>
                        <li class="novelty_block-hidden_options" data-plate_status>4/5</li>
                        <li class="novelty_block-hidden_options" data-price>2300</li>
                    </ul>
                </div>  
            </a>    
            
            <a href="#novelty-popap" class="novelty_block-trg fancybox">
                <div class="novelty_block-item">
                    <img src="/img/novelty/beatles/white/3.JPG"  alt="White Album The Beatles LP" data-pic class="novelty_block-img vinyl-img" data-pic>
                    <h3 class="novelty_block-title vinyl-title" data-name>The Beatles</h3>
                    <p class="novelty_block-line"></p>
                    <p class="novelty_block-album vinyl-album" data-album>White Album</p>

                    <ul class="novelty_block-hidden">
                        <li class="novelty_block-hidden_options" data-photo_main>/img/novelty/beatles/white/3.JPG</li>
                        <li class="novelty_block-hidden_options" data-photo_2>/img/novelty/beatles/white/2.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_3>/img/novelty/beatles/white/3.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_4>/img/novelty/beatles/white/4.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_alt>White Album The Beatles LP</li>
                        <li class="novelty_block-hidden_options" data-type>LP</li>
                        <li class="novelty_block-hidden_options" data-label>Мелодия</li>
                        <li class="novelty_block-hidden_options" data-country>USSSR</li>
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
            
            <a href="#novelty-popap" class="novelty_block-trg fancybox">
                <div class="novelty_block-item">
                    <img src="/img/novelty/beatles/white/4.jpg"  alt="White Album The Beatles LP" data-pic class="novelty_block-img vinyl-img" data-pic>
                    <h3 class="novelty_block-title vinyl-title" data-name>The Beatles</h3>
                    <p class="novelty_block-line"></p>
                    <p class="novelty_block-album vinyl-album" data-album>White Album</p>

                    <ul class="novelty_block-hidden">
                        <li class="novelty_block-hidden_options" data-photo_main>/img/novelty/beatles/white/4.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_2>/img/novelty/beatles/white/2.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_3>/img/novelty/beatles/white/3.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_4>/img/novelty/beatles/white/4.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_alt>White Album The Beatles LP</li>
                        <li class="novelty_block-hidden_options" data-type>LP</li>
                        <li class="novelty_block-hidden_options" data-label>Мелодия</li>
                        <li class="novelty_block-hidden_options" data-country>USSSR</li>
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
            
            <a href="#novelty-popap" class="novelty_block-trg fancybox">
                <div class="novelty_block-item">
                    <img src="/img/novelty/beatles/white/1.jpg"  alt="White Album The Beatles LP" data-pic class="novelty_block-img vinyl-img" data-pic>
                    <h3 class="novelty_block-title vinyl-title" data-name>The Beatles</h3>
                    <p class="novelty_block-line"></p>
                    <p class="novelty_block-album vinyl-album" data-album>White Album</p>

                    <ul class="novelty_block-hidden">
                        <li class="novelty_block-hidden_options" data-photo_main>/img/novelty/beatles/white/1.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_2>/img/novelty/beatles/white/2.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_3>/img/novelty/beatles/white/3.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_4>/img/novelty/beatles/white/4.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_alt>White Album The Beatles LP</li>
                        <li class="novelty_block-hidden_options" data-type>LP</li>
                        <li class="novelty_block-hidden_options" data-label>Мелодия</li>
                        <li class="novelty_block-hidden_options" data-country>USSSR</li>
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
            
            <a href="#novelty-popap" class="novelty_block-trg fancybox">
                <div class="novelty_block-item">
                    <img src="/img/novelty/beatles/white/2.jpg"  alt="White Album The Beatles LP" data-pic class="novelty_block-img vinyl-img" data-pic>
                    <h3 class="novelty_block-title vinyl-title" data-name>The Beatles</h3>
                    <p class="novelty_block-line"></p>
                    <p class="novelty_block-album vinyl-album" data-album>White Album</p>

                    <ul class="novelty_block-hidden">
                        <li class="novelty_block-hidden_options" data-photo_main>/img/novelty/beatles/white/2.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_2>/img/novelty/beatles/white/2.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_3>/img/novelty/beatles/white/3.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_4>/img/novelty/beatles/white/4.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_alt>White Album The Beatles LP</li>
                        <li class="novelty_block-hidden_options" data-type>LP</li>
                        <li class="novelty_block-hidden_options" data-label>Мелодия</li>
                        <li class="novelty_block-hidden_options" data-country>USSSR</li>
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
            
            <a href="#novelty-popap" class="novelty_block-trg fancybox">
                <div class="novelty_block-item">
                    <img src="/img/novelty/beatles/white/3.jpg"  alt="White Album The Beatles LP" data-pic class="novelty_block-img vinyl-img" data-pic>
                    <h3 class="novelty_block-title vinyl-title" data-name>The Beatles</h3>
                    <p class="novelty_block-line"></p>
                    <p class="novelty_block-album vinyl-album" data-album>White Album</p>

                    <ul class="novelty_block-hidden">
                        <li class="novelty_block-hidden_options" data-photo_main>/img/novelty/beatles/white/3.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_2>/img/novelty/beatles/white/2.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_3>/img/novelty/beatles/white/3.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_4>/img/novelty/beatles/white/4.jpg</li>
                        <li class="novelty_block-hidden_options" data-photo_alt>White Album The Beatles LP</li>
                        <li class="novelty_block-hidden_options" data-type>LP</li>
                        <li class="novelty_block-hidden_options" data-label>Мелодия</li>
                        <li class="novelty_block-hidden_options" data-country>USSSR</li>
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


<div id="novelty-popap" class="novelty_popap-wrapper">
    <div class="novelty_popap">
            <div class="novelty_popap-left">
                <div class="novelty_popap-img-block">
                    <img src="" alt="" class="novelty_popap-img novelty_popap-img-1 novelty_popap-img-main">
                    <img src="" alt="" class="novelty_popap-img novelty_popap-img-2 novelty_popap-img-second">
                    <img src="" alt="" class="novelty_popap-img novelty_popap-img-3 novelty_popap-img-second">
                    <img src="" alt="" class="novelty_popap-img novelty_popap-img-4 novelty_popap-img-second">
                </div>
            </div>

            <div class="novelty_popap-right">
                <h3 class="novelty_popap-title"></h3>
                <p class="novelty_popap-album"></p>
                <p class="novelty_popap-type">Формат: <span></span></p>
                <p class="novelty_popap-label">Производитель: <span></span></p>
                <p class="novelty_popap-country">Страна: <span></span></p>
                <p class="novelty_popap-label_disc">Кат.номер: <span></span></p>
                <p class="novelty_popap-envelope_status">Состояние конверта: <span></span></p>
                <p class="novelty_popap-plate_status">Состояние пластинки: <span></span></p>
                <p class="novelty_popap-price">Цена: <span class="novelty_popap-cost"></span> <span class="novelty_popap-price-s">&#8381;</span></p>
            </div>
    </div>
</div>




	</div>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.7/js/jquery.fancybox.min.js" defer="defer"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/lightzoom.min.js"></script>
	
	<script>




</script>
</body>
</html>
