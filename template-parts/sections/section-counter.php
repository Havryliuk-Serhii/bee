<?php
/**
 * The template for displaying the Counter section
 * @package bee
 */
?>
<section class="ftco-counter img" id="section-counter" style="background-image: url(<?php echo get_theme_file_uri('images/bg_3.jpg' ); ?>);" data-stellar-background-ratio="0.5">
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
