<?php 

$image = get_field('main_image');

$picture = $image['sizes']['large'];

$benefitservices = get_field('benefit_services');

$benefitservices2 = get_field('benefit_services2');

$benefitservices3 = get_field('benefit_services3');

get_header();?>
<section class="main-container">
    <div class="first-container">
        
    <div class="container">
        <h1>  
            <?php the_field('main_title') ?>
        </h1>
    </div>
    <div class="container-2">
        <p>  
            
            <?php the_field('main_description') ?>
        </p>
    </div>
</section>

<section class="second-container">
    <div class="btn-container">
        <button class="btn">
            <span>CTA button</span>
        </button>
    </div>
    <div class="image">

    <img src="<?php echo $picture;?>" class="img-fluid">

    </div>
</section>
<section class="third-container">
    
    <div id="first-rectangle" class="rectangle">
        <div class="main-box">   
            
            <h1>
        
                <?php the_field('benefit_title') ?>
            
            </h1>
            <p>
                <?php the_field('benefit_description') ?>

            </p>
        </div>
        
        <div class="second-box">
            <h1>
        
                <?php the_field('key_title') ?>

            </h1>

            <p>
            <?php echo implode('&#10004', $benefitservices).'<br>';?>
               
            </p>

        </div>
        <div class="cta-btn">
            <?php the_field('cta_btn') ?>
        </div>
    </div>

    <div id="second-rectangle" class="rectangle">
        <div class="main-box">   
            
            <h1>
        
                <?php the_field('benefit_title2') ?>
            
            </h1>
            <p>
                <?php the_field('benefit_description2') ?>

            </p>
        </div>
        
        <div class="second-box">
            <h1>
        
                <?php the_field('key_title2') ?>

            </h1>

            <p>
            <?php echo implode('&#10004', $benefitservices2).'<br>';?>
               
            </p>

        </div>
        <div class="cta-btn">
            <?php the_field('cta_btn2') ?>
        </div>
    </div>

    <div id="third-rectangle" class="rectangle">
        <div class="main-box">   
            
            <h1>
        
                <?php the_field('benefit_title3') ?>
            
            </h1>
            <p>
                <?php the_field('benefit_description3') ?>

            </p>
        </div>
        
        <div class="second-box">
            <h1>
        
                <?php the_field('key_title') ?>

            </h1>

            <p>
            <?php echo implode('',$benefitservices3).'<br>';?>
               
            </p>
        </div>
        <div class="cta-btn">
            <?php the_field('cta_btn3') ?>
        </div>
    </div>
    <div class="fourth-rectangle">

        <div class="small-rectangle" id="first-box">   
            <div class="small-box-title">
                <h1>
        
                    <?php the_field('electrical_box') ?>
            
                </h1>
            </div>
            <p>
                <?php the_field('electrical_description') ?>

            </p>
        </div>    
        <div class="small-rectangle" id="second-box">   
            <div class="small-box-title">

                <h1>
        
                    <?php the_field('gas_box') ?>
            
                </h1>
            </div>
            <p>
                <?php the_field('gas_description') ?>

            </p>
        </div>
        <div class="small-rectangle" id="third-box">   
            <div class="small-box-title">

                <h1>
        
                    <?php the_field('ac_box') ?>
            
                </h1>
            </div>
            <p>
                <?php the_field('ac_description') ?>

            </p>
        </div>
    </div>

</section>
<section class="fourth-container">
    <div class="testimonials">

    </div>
</section>
</div>
<?php get_footer();?>