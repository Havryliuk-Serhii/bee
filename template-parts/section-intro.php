<?php 

/**
 * The template for displaying the intro
 *
 * @package bee
 */

?>
<section class="ftco-intro" style="background-image: url(<?php echo get_theme_file_uri('/images/bg_3.jpg') ?>);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2><?php the_title();?></h2>
						<?php the_content();?>
						<p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Know more about us</a></p>
					</div>
				</div>
			</div>
		</section>