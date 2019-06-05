{% from './data_ru.njk' import data as ruItems %}
{% from './data_en.njk' import data as enItems %}
<div class="vinyl_decoration"></div>
<section class="vinyl" id="vinyl">
    <div class="container">
        <h2 class="section-title vinyl-title">Винил</h2>




        <div class="novelty_block "> 
        {% for item in noveltyItems %}    
            
                <div class="novelty_block-item">
                   
 
                  
                </div>     
        {% endfor %}  
        </div>
    </div>
</section>





