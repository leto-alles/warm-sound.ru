{% from './data_ru.njk' import data as ruItems %}
{% from './data_en.njk' import data as enItems %}
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
            <div class="container">    
            {% for item in ruItems %}    
                <div class="vinyl_block-item">
                   <img src="{{ item.photo_main }}"  alt="{{ item.photo_alt }}" data-pic class="vinyl_block-img vinyl-img" data-pic>
 
                  
                </div>     
            {% endfor %} 
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
        </div>

        <div class="vinyl_block" id="vinyl_block_en"> 
            
            {% for item in enItems %}    
                <div class="vinyl_block-item">
                   <img src="{{ item.photo_main }}"  alt="{{ item.photo_alt }}" data-pic class="vinyl_block-img vinyl-img" data-pic>
 
                  
                </div>     
            {% endfor %} 
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





