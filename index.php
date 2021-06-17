<?php get_header();?>
<section class="select-container">
        <div class="version-box">
            <h2>Version</h2>
            <div class="dropdown">
					<select name="orderby" id="orderby" >
						<option value="version"
						<?php 
					$args = array(
						'tag' => 1,
						'offset' => 1
					);
					$query = new WP_Query( $arg);

					if($query->have_posts()) {
						while($query->have_posts()) {
							$query->the_post();
						}
					}
					rewind_posts();
					?>
>1</option>
						<option value="version">2</option>
						<option value="version">3</option>
						<option value="version">4</option>
					</select>	    
            </div>
        </div>
        <div class="colors-boxes">
            <div class="colors" id="color1"></div>
            <div class="colors" id="color2"></div>
            <div class="colors" id="color3"></div>
        </div>
</section>

<?php while ( have_posts() ) : the_post(); ?>
	<section class="services-container">
		<div class="clear"></div>
		<div class="services">
			<div class="service-description">
				<h2><?php the_field('version_number'); ?></h2>
				<h3><?php the_field('service_title'); ?></h3>
				<p><?php the_field('service_description'); ?></p>
			</div>
			<div class="service-color" id="service-color1">
				
            	<div class="colors-boxes">
               		<div class="colors" id="color1"></div>
            	</div>
        	</div>	
		</div>
		<div class="clear"></div>
</section>
<?php endwhile; ?>


<?php get_footer();?>