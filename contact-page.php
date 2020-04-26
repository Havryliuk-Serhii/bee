<?php
/**
* Template Name: Page Contact
 */
get_header(); ?>

<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
	<div class="container">
		<div class="row d-flex align-items-stretch no-gutters">
			<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">

			</div>
			<div class="col-md-6 d-flex align-items-stretch">
				<div id="map"></div>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h4"><?php esc_html_e( 'Contact Information', 'bee' ); ?></h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3 d-flex">
          	    <div class="bg-light d-flex align-self-stretch box p-4">
	                <p><span>Address:</span> <?php echo get_option('my_address'); ?></p>
	            </div>
            </div>
            <div class="col-md-3 d-flex">
          	    <div class="bg-light d-flex align-self-stretch box p-4">
	                <p><span>Phone:</span> <a href="tel:<?php echo get_option('my_phone'); ?>"><?php echo get_option('my_phone'); ?></a></p>
	            </div>
            </div>
            <div class="col-md-3 d-flex">
          	    <div class="bg-light d-flex align-self-stretch box p-4">
	                <p><span>Email:</span> <a href="mailto:<?php echo get_option('my_email'); ?>"><?php echo get_option('my_email'); ?></a></p>
	            </div>
            </div>
            <div class="col-md-3 d-flex">
          	    <div class="bg-light d-flex align-self-stretch box p-4">
	                <p><span>Website:</span> <a href="https://<?php echo get_option('my_website'); ?>"><?php echo get_option('my_website'); ?></a></p>
	            </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
