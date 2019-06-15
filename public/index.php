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
    </div>
        <div class="vinyl_tab-block" id="vinyl_tab-change">
			<div class="vinyl_tab vinyl_tab_ru tab_active">Отечественный винил</div>
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
             
            <div class="vinyl_btn-up">
                <svg width="50px" height="50px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                <g id="Button-circle-triangle-up" sketch:type="MSLayerGroup" transform="translate(1.000000, 1.000000)" stroke="#000000" stroke-width="2">
                <circle id="Oval" sketch:type="MSShapeGroup" cx="31" cy="31" r="31"></circle>
                <path d="M31,5 C45.4,5 57,16.6 57,31" id="Shape" sketch:type="MSShapeGroup"></path>
                <path d="M31,57 C16.6,57 5,45.4 5,31" id="Shape" sketch:type="MSShapeGroup"></path>
                <path d="M42.3,37.9 C42.7,37.9 43.1,37.6 43.1,37.2 L32.7,21.7 C32.4,21.3 31.6,21 31.3,21 L31.3,21 C31.3,21 30,21.3 29.7,21.7 L19.1,37.2 C19.1,37.6 19.4,37.9 19.9,37.9 L42.3,37.9 L42.3,37.9 Z" id="Shape" sketch:type="MSShapeGroup"></path>
                </g>
                </g>
                </svg>
            </div> 
            <div class="vinyl_btn-more more__link">
                <span class="vinyl_btn-more-l">показать</span>
                <span class="vinyl_btn-more-r">больше</span>   
                <div class="vinyl_btn-more-decoration">
                    <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50">
                        <defs>
                            <path fill="#000000" id="i-2187" d="M24,0C10.767,0,0,10.767,0,24s10.767,24,24,24s24-10.767,24-24S37.233,0,24,0z M24,46C11.869,46,2,36.131,2,24 S11.869,2,24,2s22,9.869,22,22S36.131,46,24,46z M24,13c-6.065,0-11,4.935-11,11s4.935,11,11,11s11-4.935,11-11S30.065,13,24,13z M24,33c-4.963,0-9-4.037-9-9s4.037-9,9-9s9,4.037,9,9S28.963,33,24,33z M24,36.333v2c-7.903,0-14.333-6.43-14.333-14.333h2 C11.667,30.801,17.199,36.333,24,36.333z M38.333,24h-2c0-6.801-5.532-12.334-12.333-12.334v-2 C31.903,9.666,38.333,16.097,38.333,24z M24,39.667v2c-9.741,0-17.667-7.926-17.667-17.667h2C8.333,32.639,15.361,39.667,24,39.667z M41.667,24h-2c0-8.639-7.028-15.666-15.667-15.666v-2C33.741,6.334,41.667,14.259,41.667,24z M24,43v2C12.421,45,3,35.579,3,24h2 C5,34.477,13.523,43,24,43z M45,24h-2c0-10.477-8.523-19-19-19V3C35.579,3,45,12.421,45,24z M24,21c-1.654,0-3,1.346-3,3 s1.346,3,3,3s3-1.346,3-3S25.654,21,24,21z M24,25c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S24.552,25,24,25z"/> 
                        </defs>

                        <use x="0" y="0" xlink:href="#i-2187"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="vinyl_block" id="vinyl_block_en"> 
            
                
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
             
            <div class="vinyl_btn-up">
                <svg width="50px" height="50px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                <g id="Button-circle-triangle-up" sketch:type="MSLayerGroup" transform="translate(1.000000, 1.000000)" stroke="#000000" stroke-width="2">
                <circle id="Oval" sketch:type="MSShapeGroup" cx="31" cy="31" r="31"></circle>
                <path d="M31,5 C45.4,5 57,16.6 57,31" id="Shape" sketch:type="MSShapeGroup"></path>
                <path d="M31,57 C16.6,57 5,45.4 5,31" id="Shape" sketch:type="MSShapeGroup"></path>
                <path d="M42.3,37.9 C42.7,37.9 43.1,37.6 43.1,37.2 L32.7,21.7 C32.4,21.3 31.6,21 31.3,21 L31.3,21 C31.3,21 30,21.3 29.7,21.7 L19.1,37.2 C19.1,37.6 19.4,37.9 19.9,37.9 L42.3,37.9 L42.3,37.9 Z" id="Shape" sketch:type="MSShapeGroup"></path>
                </g>
                </g>
                </svg>
            </div> 
            <div class="vinyl_btn-more more__link">
                <span class="vinyl_btn-more-l">показать</span>
                <span class="vinyl_btn-more-r">больше</span>   
                <div class="vinyl_btn-more-decoration">
                    <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50">
                        <defs>
                            <path fill="#000000" id="i-2187" d="M24,0C10.767,0,0,10.767,0,24s10.767,24,24,24s24-10.767,24-24S37.233,0,24,0z M24,46C11.869,46,2,36.131,2,24 S11.869,2,24,2s22,9.869,22,22S36.131,46,24,46z M24,13c-6.065,0-11,4.935-11,11s4.935,11,11,11s11-4.935,11-11S30.065,13,24,13z M24,33c-4.963,0-9-4.037-9-9s4.037-9,9-9s9,4.037,9,9S28.963,33,24,33z M24,36.333v2c-7.903,0-14.333-6.43-14.333-14.333h2 C11.667,30.801,17.199,36.333,24,36.333z M38.333,24h-2c0-6.801-5.532-12.334-12.333-12.334v-2 C31.903,9.666,38.333,16.097,38.333,24z M24,39.667v2c-9.741,0-17.667-7.926-17.667-17.667h2C8.333,32.639,15.361,39.667,24,39.667z M41.667,24h-2c0-8.639-7.028-15.666-15.667-15.666v-2C33.741,6.334,41.667,14.259,41.667,24z M24,43v2C12.421,45,3,35.579,3,24h2 C5,34.477,13.523,43,24,43z M45,24h-2c0-10.477-8.523-19-19-19V3C35.579,3,45,12.421,45,24z M24,21c-1.654,0-3,1.346-3,3 s1.346,3,3,3s3-1.346,3-3S25.654,21,24,21z M24,25c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S24.552,25,24,25z"/> 
                        </defs>

                        <use x="0" y="0" xlink:href="#i-2187"/>
                    </svg>
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
