<?php
/**
 * The template for displaying the Project section
 * @package bee
 */
?>
<section class="ftco-section ftco-no-pt ftco-no-pb">
	<div class="container-fluid p-0">
		<div class="row no-gutters justify-content-center mb-5 pb-2">
          	<div class="col-md-6 text-center heading-section ftco-animate">
          		<span class="subheading"><?php esc_html_e('Projects','bee' ); ?></span>
            	<h2 class="mb-4"><?php esc_html_e('Featured Projects','bee' ); ?></h2>
            	<p><?php the_field('project_descr'); ?></p>
          	</div>
        </div>
    	<div class="row no-gutters">
			<?php
			    $project_gallery = new WP_Query(array('category_name' => 'projects','order' => 'ASC', 'posts_per_page'=>8));
			    if ($project_gallery->have_posts() ) :
			    while ($project_gallery->have_posts() ) : $project_gallery->the_post(); ?>
    		<div class="col-md-6 col-lg-3 ftco-animate">
    			<div class="project">
					<?php the_post_thumbnail( $size = 'post-thumbnail', ['class' => 'img-fluid', 'title' => '.the_title().'] ) ?>
	    			<div class="text">
	    				<span><?php the_field('project_spec'); ?></span>
	    				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	    			</div>
	    			<a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    				<span class="icon-expand"></span>
	    			</a>
    			</div>
    		</div>
		<?php endwhile;
				endif;
			wp_reset_query();
		?>
    	</div>
    </div>
</section>
<section class="ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
          	<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            	<div class="block-18 d-flex">
              		<div class="text d-flex align-items-center">
                		<strong class="number" data-number="<?php the_field('counter_years'); ?>">0</strong>
              		</div>
              		<div class="text-2">
              			<span>Years of <br>Experienced</span>
              		</div>
            	</div>
          	</div>
          	<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            	<div class="block-18 d-flex">
              		<div class="text d-flex align-items-center">
                		<strong class="number" data-number="<?php the_field('counter_project'); ?>">0</strong>
              		</div>
              		<div class="text-2">
              			<span>Project <br>Successful</span>
              		</div>
            	</div>
          	</div>
          	<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            	<div class="block-18 d-flex">
              		<div class="text d-flex align-items-center">
                		<strong class="number" data-number="<?php the_field('counter_expert'); ?>">0</strong>
              		</div>
              		<div class="text-2">
              			<span>Professional <br>Expert</span>
              		</div>
            	</div>
          	</div>
          	<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            	<div class="block-18 d-flex">
              		<div class="text d-flex align-items-center">
                		<strong class="number" data-number="<?php the_field('counter_happy_cust'); ?>">0</strong>
              		</div>
              		<div class="text-2">
              			<span>Happy <br>Customers</span>
              		</div>
            	</div>
          	</div>
        </div>
    </div>
</section>
