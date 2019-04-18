{% from './data.njk' import data as noveltyItems %}

<section class="novelty" id="novelty">
    <div class="container">
        <h2 class="section-title novelty-title">Новые поступления</h2>
        <div class="novelty_block slick-novelty"> 
        {% for item in noveltyItems %}    
        <a href="#novelty-popap" class="fancybox">
            <div class="novelty_block-item">
                <img data-lazy="{{ item.photo_main }}"  alt="{{ item.photo_alt }}" class="novelty_block-img vinyl-img">
                <h3 class="novelty_block-title vinyl-title" data-name>{{ item.title_artist }}</h3>
                <p class="novelty_block-line"></p>
                <p class="novelty_block-album vinyl-album">{{ item.title_album }}</p>
            </div>  
        </a>    

        {% endfor %}  
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

