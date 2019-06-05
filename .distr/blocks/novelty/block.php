{% from './data.njk' import data as noveltyItems %}

<section class="novelty" id="novelty">
    <div class="container">
        <h2 class="section-title novelty-title">Новые поступления</h2>
        <div class="novelty_block slick-novelty"> 
        {% for item in noveltyItems %}    
            
                <div class="novelty_block-item">
                    <a href="#novelty-popap" class="fancybox novelty_block-trg">
                    <img data-lazy="{{ item.photo_main }}"  alt="{{ item.photo_alt }}" data-pic class="novelty_block-img vinyl-img" data-pic>
                     <h3 class="novelty_block-title vinyl-title" data-name>{{ item.title_artist }}</h3>
                    <p class="novelty_block-line"></p>
                    <p class="novelty_block-album vinyl-album" data-album>{{ item.title_album }}</p>

                    <ul class="novelty_block-hidden">
                        <li class="novelty_block-hidden_options" data-photo_main>{{ item.photo_main }}</li>
                        <li class="novelty_block-hidden_options" data-photo_2>{{ item.photo_2 }}</li>
                        <li class="novelty_block-hidden_options" data-photo_3>{{ item.photo_3 }}</li>
                        <li class="novelty_block-hidden_options" data-photo_4>{{ item.photo_4 }}</li>
                        <li class="novelty_block-hidden_options" data-photo_alt>{{ item.photo_alt }}</li>
                        <li class="novelty_block-hidden_options" data-type>{{ item.type }}</li>
                        <li class="novelty_block-hidden_options" data-label>{{ item.label }}</li>
                        <li class="novelty_block-hidden_options" data-country>{{ item.country }}</li>
                        <li class="novelty_block-hidden_options" data-label_disc>{{ item.label_disc }}</li>
                        <li class="novelty_block-hidden_options" data-short_description>{{ item.short_description }}</li>
                        <li class="novelty_block-hidden_options" data-full_description>{{ item.full_description }}</li>
                        <li class="novelty_block-hidden_options" data-remark>{{ item.remark }}</li>
                        <li class="novelty_block-hidden_options" data-envelope_status>{{ item.envelope_status }}</li>
                        <li class="novelty_block-hidden_options" data-plate_status>{{ item.plate_status }}</li>
                        <li class="novelty_block-hidden_options" data-price>{{ item.price }}</li>
                    </ul>
                    </a>  
                </div>     
        {% endfor %}  
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


