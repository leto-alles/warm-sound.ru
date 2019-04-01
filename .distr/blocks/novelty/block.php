{% from './data.njk' import data as noveltyItems %}

<section class="novelty" id="novelty">
    <div class="container">
        <h2 class="section-title novelty-title">Новые поступления</h2>
        <div class="novelty_block slick-novelty"> 
        {% for item in noveltyItems %}    

            <div class="novelty_block-item">
                <img data-lazy="{{ item.photo_main }}"  alt="{{ item.photo_alt }}" class="novelty_block-img vinyl-img">
                <h3 class="novelty_block-title vinyl-title">{{ item.title_artist }}</h3>
                <p class="novelty_block-album vinyl-album">{{ item.title_album }}</p>
            </div>  


        {% endfor %}  

        </div>
    </div>
</section>


