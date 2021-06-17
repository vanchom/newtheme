<?php /*Template Name: bk php */


get_header();?>
<section class="kb-header">
    <h1><?php the_field('kb_header') ?></h1>
</section>
<section class="select-container">
        <div class="version-box">
            <h2>Version</h2>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"></button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#about">1</a>
                    <a href="#base">2</a>
                    <a href="#blog">3</a>
                </div>
            </div>
        </div>
        <div class="colors-boxes">
            <div class="colors" id="color1"></div>
            <div class="colors" id="color2"></div>
            <div class="colors" id="color3"></div>
        </div>
</section>
<section class="services-container">
    <div class="services" id="4">
        <div class="service-description">
            <h2>V 4</h2>
            <h3>Clik Service — Product Updates</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel bibendum tellus. Curabitur pharetra leo quam, egestas ultricies ex pulvinar vel. Aenean sed libero est. Sed varius dolor ac quam pellentesque, vitae gravida nisl commodo. Nullam viverra risus ut elit faucibus, eleifend condimentum nisi fermentum.</p>
        </div>
        <div class="service-color" id="service-color1">
            <div class="colors-boxes">
                <div class="colors" id="color1"></div>
            </div>
        </div>
    </div>
    <div class="services" id="3">
    <div class="service-description">
            <h2>V 3</h2>
            <h3>Clik Jobs — Product Updates</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel bibendum tellus. Curabitur pharetra leo quam, egestas ultricies ex pulvinar vel. Aenean sed libero est. Sed varius dolor ac quam pellentesque, vitae gravida nisl commodo. Nullam viverra risus ut elit faucibus, eleifend condimentum nisi fermentum.</p>
        </div>
        <div class="service-color" id="service-color2">
            <div class="colors-boxes">
                <div class="colors" id="color2"></div>
            </div>
        </div>
    </div>
    <div class="services" id="1">
        <div class="service-description">
            <h2>V 1</h2>
            <h3>Clik Remote — Webinars | Clik Remote</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel bibendum tellus. Curabitur pharetra leo quam, egestas ultricies ex pulvinar vel. Aenean sed libero est. Sed varius dolor ac quam pellentesque, vitae gravida nisl commodo. Nullam viverra risus ut elit faucibus, eleifend condimentum nisi fermentum.</p>
        </div>
        <div class="service-color" id="service-color3">
            <div class="colors-boxes">
                <div class="colors" id="color3"></div>
            </div>
        </div>
    </div>
    <div class="services" id="2">
    <div class="service-description">
            <h2>V 2</h2>
            <h3>Clik Service — Product Updates</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel bibendum tellus. Curabitur pharetra leo quam, egestas ultricies ex pulvinar vel. Aenean sed libero est. Sed varius dolor ac quam pellentesque, vitae gravida nisl commodo. Nullam viverra risus ut elit faucibus, eleifend condimentum nisi fermentum.</p>
        </div>
        <div class="service-color" id="service-color1">
            <div class="colors-boxes">
                <div class="colors" id="color1"></div>
            </div>
        </div>
    </div>
                
</section>

<!-- <div class="prueba">
    <?php if(have_posts()) :
    while(have_posts()) : the_post();?>
    <?php endwhile; else: endif; ?>
    <h2>
        <?php the_field('version_number');?>
    </h2>
</div> -->

<?php get_footer();?>