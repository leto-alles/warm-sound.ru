{% from './data_ru.njk' import data as ruItems %}
{% from './data_en.njk' import data as enItems %}
<div class="vinyl_decoration"></div>
<section class="vinyl" id="vinyl">
    <div class="container">
        <h2 class="section-title vinyl-title">Винил</h2>

        <div class="vinyl_tab-block">
			<div class="vinyl_tab vinyl_tab_ru tab_active ta">Отечественный винил</div>
			<div class="vinyl_tab vinyl_tab_en">Иностранный винил</div>
		</div>



        <div class="vinyl_block vinyl_block_active" id="vinyl_block_ru"> 
        {% for item in ruItems %}    
                <div class="vinyl_block-item">
                   
 
                  
                </div>     
        {% endfor %}  
        </div>

    </div>
</section>





