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
    <h1 class="header_title-name">Warm-Sound</h1>
</section>
		

<section class="novelty" id="novelty">
    <div class="container">
        <h2 class="section-title novelty-title">Новые поступления</h2>
        <div class="novelty_block slick-novelty"> 
            
            
                <div class="novelty_block-item">
                    <a href="#novelty-popap" class="fancybox novelty_block-trg">
                    <img data-lazy="/img/common/police/synchronicity/pic-1.jpg"  alt="LP Police Synchronicity" data-pic class="novelty_block-img vinyl-img" data-pic>
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
                    </a>  
                </div>     
            
            
                <div class="novelty_block-item">
                    <a href="#novelty-popap" class="fancybox novelty_block-trg">
                    <img data-lazy="/img/common/coltrane/My Favorite Things/pic-1.jpg"  alt="LP Coltrane John My Favorite Things" data-pic class="novelty_block-img vinyl-img" data-pic>
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
                    </a>  
                </div>     
            
            
                <div class="novelty_block-item">
                    <a href="#novelty-popap" class="fancybox novelty_block-trg">
                    <img data-lazy="/img/common/police/synchronicity/pic-1.jpg"  alt="LP Police Synchronicity" data-pic class="novelty_block-img vinyl-img" data-pic>
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
                    </a>  
                </div>     
            
            
                <div class="novelty_block-item">
                    <a href="#novelty-popap" class="fancybox novelty_block-trg">
                    <img data-lazy="/img/common/coltrane/My Favorite Things/pic-1.jpg"  alt="LP Coltrane John My Favorite Things" data-pic class="novelty_block-img vinyl-img" data-pic>
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
                    </a>  
                </div>     
            
            
                <div class="novelty_block-item">
                    <a href="#novelty-popap" class="fancybox novelty_block-trg">
                    <img data-lazy="/img/common/police/synchronicity/pic-1.jpg"  alt="LP Police Synchronicity" data-pic class="novelty_block-img vinyl-img" data-pic>
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
                    </a>  
                </div>     
            
            
                <div class="novelty_block-item">
                    <a href="#novelty-popap" class="fancybox novelty_block-trg">
                    <img data-lazy="/img/common/coltrane/My Favorite Things/pic-1.jpg"  alt="LP Coltrane John My Favorite Things" data-pic class="novelty_block-img vinyl-img" data-pic>
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
                    </a>  
                </div>     
          
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
                <div class="novelty_popap-container">
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



		

<div class="vinyl_decoration"></div>
<section class="vinyl" id="vinyl">
    <div class="container">
        <h2 class="section-title vinyl-title">Винил</h2>

        <div class="vinyl_tab-block" id="vinyl_tab-change">
			<div class="vinyl_tab vinyl_tab_ru tab_active ta">Отечественный винил</div>
			<div class="vinyl_tab vinyl_tab_en">Иностранный винил</div>
		</div>



        <div class="vinyl_block vinyl_block_active" id="vinyl_block_ru"> 
                
                <div class="vinyl_block-item">
                   <img src="/img/common/police/synchronicity/pic-1.jpg"  alt="LP Police Synchronicity" data-pic class="vinyl_block-img vinyl-img" data-pic>
 
                  
                </div>     
                
                <div class="vinyl_block-item">
                   <img src="/img/common/coltrane/My Favorite Things/pic-1.jpg"  alt="LP Coltrane John My Favorite Things" data-pic class="vinyl_block-img vinyl-img" data-pic>
 
                  
                </div>     
                
                <div class="vinyl_block-item">
                   <img src="/img/common/police/synchronicity/pic-1.jpg"  alt="LP Police Synchronicity" data-pic class="vinyl_block-img vinyl-img" data-pic>
 
                  
                </div>     
                
                <div class="vinyl_block-item">
                   <img src="/img/common/coltrane/My Favorite Things/pic-1.jpg"  alt="LP Coltrane John My Favorite Things" data-pic class="vinyl_block-img vinyl-img" data-pic>
 
                  
                </div>     
                
                <div class="vinyl_block-item">
                   <img src="/img/common/police/synchronicity/pic-1.jpg"  alt="LP Police Synchronicity" data-pic class="vinyl_block-img vinyl-img" data-pic>
 
                  
                </div>     
                
                <div class="vinyl_block-item">
                   <img src="/img/common/coltrane/My Favorite Things/pic-1.jpg"  alt="LP Coltrane John My Favorite Things" data-pic class="vinyl_block-img vinyl-img" data-pic>
 
                  
                </div>     
                
                <div class="vinyl_block-item">
                   <img src="/img/common/police/synchronicity/pic-1.jpg"  alt="LP Police Synchronicity" data-pic class="vinyl_block-img vinyl-img" data-pic>
 
                  
                </div>     
                
                <div class="vinyl_block-item">
                   <img src="/img/common/coltrane/My Favorite Things/pic-1.jpg"  alt="LP Coltrane John My Favorite Things" data-pic class="vinyl_block-img vinyl-img" data-pic>
 
                  
                </div>     
                
                <div class="vinyl_block-item">
                   <img src="/img/common/police/synchronicity/pic-1.jpg"  alt="LP Police Synchronicity" data-pic class="vinyl_block-img vinyl-img" data-pic>
 
                  
                </div>     
                
                <div class="vinyl_block-item">
                   <img src="/img/common/coltrane/My Favorite Things/pic-1.jpg"  alt="LP Coltrane John My Favorite Things" data-pic class="vinyl_block-img vinyl-img" data-pic>
 
                  
                </div>     
                
                <div class="vinyl_block-item">
                   <img src="/img/common/police/synchronicity/pic-1.jpg"  alt="LP Police Synchronicity" data-pic class="vinyl_block-img vinyl-img" data-pic>
 
                  
                </div>     
                
                <div class="vinyl_block-item">
                   <img src="/img/common/coltrane/My Favorite Things/pic-1.jpg"  alt="LP Coltrane John My Favorite Things" data-pic class="vinyl_block-img vinyl-img" data-pic>
 
                  
                </div>     
                
                <div class="vinyl_block-item">
                   <img src="/img/common/police/synchronicity/pic-1.jpg"  alt="LP Police Synchronicity" data-pic class="vinyl_block-img vinyl-img" data-pic>
 
                  
                </div>     
                
                <div class="vinyl_block-item">
                   <img src="/img/common/coltrane/My Favorite Things/pic-1.jpg"  alt="LP Coltrane John My Favorite Things" data-pic class="vinyl_block-img vinyl-img" data-pic>
 
                  
                </div>     
             
            <div class="vinyl_btn-up"></div> 
            <div class="vinyl_btn-more more__link">
                <div class="vinyl_btn-more-decoration">+</div>
            </div>
        </div>

    </div>
</section>






		
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
