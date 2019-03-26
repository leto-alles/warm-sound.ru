{% from './data.njk' import data as noveltyItems %}

<section class="novelty" id="novelty">
    <div class="container">
        <h2 class="section-title novelty-title">Новые поступления</h2>
        <div class="novelty_block"> 
        {% for item in noveltyItems %}    
            <div class="novelty_block-item block-closed">
                <h3 class="novelty_block-title vinyl-title">{{ item.title_group }}</h3>
            </div>  
        {% endfor %}         
        </div>
        {% if noveltyItems.length > 4 %}
        <div class="novelty_show-more">
            <h4 style="color:#FFFFFF;">море</h4>
        </div>
        {% endif %} 
    </div>
</section>
