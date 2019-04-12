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


<div id="novelty-popap" class= "novelty-popap-wrapper">
    <div class="novelty_popap">     
        <div class="novelty_popap-item">
            <h3 class="novelty_popap-title pp"></h3>
            <p class="novelty_popap-line"></p>
            <p class="novelty_popap-album"></p>
        </div> 
    </div>
</div>

