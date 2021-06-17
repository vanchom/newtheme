<?php 

$image = get_field('main_image');

$picture = $image['sizes']['large'];

// $image2 = get_field('testimonial_image');

// $picture2 = $image2['sizes']['large'];

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
            <?php echo '&#10004 '.implode('<br>', ($benefitservices));?>
               
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
            <?php echo '&#10004 '.implode('<br>', ($benefitservices2));?>               
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
            <?php echo '&#10004 '.implode('<br>', ($benefitservices3));?>               
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
    <div class="testimonials-container">
        <div class="testimonials-title">
           <p class="testimonial-title"> <?php the_field('testimonial-title') ?></p>
           <p class="testimonial-subtitle"><?php the_field('testimonial_subtitle') ?></p>
        </div>
        <div class="testimonials">
            <div class="testimonials-box">
                <img id="quotation" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/quotation.png"/>
                <p class="testimonial"><?php the_field('testimonial') ?></p>
                <p class="testimonial-subject"><?php the_field('testimonial_main_subject') ?></p>
                <p class="name-testimonial"> <?php the_field('name_testimonial') ?> </p>
            </div>
        </div>
        <div class="container-image">
    <?php 
    $image = get_field('testimonial_image');
    $size = 'full';
        if($image){
            echo wp_get_attachment_image( $image , $size );
        }
        ?>
        </div>
    </div>
</section>
<section class="container-arrows">
    <div class="arrows-box">
        <img class="arrows" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-left.png"/>
        <img class="arrows" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-right.png"/>
    </div>
    </section>
<?php get_footer();?>